<?php
namespace Model;

class Usuario extends ActiveRecord{
    protected static $tabla = 'persona_fisica';
    protected static $columnasDB = ['nombre', 'apellido_pa', 'apellido_ma',
    'fecha_na','password','token_f', 'token_f_c',];
    public $nombre;
    public $apellido_pa;
    public $apellido_ma;
    public $fecha_na;
    public $password;
    public $token_f;
    public $token_f_c;
    public function __construct($args =[])
    {
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido_pa = $args['apellido_pa'] ?? '';
        $this->apellido_ma = $args['apellido_ma'] ?? '';
        $this->fecha_na = $args['fecha_na'] ?? null;
        $this->password = $args['password'] ?? '';
        $this->token_f = $args['token'] ?? '';
        $this->token_f_c = '';
    }
    public function ValidarNuevaCuenta(){
        if(!$this->nombre){
            self::$alertas['error'][]='El nombre es obligatorio';
        } 
        if(!$this->apellido_pa){
            self::$alertas['error'][]='El appellido paterno es obligatorio';
        } 
        if(!$this->apellido_ma){
            self::$alertas['error'][]='El apellido materno es obligatorio';
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