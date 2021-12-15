formularioa de crear proveedor 

<form action="{{ url('/proveedor') }}" method="post" enctype="multipart/form-data" >

  @csrf
  @include('proveedor.form')
    
      
</form>

