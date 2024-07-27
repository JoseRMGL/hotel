<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ReservacionesModel;

class Reservaciones extends BaseController
{
    public function index(): string
    {
        $reservaciones = new ReservacionesModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$reservaciones->findAll();

        return view('reservaciones',$datos);
    }
    public function nuevosReservaciones():string
    {
        return view('nueva_reservacion'); 
    }
    public function agregarReservacion()
    {
        $datos=[
            'reservacion_id' => $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuario')
        ];
        $reservaciones = new ReservacionesModel();
        $reservaciones-> insert($datos); //insert into cliente values(...);
        echo "datos guardados";
        return redirect()->route('ver_reservaciones');
    }
    public function eliminarReservacion($dpi=null)
    {
        $reservaciones = new ReservacionesModel();
        $reservaciones->delete(['cliente_id'=>$dpi]);
        return redirect()->route('ver_reservaciones');
    }
    public function buscarReservacion($id=null)
    {
        $reservaciones = new ReservacionesModel();
        $datos['datos']=$reservaciones->where('reservacion_id',$id)->first();
        return view('editar_reservacion',$datos);
    }

    public function modificarReservacion()
    {
        $datos=[
            'reservacion_id' => $this->request->getVar('txtReservacionId'),
            'fecha' => $this->request->getVar('txtFecha'),
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'descripcion' => $this->request->getVar('txtDescripcion'),
            'usuario_id' => $this->request->getVar('txtUsuario')
        ];
    $reservaciones = new ReservacionesModel();
    $reservaciones->update($datos['reservacion_id'], $datos);
    return redirect()->route('ver_reservaciones');
    }
}