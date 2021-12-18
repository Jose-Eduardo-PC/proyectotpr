


<!-- de aqui para arriba  -->



mostrar la lista de materia 

   




<a href="{{ url('materia/create') }}"> Registrar nuevo materia </a>

<br>
<a href="http://127.0.0.1:8000/dashboard"> volver </a>
<table class="table table-light ">


<thead class="thead-light">
   <tr>
    <th width="10%">id</th>
    <th width="10%">Nombre</th>
    <th width="10%">curso</th>
    <th width="10%">grado </th>
    <th width="10%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($materia as $materia)
         <tr>

             <td>{{$materia->id}}</td>
             <td>{{$materia->nombre}}</td>
             <td>{{$materia->curso}}</td>
             <td>{{$materia->grado}}</td>
             <td>

                <a href="{{ url('/materia/'.$materia->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/materia/'.$materia->id ) }}" method="post">
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

