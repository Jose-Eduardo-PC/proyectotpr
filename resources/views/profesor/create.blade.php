formularioa de crear profesor 

<form action="{{ url('/profesor') }}" method="post" enctype="multipart/form-data" >

  @csrf
  @include('profesor.form')
    
      
</form>

