


<!-- de aqui para arriba  -->



mostrar la lista de roles 

   




<a href="{{ url('rol/create') }}"> Registrar nuevo rol </a>
<table class="table table-light ">

<thead class="thead-light">
   <tr>
    <th width="30%">id</th>
    <th width="30%">Nombre_categoria</th>
    <th width="30%">Estado </th>
    <th width="30%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($rol as $rol)
         <tr>

             <td>{{$rol->id}}</td>
             <td>{{$rol->nombre_cargo}}</td>
             <td>{{$rol->estado}}</td>
             <td>

                <a href="{{ url('/rol/'.$rol->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/rol/'.$rol->id ) }}" method="post">
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

