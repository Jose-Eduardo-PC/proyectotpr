<?php

namespace App\Http\Controllers;
use App\Models\Rol;
use Illuminate\Http\Request;

class RolController extends Controller
{
    //
    public function index()
    {
      //
      $datos['rol']=Rol::paginate(9);
        return view('rol.index',$datos );
        
    }
    //////////////////////////////////////////////////////////////

    public function create()
    {
        return view('rol.create');
      




    }
/////////////////////////////////////////////////////////////////////

    public function edit($id){   // recibe el id


        $rol=Rol::findOrFail($id);  // 

        return view('rol.edit', compact('rol') );


    }

//////////////////////////////////////////////////////////////////////

    public function update(Request $request, $id){   // recibe el id 

   
        $datosRol = request()->except(['_token','_method']);
        Rol::where('id','=',$id)->update($datosRol);          // busca la informacion con el id si encuentra hace la actualizacion 

        $rol=Rol::findOrFail($id);
        return view('rol.edit', compact('rol') );
       
     




    }

///////////////////////////////////////////////////////////////////////




    public function store(Request $request){

       // $datosRol = request()->all();
        $datosrol = request()->except('_token');
        
        Rol::insert($datosrol);

       //return response()->json($datosrol);
       return redirect('rol');
 

    }
   
    //////////////////////////////////////////////////////////////////////


//para eliminar 
    public function destroy($id){

        rol::destroy($id);//aqui elimina el id
        return redirect('rol'); //redirecciona a empleado


    }

    //////////////////////////////////////////////////////////////////////////










}
