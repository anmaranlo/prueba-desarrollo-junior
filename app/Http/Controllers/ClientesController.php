<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cliente;

class ClientesController extends Controller
{
    public function index()
    {
        $clientes = Cliente::orderBy('id', 'ASC')->paginate(5);
        return view('admin.clientes.index')->with('clientes', $clientes);
        
    }

    public function create()
    {
        return view('admin.clientes.create');
    }

    public function store(Request $request)
    {
        $clientes = new Cliente($request->all());
        $clientes->save();
        return view('admin.clientes.index');
    }

    public function edit($id)
    {
        $cliente = Cliente::find($id);
        return view('admin.clientes.edit')->with('cliente', $cliente);
    }

    public function update(Request $request, $id)
    {
        $cliente = Cliente::find($id);
        $cliente->nombre = $request->nombre;
        $cliente->apellido = $request->apellido;
        $cliente->identificacion = $request->identificacion;
        $cliente->email = $request->email;
        $cliente->telefono = $request->telefono;
        $cliente->direccion = $request->direccion;
        $cliente->ciudad = $request->ciudad;
        $cliente->pais = $request->pais;
        $cliente->save();
        return redirect()->route('clientes.index');
    }

    public function destroy($id)
    {
        Cliente::destroy($id);
        return redirect()->route('clientes.index');

    }
}
