<?php

namespace Controllers;

use Classes\Email;
use Model\Contacto;
use Model\Usuario;
use Model\Empresa;
use Model\Cuenta;
use Model\Media;
use Model\Social;
use MVC\Router;

class LoginController{
    public static function personal(Router $router){
        $usuario = new Usuario;
        $cuenta = new Cuenta;
        $contacto = new Contacto;
        $media = new Media;
        $social = new Social;
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $usuario->sincronizar($_POST);
            $cuenta->sincronizar($_POST);
            $contacto->sincronizar($_POST);
            $media->sincronizar($_POST);
            $social->sincronizar($_POST);
            $alertas= $usuario->ValidarNuevaCuenta();
            $alertas2= $contacto->ValidarNuevaCuenta();
            
            if(empty($alertas)&&empty($alertas2)){
                $resultado = $contacto->existeUsuario();
                if($resultado->num_rows){
                    $alertas = Usuario::getAlertas();                
                }
                else{
                    //hashear el password
                    $usuario->hashPassword();
                    $cuenta->crearToken();
                    $usuario->token_f = $cuenta->token;
                    $contacto->token_cont = $usuario->token_f;
                    $media->token = $contacto->token_cont;
                    $social->token = $media->token;
                    $cuenta->usuario = 1;
                    $token = "";
                    //Crear la cuenta de usuario
                    $resultado = $cuenta->guardar($token);
                    $resultado2 = $usuario->guardar($token);
                    $resultado3 = $contacto->guardar($token);
                    if($resultado&&$resultado2&&$resultado3){
                        $social->guardar($token);
                        $media->guardar($token);
                        $email = new Email($usuario->nombre,$contacto->email,$cuenta->token);
                        $email->EnviarConfirmacion();
                        header('location: /mensaje');
                    }
                }
                
            }
        }
        $router->render('form/personal',[
            'usuario' => $usuario,
            'contacto' => $contacto,
            'alertas' => $alertas,
            'alertas2' => $alertas2
        ]);
    }
    public static function empresa(Router $router){
        $empresa = new Empresa;
        $cuenta = new Cuenta;
        $contacto = new Contacto;
        $media = new Media;
        $social = new Social;
        $alertas = [];
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $empresa->sincronizar($_POST);
            $cuenta->sincronizar($_POST);
            $contacto->sincronizar($_POST);
            $media->sincronizar($_POST);
            $social->sincronizar($_POST);
            $alertas= $empresa->ValidarNuevaCuenta();
            $alertas2= $contacto->ValidarNuevaCuenta();
            
            if(empty($alertas)&&empty($alertas2)){
                $resultado = $contacto->existeUsuario();
                if($resultado->num_rows){
                    $alertas = Empresa::getAlertas();                
                }
                else{
                    //hashear el password
                    $empresa->hashPassword();
                    $cuenta->crearToken();
                    $empresa->token_m = $cuenta->token;
                    $contacto->token_cont = $empresa->token_m;
                    $media->token = $contacto->token_cont;
                    $social->token = $media->token;
                    $cuenta->usuario = 2;
                    $token = "";
                    //Crear la cuenta de empresa
                    $resultado = $cuenta->guardar($token);
                    $resultado2 = $empresa->guardar($token);
                    $resultado3 = $contacto->guardar($token);
                    $email = new Email($empresa->nombre,$contacto->email,$cuenta->token);
                    $email->EnviarConfirmacion();
                    if($resultado&&$resultado2&&$resultado3){
                        $social->guardar($token);
                        $media->guardar($token);
                        header('location: /mensaje');
                    }
                }
                
            }
        }
        $router->render('form/empresa',[
            'empresa' => $empresa,
            'contacto' => $contacto,
            'alertas' => $alertas,
            'alertas2' => $alertas2
        ]);
        
    }
    public static function login(Router $router){
        $alertas = [];
        $auth = new Usuario;
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $auth = new Contacto($_POST);
            $auth2 = new Usuario($_POST);
            $auth3 = new Empresa($_POST);
            $email = $auth->email;
            $password = $auth2->password;
            $password2 =$auth3->password;
            $alertas = $auth->validarLogin($email,$password);
            if(empty($alertas)){
                $contacto = Contacto::where('email', $auth->email);
                $token = $contacto->token_cont;
                $cuenta = Cuenta::where('token', $token);
                if($contacto&&$cuenta){
                    if($cuenta->usuario == 1){
                        $usuario = Usuario::where('token_f', $token);
                        if($usuario->verificarpassword($password, $cuenta->confirmado)){
                            $_SESSION['token'] = $cuenta->token;
                            $_SESSION['login'] = true;
                            header('Location: /usuario');//Redireccionamiento
                        }
                    }
                    if($cuenta->usuario == 2){
                        $empresa = Empresa::where('token_m', $token);
                        if($empresa->verificarpassword($password2, $cuenta->confirmado)){
                            $_SESSION['token'] = $cuenta->token;
                            $_SESSION['login'] = true;
                            header('Location: /empresa_usuario');//Redireccionamiento
                        }
                    }

                }else{
                    Usuario::setAlerta('error','Usuario no encontrado');
                }

            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('form/login',[
            'alertas' => $alertas,
            'auth' => $auth
        ]);
    }
    public static function logout(Router $router){
        session_start();
        $_SESSION = [];
        header('Location: /');
    }
    public static function olvide(Router $router){
        $alertas = [];
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $auth = new Contacto($_POST);
            $alertas= $auth->validarEmail();
            if(empty($alertas)){
                $contacto = Contacto::where('email', $auth->email);
                $token= $contacto->token_cont;
                $cuenta = Cuenta::where('token', $token);
                if($cuenta && $cuenta->confirmado ==="1"){
                    $usuario = Usuario::where('token_f', $token);
                    $email = new Email($usuario->nombre, $contacto->email, $usuario->token_f);
                    $email->enviarInstrucciones();

                    //alerta de exito
                    Usuario::setAlerta('exito','Revisa tu email');
                }else{
                    Usuario::setAlerta('error','El usuario no existe o no esta confirmado');
                }
                $alertas= Usuario::getAlertas();
            }
        }
        $router->render('form/olvide',[
            'alertas' => $alertas]);
    }
    public static function recuperar(Router $router){
        $alertas = [];
        $token = s($_GET['token']);
        $usuario = Usuario::where('token_f',$token);
        if(empty($usuario)){
            Usuario::setAlerta('error','Token no valido');
            $error = true;
        }
        if($_SERVER['REQUEST_METHOD']==='POST'){
            $password = new Usuario($_POST);
            $alertas = $password->validarPassword();
            if(empty($alertas)){
                $usuario->password = null;
                $usuario->password = $password->password;
                $usuario->hashPassword();
                $resultado = $usuario->guardar($token);
                if($resultado){
                    header('Location: /mensaje_recuperar');
                }
            }
        }
        $alertas = Usuario::getAlertas();
        $router->render('form/recuperar',[
            'alertas' => $alertas,
            'error' => $error
        ]);
    }
    public static function mensaje(Router $router){
        $router->render('auth/mensaje');
    }
    public static function mensaje_recuperar(Router $router){
        $router->render('auth/mensaje_recuperar');
    }
    public static function confirmar(Router $router){
        $alertas = [];
        $token = s($_GET['token']);
        $cuenta = Cuenta::where('token',$token);
        
        if(empty($cuenta)){
           Usuario::setAlerta('error', 'Token no valido');
        }
        else{
           $cuenta->confirmado = "1";
           $cuenta->guardar($token);
           Cuenta::setAlerta('exito', 'cuenta creada correctamente');
        }

        $alertas = Cuenta::getAlertas();

        $router->render('auth/confirmar',[
            'alertas' => $alertas
        ]);
    }
}