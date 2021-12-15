<?php

namespace App\Http\Controllers;
use App\Models\Proveedor;

use Illuminate\Http\Request;

class ProveedorController extends Controller
{
    //
    public function index()
    {
       $datos['proveedor']=Proveedor::paginate(5);
        return view('proveedor.index',$datos );
        
    }
  /// creaar usuario
    public function create()
    {
        return view('proveedor.create');
    }
    public function store(Request $request)
    {

      // $datosProveedor = request()->all();
       $datosProveedor = request()->except('_token');


       Proveedor::insert($datosProveedor);

       return redirect('proveedor');
 



       // return response()->json($datosProveedor);

            
            $proveedor= Proveedor::All();
            return view('proveedor.index', compact('proveedor')); 
    }


    public function show($id)
    {
        $proveedor= Proveedor::find($id);
        return view('proveedor.show', compact('proveedor'));
    }


    public function update(Request $request, $id){   // recibe el id 

   
      $datosProveedor = request()->except(['_token','_method']);
      Proveedor::where('id','=',$id)->update($datosProveedor);          // busca la informacion con el id si encuentra hace la actualizacion 

      $proveedor=Proveedor::findOrFail($id);
      return view('proveedor.edit', compact('proveedor') );
     
   




      
  }


            
          
  public function edit($id){   // recibe el id


    $proveedor=Proveedor::findOrFail($id);  // 

    return view('proveedor.edit', compact('proveedor') );


}

public function destroy($id){

  proveedor::destroy($id);//aqui elimina el id
  return redirect('proveedor'); //redirecciona a empleado


}












}
