<?php

namespace App\Http\Controllers;
use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function index()
    {
       $datos['materia']=Materia::paginate(5);
        return view('materia.index',$datos );
        
    }
  /// creaar usuario
    public function create()
    {
        return view('materia.create');
    }
    public function store(Request $request)
    {

      // $datosProveedor = request()->all();
       $datosMateria = request()->except('_token');


       Materia::insert($datosMateria);

       return redirect('materia');
 



       // return response()->json($datosProveedor);

            
            $proveedor= Materia::All();
            return view('materia.index', compact('materia')); 
    }


    public function show($id)
    {
        $materia= Materia::find($id);
        return view('materia.show', compact('materia'));
    }


    public function update(Request $request, $id){   // recibe el id 

   
      $datosMateria = request()->except(['_token','_method']);
      Materia::where('id','=',$id)->update($datosMateria);          // busca la informacion con el id si encuentra hace la actualizacion 

      $materia=Materia::findOrFail($id);
      return view('materia.edit', compact('materia') );
     
   




      
  }


            
          
  public function edit($id){   // recibe el id


    $materia=Materia::findOrFail($id);  // 

    return view('materia.edit', compact('materia') );


}

public function destroy($id){

  materia::destroy($id);//aqui elimina el id
  return redirect('materia'); //redirecciona a empleado


}












}
