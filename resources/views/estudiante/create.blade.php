formularioa de crear estudiante
<form action="{{ url('/estudiante') }}" method="post" enctype="multipart/form-data" >

  @csrf
  @include('estudiante.form')
    
      
</form>

