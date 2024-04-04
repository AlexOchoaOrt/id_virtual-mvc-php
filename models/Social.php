<?php
namespace Model;
class Social extends ActiveRecord{
    protected static $tabla = 'social';
    protected static $columnasDB = ['token', 'link_1', 'link_2', 'link_3', 'link_4'];
    public $token;
    public $link_1;
    public $link_2;
    public $link_3;
    public $link_4;
    public function __construct($args =[])
    {
        $this->token = $args['token'] ?? '';
        $this->link_1 = $args['link_1'] ?? '';
        $this->link_2 = $args['link_2'] ?? '';
        $this->link_3 = $args['link_3'] ?? '';
        $this->link_4 = $args['link_4'] ?? '';
    }
}