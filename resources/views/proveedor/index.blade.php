mostrar las lista de empleados :)




<a href="{{ url('proveedor/create') }}"> Registrar nuevo Proveedor </a>
<table class="table table-light ">

<thead class="thead-light">
   <tr>
    <th width="20%">id</th>
    <th width="20%">Nombre</th>
    <th width="20%">apellido </th>
    <th width="20%">email </th>
    <th width="20%">celular</th>
    <th width="20%">Direccion</th>
    <th width="20%">Estado </th>
    <th width="20%">Acciones </th>
   </tr>
</thead>






     <tbody>
         @foreach ($proveedor as $proveedor)
         <tr>

             <td>{{$proveedor->id}}</td>
             <td>{{$proveedor->nombre}}</td>
             <td>{{$proveedor->apellido}}</td>
             <td>{{$proveedor->email}}</td>
             <td>{{$proveedor->Direccion}}</td>
             <td>{{$proveedor->estado}}</td>
            
             <td>

                <a href="{{ url('/proveedor/'.$proveedor->id.'/edit') }}">
                 Editar
                </a> 

                <form action="{{ url('/proveedor/'.$proveedor->id ) }}" method="post">
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