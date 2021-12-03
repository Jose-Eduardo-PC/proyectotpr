<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    //
    //controlador para hacer llamar al index
    public function index()
    {
        $Usuario = Usuario::paginate();
        return view('Usuario.index', compact('Usuario'));
        
    }
  /// creaar usuario
    public function create()
    {
        return view('Usuario.create');
    }
// validacion de los campos
    public function store(Request $request)
    {
        
            $validatedData = $request->validate([
                'name'=>'required',
                'password'=>'required',
               // 'avatar'=>'required|image' era para la foto eeraa
               'telefono'=>'required'
                ]);
           $Usuario = new Usuario(); 
            //if($request->hasFile('avatar')){
              //  $file = $request->file('avatar');
            //    $foto = time().$file->getClientOriginalName();
                // validacion de la imagen si esque pones imagen $file->move(public_path().'/images/',$foto);
            //}
          //  $Usuario->email = $request->input('email');
            $Usuario->Celular = $request->input('telefono');
            $Usuario->name = $request->input('name');
           // $Usuario->profile_photo_path = $foto;
           
            $Usuario->password = $request->input('password');
            $Usuario->save();
    
            $Usuario = Usuario::All();
            return view('Usuario.index', compact('Usuario')); 
    }


}
