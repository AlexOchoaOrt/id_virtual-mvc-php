<?php
 namespace Controllers;
 use MVC\Router;
 use Model\Contacto;
 use Model\Media;
 use Model\Social;
 use Model\Usuario;
 use Model\Cuenta;
use Model\Empresa;

class IdController{
    public static function id(Router $router){
        $token = s($_GET['cuenta']);
        $usuario = Usuario::where('token_f', $token);
        $contacto = Contacto::where('token_cont', $token);
        $social = Social::where('token', $token);
        $media = Media::where('token', $token);
        $router->render('id/id',[
            'usuario'=>$usuario,
            'contacto' => $contacto,
            'social' => $social,
            'media' => $media
        ]);
    }
    public static function ide(Router $router){
        $token = s($_GET['cuenta']);
        $empresa = Empresa::where('token_m', $token);
        $contacto = Contacto::where('token_cont', $token);
        $social = Social::where('token', $token);
        $media = Media::where('token', $token);
        $router->render('id/ide',[
            'empresa'=>$empresa,
            'contacto' => $contacto,
            'social' => $social,
            'media' => $media
        ]);
    }
    public static function Qr(Router $router){
        $token = s($_GET['cuenta']);
        $cuenta = Cuenta::where('token', $token);
        $router->render('id/Qr',[
            'cuenta'=>$cuenta,
        ]);
    }
    public static function Qre(Router $router){
        $token = s($_GET['cuenta']);
        $cuenta = Cuenta::where('token', $token);
        $router->render('id/Qre',[
            'cuenta'=>$cuenta,
        ]);
    }

}

?>