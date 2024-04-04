<?php
namespace Controllers;

use Model\Contacto;
use Model\Media;
use Model\Social;
use Model\Usuario;
use MVC\Router;

class UsuarioController{
    public static function index(Router $router){
        session_start();
        isAuth();
        $token = $_SESSION['token'];
        $usuario = Usuario::where('token_f', $token);
        $contacto = Contacto::where('token_cont', $token);
        $social = Social::where('token', $token);
        $media = Media::where('token', $token);
        $router->render('usuario/index',[
            'usuario' => $usuario,
            'contacto' => $contacto,
            'social' => $social,
            'media' => $media
        ]);
    }
    public static function perfil(Router $router)
    {
        session_start();
        isAuth();
    
        $token = $_SESSION['token'];
        $usuario = Usuario::where('token_f', $token);
        $contacto = Contacto::where('token_cont', $token);
        $social = Social::where('token', $token);
        $media = Media::where('token', $token);
        $original = $media->fotografia;
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['image'])) {
                $img = $_POST['image'];
                $img = str_replace('data:image/png;base64,', '', $img);
                $img = str_replace(' ', '+', $img);
                $data = base64_decode($img);
                $carpeta = '../public/build/imagenes/';
    
                if (!is_dir($carpeta)) {
                    mkdir($carpeta);
                }
                if ($img == "") {
                    echo "<script>alert('no se selecciona ninguna imagen');</script>";
                }
    
                if ($img != "") {
                    unlink($carpeta . $original);
                }

                $nombreImagen = md5(uniqid(rand(), true)) . ".jpg";
                $media->fotografia = $nombreImagen;
                $resultado = $media->guardar($token);
    
                if ($resultado) {
                    Usuario::setAlerta('exito', 'informacion actualizada');
                    $file = $carpeta . $nombreImagen;
                    file_put_contents($file, $data);
                }
                $alertas = Usuario::getAlertas();
    
                
            } else {
                $tipo = $_POST['tipo'];
    
                if ($tipo == 1) {
                    $usuario->sincronizar($_POST);
                    $resultado = $usuario->guardar($token);
                    $contacto->sincronizar($_POST);
                    $resultado2 = $contacto->guardar($token);
    
                    if ($resultado && $resultado2) {
                        Usuario::setAlerta('exito', 'informacion actualizada');
                    } else {
                        Usuario::setAlerta('error', 'Erro, no se a actulizado. Intentelo mas tarde');
                    }
                }
    
                if ($tipo == 2) {
                    $social->sincronizar($_POST);
                    $social->token = $token;
                    $resultado = $social->guardar($token);
    
                    if ($resultado) {
                        Usuario::setAlerta('exito', 'informacion actualizada');
                    } else {
                        Usuario::setAlerta('error', 'Erro, no se a actulizado. Intentelo mas tarde');
                    }
                }
    
                $alertas = Usuario::getAlertas();
            }
        }
    
        $router->render('usuario/perfil', [
            'usuario' => $usuario,
            'contacto' => $contacto,
            'social' => $social,
            'media' => $media,
            'alertas' => $alertas
        ]);
    }
    
}
?>
