<?php
namespace Model;

class Empresa extends ActiveRecord{
    protected static $tabla = 'persona_moral';
    protected static $columnasDB = ['nombre','contacto','password','token_m', 'token_m_c',];
    public $nombre;
    public $contacto;
    public $password;
    public $token_m;
    public $token_m_c;
    public function __construct($args =[])
    {
        $this->nombre = $args['nombre'] ?? '';
        $this->contacto = $args['contacto'] ?? '';
        $this->password = $args['password'] ?? '';
        $this->token_m = $args['token'] ?? '';
        $this->token_m_c = '';
    }
    public function ValidarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['error'][]='El nombre es obligatorio';
        } 
        if(!$this->contacto){
            self::$alertas['error'][]='El contacto';
        } 
        if(!$this->password){
            self::$alertas['error'][]='El password es obligatorio';
        } 
        return self::$alertas;
    }
    public function hashPassword(){
        $this->password = password_hash($this->password, PASSWORD_BCRYPT);
    }
    public function verificarpassword($password, $confirmado){
        $resultado  = password_verify($password, $this->password);
        if(!$resultado||$confirmado==0){
            self::$alertas['error'][] = 'Password incorrecto o tu cuenta no ha sido confirmada';
        }else{
           return true;
        }
        
    }

}