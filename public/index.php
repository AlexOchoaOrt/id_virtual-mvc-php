<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\EmpresaController;
use Controllers\HomeController;
use Controllers\IdController;
use Controllers\LoginController;
use Controllers\UsuarioController;
use MVC\Router;

$router = new Router();



//sitio principal
$router->get('/',[HomeController::class, "inicio"]);
$router->post('/',[HomeController::class, "inicio"]);
$router->get('/productos',[HomeController::class, "productos"]);
$router->post('/productos',[HomeController::class, "productos"]);
$router->get('/nosotros',[HomeController::class, "nosotros"]);
$router->post('/nosotros',[HomeController::class, "nosotros"]);
$router->get('/contacto',[HomeController::class, "contacto"]);
$router->post('/contacto',[HomeController::class, "contacto"]);

//formularios
$router->get('/personal',[LoginController::class, "personal"]);
$router->post('/personal',[LoginController::class, "personal"]);
$router->get('/empresa',[LoginController::class, "empresa"]);
$router->post('/empresa',[LoginController::class, "empresa"]);

//Confirmar cuenta
$router->get('/confirmar-cuenta',[LoginController::class, "confirmar"]);
$router->get('/mensaje',[LoginController::class, "mensaje"]);
$router->get('/mensaje_recuperar',[LoginController::class, "mensaje_recuperar"]);

//logins
$router->get('/login',[LoginController::class, "login"]);
$router->post('/login',[LoginController::class, "login"]);
$router->get('/logout',[LoginController::class, "logout"]);
// recuperar password
$router->get('/olvide',[LoginController::class, "olvide"]);
$router->post('/olvide',[LoginController::class, "olvide"]);
$router->get('/recuperar',[LoginController::class, "recuperar"]);
$router->post('/recuperar',[LoginController::class, "recuperar"]);

//crear cuenta
$router->get('/crear',[LoginController::class, "crear"]);
$router->post('/crear',[LoginController::class, "crear"]);

//id
$router->get('/id',[IdController::class, "id"]);
$router->post('/id',[IdController::class, "id"]);
$router->get('/ide',[IdController::class, "ide"]);
$router->post('/ide',[IdController::class, "ide"]);
$router->get('/Qr',[IdController::class, "Qr"]);
$router->post('/Qr',[IdController::class, "Qr"]);
$router->get('/Qre',[IdController::class, "Qre"]);
$router->post('/Qre',[IdController::class, "Qre"]);

//imagenes

//Area de usuario
$router->get('/usuario',[UsuarioController::class, "index"]);
$router->post('/usuario',[UsuarioController::class, "index"]);
$router->get('/perfil',[UsuarioController::class, "perfil"]);
$router->post('/perfil',[UsuarioController::class, "perfil"]);

//area empresa
$router->get('/empresa_usuario',[EmpresaController::class, "index"]);
$router->post('/empresa_usuario',[EmpresaController::class, "index"]);
$router->get('/perfil_empresarial',[EmpresaController::class, "perfil"]);
$router->post('/perfil_empresarial',[EmpresaController::class, "perfil"]);






// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();