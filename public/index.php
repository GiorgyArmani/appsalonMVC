<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\CitaController;
use Controllers\LoginController;



$router = new Router();

//iniciar sesión

$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);
$router->get('/logout', [LoginController::class, 'logout']);


// recuperar password
$router->get('/forgot', [LoginController::class, 'forgot']);
$router->post('/forgot', [LoginController::class, 'forgot']);
$router->get('/recover', [LoginController::class, 'recover']);
$router->post('/recover', [LoginController::class, 'recover']);


// crear cuenta
$router->get('/signup', [LoginController::class,'signup']);
$router->post('/signup', [LoginController::class,'signup']);

//confirmar cuenta
$router->get('/confirmar-cuenta', [LoginController::class,'confirmar']);
$router->get('/mensaje', [LoginController::class,'mensaje']);


//area privada
$router->get('/cita', [CitaController::class, 'index']);


// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador


$router->comprobarRutas();