

<form action="{{ url('/rol') }}" method="post" enctype="multipart/form-data"> 
@csrf
@include('rol.form')





</form>