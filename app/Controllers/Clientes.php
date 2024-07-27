<?php

namespace App\Controllers;
//utilizar el modelo
use App\Models\ClientesModel;

class Clientes extends BaseController
{
    public function index(): string
    {
        $clientes = new ClientesModel();
        //FindAll = select * from nivelesacademicosModel
        $datos['datos']=$clientes->findAll();

        return view('clientes',$datos);
    }
    public function nuevosClientes():string
    {
        return view('nuevos_clientes'); 
    }
    public function agregarClientes()
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtNit'),
            'telefono' => $this->request->getVar('txtTelefono'),
            'correo_electronico' => $this->request->getVar('txtCorreo'),
            'direccion' => $this->request->getVar('txtDireccion')
        ];
        $clientes = new ClientesModel();
        $clientes-> insert($datos); //insert into cliente values(...);
        echo "datos guardados";
        return redirect()->route('ver_clientes');
    }
    public function eliminarClientes($dpi=null)
    {
        $clientes = new ClientesModel();
        $clientes->delete(['cliente_id'=>$dpi]);
        return redirect()->route('ver_clientes');
    }
    public function buscarClientes($id=null)
    {
        $clientes = new ClientesModel();
        $datos['datos']=$clientes->where('cliente_id',$id)->first();
        return view('editar_cliente',$datos);
    }

    public function modificarClientes()
    {
        $datos=[
            'cliente_id' => $this->request->getVar('txtClienteId'),
            'nombre' => $this->request->getVar('txtNombre'),
            'apellido' => $this->request->getVar('txtApellido'),
            'nit' => $this->request->getVar('txtDireccion'),
            'telefono' => $this->request->getVar('txtNit'),
            'correo_electronico' => $this->request->getVar('txtTelefono'),
            'direccion' => $this->request->getVar('txtCorreo')
        ];
    $clientes = new ClientesModel();
    $clientes->update($datos['cliente_id'], $datos);
    return redirect()->route('ver_clientes');
    }
}