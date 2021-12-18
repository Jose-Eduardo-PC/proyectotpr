formulario de edicion del profesor
<form action="{{ url('/profesor/'.$profesor->id ) }}" method="post" enctype="multipart/form-data">
    @csrf
    {{ method_field('PATCH') }}



    @include('profesor.form')
    
</form>
    


