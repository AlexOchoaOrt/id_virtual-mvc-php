<?php
namespace Model;

class Contacto extends ActiveRecord{
    protected static $tabla = 'contacto';
    protected static $columnasDB = ['direccion', 'cp', 'telefono', 'email', 'token_cont',];
    public $direccion;
    public $cp;
    public $telefono;
    public $email;
    public $token_cont;
    public function __construct($args =[])
    {
        $this->direccion = $args['direccion'] ?? '';
        $this->cp= $args['cp'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->email = $args['email'] ?? null;
        $this->token_cont = $args['token'] ?? '';
    }
    public function ValidarNuevaCuenta(){
        if(!$this->direccion){
            self::$alertas['error'][]='La direccion es obligatoria';
        } 
        if(!$this->cp){
            self::$alertas['error'][]='El cp es obligatorio';
        } 
        if(!$this->telefono){
            self::$alertas['error'][]='El telefono es obligatorio';
        } 
        if(!$this->email){
            self::$alertas['error'][]='El email es obligatorio';
        } 
        return self::$alertas;
    }
    public function existeUsuario(){
        $query = "SELECT * FROM " . self::$tabla . " Where email ='" . $this->email. "' LIMIT 1";
        $resultado = self::$db->query($query);
        if($resultado->num_rows){
                self::$alertas['error'][] ='El Usuario ya esta registrado';
        }
        return $resultado;
    }
    public function validarLogin($email, $password){
        if(!$email){
            self::$alertas['error'][] = 'El email es obligatorio';
        }
        if(!$password){
            self::$alertas['error'][] = 'El password es obligatorio';
        }
        return self::$alertas;
    }
}