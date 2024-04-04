<?php
namespace Model;
class Cuenta extends ActiveRecord{
    protected static $tabla = 'cuenta';
    protected static $columnasDB = ['token', 'fecha_registro', 'confirmado', 'usuario'];
    public $token;
    public $fecha_registro;
    public $confirmado;
    public $usuario;
    public function __construct($args =[])
    {
        $this->token = $args['token'] ?? '';
        $this->fecha_registro = $args['fecha'] ?? date("Y-m-d");
        $this->confirmado = $args['confirmado'] ?? '0';
        $this->usuario = $args['usuario'] ?? '0';
    }
    public function crearToken(){
        $this->token = uniqid();
    }
}