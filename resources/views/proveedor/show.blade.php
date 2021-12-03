@extends('layouts.layout')

@section('title', 'proveedor')

@section('content')
    <h1>Bienvenido este es el usuario {{$proveedor->nombre}} </h1>
    <br>
    <a href="/proveedor" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection