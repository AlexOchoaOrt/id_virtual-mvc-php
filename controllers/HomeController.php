<?php
 namespace Controllers;
 use MVC\Router;

 class HomeController{
    public static function inicio(Router $router){
        $router->render('home/index');
    }
    public static function contacto(Router $router){
        $router->render('home/contact');
    }
    public static function productos(Router $router){
        $router->render('home/features');
    }
    public static function nosotros(Router $router){
        $router->render('home/about');
    }
    

 }