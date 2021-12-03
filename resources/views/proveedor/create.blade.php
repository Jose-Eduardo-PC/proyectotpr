@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')
	<h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Bienvenido a crear usuarios</a></h1>
	<br>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
			</ul>
		</div>
	@endif

	<form class="form-control" method="POST" action="/proveedor" enctype="multipart/form-data">
			@csrf
		<div class="form-group">
			<label for="">Nombre</label>
			<input type="text" name="nombre" class="form-control">
		</div>
        <div class="form-group">
			<label for="">apellido</label>
			<input type="text" name="apellido" class="form-control">
		</div>
        <div class="form-group">
			<label for=""> email</label>
			<input type="text" name="email" class="form-control">
		</div>
		<div class="form-group">
			<label for=""> Celular</label>
			<input type="number" name="celular" class="form-control">
		</div>
		
		<div class="form-group">
			<label for="">Direccion</label>
			<input type="text" name="direccion" class="form-control">
		</div>
		
		<div class="form-group">
			<label for=""> Estado</label>
			<input type="text" name="estado" class="form-control">
		</div>







         <!----<div class="form-group">
			<label for=""> Password</label>
			<input type="password" name="password" class="form-control">
		</div>-->

        <!----<<div class="form-group">
			<label for=""> Correo Electronico</label>
			<input type="text" name="email" class="form-control">
		</div>--->
		<!-------<div class="form-group">   para poner foto 
			<label for=""> Foto</label>
			<input type="file" accept = "jpg, png, gif, jpeg" name="avatar">
		</div>--->
		<button type="submit" class="btn btn-primary">Guardar Usuario</button>
		
	</form>	
@endsection