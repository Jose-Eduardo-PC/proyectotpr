<?php

namespace App\Http\Controllers;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    /////////////////////////////////////
    public function index()
    {
       $datos['estudiante']=Estudiante::paginate(5);
        return view('estudiante.index',$datos );
        
    }
    
    ///////////////////////////////////
/// creaar usuario
public function create()
{
    return view('estudiante.create');
}


    ///////////////////////////////
    public function store(Request $request)
    {

      // $datosProveedor = request()->all();
       $datosEstudiante = request()->except('_token');


       Estudiante::insert($datosEstudiante);

       return redirect('estudiante');
 



       // return response()->json($datosProveedor);

            
            $estudiante= Estudiante::All();
            return view('estudiante.index', compact('estudiante')); 
    }


    ///////////////////////////////
    public function show($id)
    {
        $materia= Estudiante::find($id);
        return view('estudiante.show', compact('estudiante'));
    }





/////////////////////////////////////////

public function update(Request $request, $id){   // recibe el id 

   
    $datosEstudiante = request()->except(['_token','_method']);
    Estudiante::where('id','=',$id)->update($datosEstudiante);          // busca la informacion con el id si encuentra hace la actualizacion 

    $estudiante=Estudiante::findOrFail($id);
   return view('estudiante.edit', compact('estudiante') );

   
   
 




    
}





////////////////////////////////////////////////////////
public function edit($id){   // recibe el id


    $estudiante=Estudiante::findOrFail($id);  // 

    return view('estudiante.edit', compact('estudiante') );


}
///////////////////////////////////

public function destroy($id){

    estudiante::destroy($id);//aqui elimina el id
    return redirect('estudiante'); //redirecciona a empleado
  
  
  }



















}
