<?php

namespace App\Http\Controllers;
use App\Models\Tema;
use Illuminate\Http\Request;

class TemaController extends Controller
{
    public function index()
    {
       $datos['tema']=Tema::paginate(3);
        return view('tema.index',$datos );
        
    }
    public function create(){
    return view('tema.create');
    }

    public function store(Request $request)
    {
       $datosTema = request()->except('_token');


       Tema::insert($datosTema);

       return redirect('tema');
 

            $tema= Tema::All();
            return view('tema.index', compact('tema')); 
    }

    public function show($id)
    {
        $tema= Tema::find($id);
        return view('tema.show', compact('tema'));
    }

    public function update(Request $request, $id){   // recibe el id 

   
        $datosTema = request()->except(['_token','_method']);
        Tema::where('id','=',$id)->update($datosTema);          // busca la informacion con el id si encuentra hace la actualizacion 
    
        $tema=Tema::findOrFail($id);
       return view('tema.edit', compact('tema') );
 
    }

    public function edit($id){   // recibe el id


        $tema=Tema::findOrFail($id);  // 
    
        return view('tema.edit', compact('tema') );
    
    
    }

    public function destroy($id){

        tema::destroy($id);//aqui elimina el id
        return redirect('tema'); //redirecciona a empleado
      
      
      }

}
