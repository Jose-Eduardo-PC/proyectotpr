mostrar las lista de profesor :)




<a href="{{ url('profesor/create') }}"> Registrar nuevo Profesor </a>
<br>
<a href="http://127.0.0.1:8000/dashboard"> volver </a>

<table class="table table-light ">

<thead class="thead-light">
   <tr>
    <th width="10%">id</th>
    <th width="10%">Nombre</th>
    <th width="10%">apellido </th>
    <th width="10%">Genero </th>
    <th width="10%">celular</th>
    <th width="10%">Direccion</th>
    <th width="10%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($profesor as $profesor)
         <tr>

             <td>{{$profesor->id}}</td>
             <td>{{$profesor->nombre}}</td>
             <td>{{$profesor->apellido}}</td>
             <td>{{$profesor->genero}}</td>
             <td>{{$profesor->celular}}</td>
             <td>{{$profesor->direccion}}</td>
             <td>

                <a href="{{ url('/profesor/'.$profesor->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/profesor/'.$profesor->id ) }}" method="post">
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