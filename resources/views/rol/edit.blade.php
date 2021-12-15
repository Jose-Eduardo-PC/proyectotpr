formulario de edicion de empleado
<form action="{{ url('/rol/'.$rol->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}



    @include('rol.form')
    
</form>
    
    
