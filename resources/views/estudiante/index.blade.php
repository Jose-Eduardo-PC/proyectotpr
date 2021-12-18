mostrar lista estudiante




<a href="{{ url('estudiante/create') }}"> Registrar nuevo estudiante </a>
<br>
<a href="http://127.0.0.1:8000/dashboard"> volver </a>
<table class="table table-light ">

<thead class="thead-light">
   <tr>
    <th width="20%">id</th>
    <th width="20%">Nombre</th>
    <th width="20%">apellido </th>
    <th width="20%">genero </th>
    <th width="20%">celular</th>
    <th width="20%">Direccion</th>
   
    <th width="20%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($estudiante as $estudiante)
         <tr>

             <td>{{$estudiante->id}}</td>
             <td>{{$estudiante->nombre}}</td>
             <td>{{$estudiante->apellido}}</td>
             <td>{{$estudiante->genero}}</td>
             <td>{{$estudiante->celular}}</td>
             <td>{{$estudiante->direccion}}</td>
            
             <td>

                <a href="{{ url('/estudiante/'.$estudiante->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/estudiante/'.$estudiante->id ) }}" method="post">
                @csrf

                {{  method_field('DELETE') }}

                    <input type="submit" onclick=" return confirm('quieres borrar')" 
                    value="Borrar">


                </form>
             </td>

         </tr>
         @endforeach

     </tbody>

</table>