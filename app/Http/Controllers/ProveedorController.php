<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function index()
    {
        $proveedor = Proveedor::paginate();
        return view('proveedor.index', compact('proveedor'));
        
    }
  /// creaar usuario
    public function create()
    {
        return view('proveedor.create');
    }
    public function store(Request $request)
    {
            $validatedData = $request->validate([
                'nombre'=>'required',
                'apellido'=>'required',
                'email'=>'required',
                'celular'=>'required',
                'direccion'=>'required',
                'estado'=>'required'
              
                ]);
            $proveedor = new Proveedor(); 
            $proveedor->nombre = $request->input('nombre');
            $proveedor->apellido = $request->input('apellido');
            $proveedor->email = $request->input('email');
            $proveedor->celular = $request->input('celular');
            $proveedor->Direccion= $request->input('direccion');
            $proveedor->estado = $request->input('estado');

            $proveedor->save();
            
            $proveedor= Proveedor::All();
            return view('proveedor.index', compact('proveedor')); 
    }
    public function show($id)
    {
        $proveedor= Proveedor::find($id);
        return view('proveedor.show', compact('proveedor'));
    }



            
          















}
