@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Registrar usuarios</h1>

<div class="flex justify-center items-center">
    
    <div class="md:w-1/3 bg-white p-9 rounded-lg shadow-xl">
       
<form action="{{route('registrar')}}" method="POST">
    @csrf
    <div class="mb-5">
        <label for="nombreC" class="mb-2 block uppercase text-gray-700 font-bold">Nombre</label>
        <input id="nombreC" name="nombreC" placeholder="Ingrese su Nombre" type="text" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('nombreC')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="cedulaC" class="mb-2 block uppercase text-gray-700 font-bold">Cedula</label>
        <input id="cedulaC" name="cedulaC" placeholder="Ingrese su Cedula" type="number" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('cedulaC')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="numTelefono" class="mb-2 block uppercase text-gray-700 font-bold">Telefono</label>
        <input id="numTelefono" name="numTelefono" placeholder="Ingrese su numero telefonico" type="number" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('numTelefono')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    <div class="mb-5">
        <label for="Direccion" class="mb-2 block uppercase text-gray-700 font-bold">Dirección</label>
        <input id="Direccion" name="Direccion" placeholder="Ingrese su Dirección" type="text" class=" border p-3 w-full rounded-lg bg-gray-100">
        @error('Direccion')
        <p class="text-white text-center my-2 p-2 bg-red-400 ronded-lg text-sm" >{{$message}}</p>
        @enderror
    </div>
    

    <input type="submit" value="Registrar" class="bg-sky-700  hover:bg-sky-900 w-full p-3 text-white rounded-lg uppercase" >

    <a href="{{ route('usuarios') }}" class="bg-sky-700  hover:bg-sky-900 text-white font-bold py-2 px-4 rounded mt-4 inline-block">
        Lista Usuarios
    </a>
    
</form>
</div>
</div>

@endsection
