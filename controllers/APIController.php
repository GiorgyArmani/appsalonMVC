<?php

namespace Controllers;

use Model\Cita;
use Model\Servicio;
use Model\CitaServicio;

class APIController{
    public static function index(){
        $servicios = Servicio::all();

        echo json_encode($servicios);
        exit();
    }

    public static function guardar(){
        //alamacena la cita y devuelve el id
        $cita = new Cita($_POST);

        $resultado = $cita->guardar();

        $id = $resultado['id'];
        //alamacena las servicios con el id de la cita
        $idServicios = explode(',', $_POST['servicios']);
        foreach($idServicios as $idServicio){
            $args = [
                'citaId' => $id,
                'servicioId' => $idServicio
            ];
            $citaServicio = new CitaServicio($args);
            $citaServicio->guardar();

        }
        //retorna una respuesta 
        echo json_encode(['resultado' => $resultado]);
    }

    public static function eliminar(){
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            $id = $_POST['id'];
            $cita = Cita::find($id);
            $cita->eliminar();
            header('Location:' . $_SERVER['HTTP_REFERER']);
    }
    }
}