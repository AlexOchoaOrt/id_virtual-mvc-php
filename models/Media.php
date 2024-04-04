<?php
namespace Model;
class Media extends ActiveRecord{
    protected static $tabla = 'media';
    protected static $columnasDB = ['token', 'fotografia'];
    public $token;
    public $fotografia;
    public function __construct($args =[])
    {
        $this->token = $args['token'] ?? '';
        $this->fotografia = $args['fotografia'] ?? 'perfil.png';
    }
    
}