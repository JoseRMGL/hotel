<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\HotelesModel;

class Hoteles extends BaseController
{
    public function index(): string
    {
        $hoteles = new HotelesModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$hoteles->findAll();

        return view('hoteles',$datos);
    }
    public function nuevosHoteles():string
    {
        return view('nuevo_hotel'); 
    }
    public function agregarHotel()
    {
        $datos=[
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreo'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
        $hoteles = new HotelesModel();
        $hoteles-> insert($datos); //insert into cliente values(...);
        echo "datos guardados";
        return redirect()->route('ver_hoteles');
    }
    public function eliminarHotel($dpi=null)
    {
        $hoteles = new HotelesModel();
        $hoteles->delete(['hotel_id'=>$dpi]);
        return redirect()->route('ver_hoteles');
    }
    public function buscarHotel($id=null)
    {
        $hoteles = new HotelesModel();
        $datos['datos']=$hoteles->where('hotel_id',$id)->first();
        return view('editar_hotel',$datos);
    }

    public function modificarHotel()
    {
        $datos=[
            'hotel_id' => $this->request->getVar('txtHotelId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'correoelectronico' => $this->request->getVar('txtCorreo'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtDireccion'),
            'ciudad_id' => $this->request->getVar('txtCiudadId'),
            'categoria_id' => $this->request->getVar('txtCategoriaId'),
            'usuario_id' => $this->request->getVar('txtUsuarioId')
        ];
    $hoteles = new HotelesModel();
    $hoteles->update($datos['hotel_id'], $datos);
    return redirect()->route('ver_hoteles');
    }
}