@extends('layouts.layout')

@section('title', 'proveedor')

@section('content')

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="flex-shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-jet-application-mark class="block h-9 w-auto" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-jet-nav-link>
                    </x-jet-nav-link>

                    <x-jet-nav-link href="{{ route('proveedor.create') }}" :active="request()->routeIs('proveedor.')">
                        {{ __('Crear nuevo') }} <!-- crear ruta del proveedor -->
                    </x-jet-nav-link>
                    <x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('volver') }}
                    </x-jet-nav-link>

                   

                </div>
            </div>

        </nav>









    <h1><a class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">lista de proveedores</a></h1>
   <!-- crear ruta del proveedor <a href="/proveedor/create" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Crear nuevo usuario...</a>-->

    <div class=" max-w-md  max-width: 28rem/* 448px */ bg-gray-300 mx-auto">
        <div class="grid sm-grid-cols-1 md-grid-cols-2 lg-grid-cols-4 gap-4">
            @foreach($proveedor as $proveedor)
                <div class="max-w-md mx-auto bg-white rounded-xl shadow-md overflow-hidden md:max-w-2xl">
                    <div class="md:flex">
                    <div class="p-8">
                        <div class="uppercase tracking-wide text-sm text-indigo-500 font-semibold">{{$proveedor->nombre}}</div>
                            <p class="mt-2 text-gray-800">una descripcion de ejemplo para rellenar con un poco de codigo hardcore, aguante informatica </p>
                            <a href="/proveedor/{{$proveedor->id}}" class="block mt-1 text-lg leading-tight font-medium text-black hover:underline">Ver mas...</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection