@extends('layouts.layout')

@section('title', 'Usuarios')

@section('content')
    <h1>Bienvenido este es el usuario {{$Usuario->name}} </h1>
    <br>
    <a href="/Usuario" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Volver a usuarios...</a>
@endsection