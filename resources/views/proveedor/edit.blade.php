formulario de edicion del proveedor
<form action="{{ url('/proveedor/'.$proveedor->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}



    @include('proveedor.form')
    
</form>
    


