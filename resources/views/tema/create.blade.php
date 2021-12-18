formularioa de crear estudiante
<form action="{{ url('/tema') }}" method="post" enctype="multipart/form-data" >

  @csrf
  @include('tema.form')
    
      
</form>