<?php 
namespace Model;

class Cita extends ActiveRecord{
    //base de dato sanitizada
    protected static $tabla = 'citas';
    protected static $columnasDB = ['id', 'fecha', 'hora', 'usuarioId'];

    public $id;
    public $fecha;
    public $hora;
    public $usuarioId;

    public function __construct($args = []){
        $this->id = $args['id']?? null;
        $this->fecha = $args['fecha']?? '';
        $this->hora = $args['hora']?? '';
        $this->usuarioId = $args['usuarioId']?? '';  //usuarioId es el id del usuario que solicita la cita.
    }

// los modelos seconstruyen con la imagen de datos que viene de la base de datos asi los objetos que insertamos
// a la base de datos tienen la estructura pre definida
}