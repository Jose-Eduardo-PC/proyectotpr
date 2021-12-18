mostrar lista tema




<a href="{{ url('tema/create') }}"> Registrar nuevo tema </a>
<br>
<a href="http://127.0.0.1:8000/dashboard"> volver </a>
<table class="table table-light ">

<thead class="thead-light">
   <tr>
    <th width="20%">titulo_tema</th>
    <th width="20%">descripcion</th>
    <th width="20%">estado</th>
   
    <th width="20%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($tema as $tema)
         <tr>

             <td>{{$tema->titulo_tema}}</td>
             <td>{{$tema->descripcion}}</td>
             <td>{{$tema->estado}}</td>
            
             <td>

                <a href="{{ url('/tema/'.$tema->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/tema/'.$tema->id ) }}" method="post">
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