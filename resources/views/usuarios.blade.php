@extends('layouts.app')

@section('titulo')

@endsection

@section('contenido')
<h1 class="text-4xl text-center font-bold mb-4 text-black">Lista de usuarios</h1>

<table class="w-full border border-collapse">
    <thead>
        <tr class="bg-gray-400">
            <th class="border p-2">ID</th>
            <th class="border p-2">Nombre</th>
            <th class="border p-2">Cédula</th>
            <th class="border p-2">Teléfono</th>
            <th class="border p-2">Dirección</th>
            <th class="border p-2">Acción</th>
        </tr>
    </thead>

    <tbody>
        @foreach ($usuarios as $usuario)
            <tr>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $usuario->id }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $usuario->nombreC }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $usuario->cedulaC }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $usuario->numTelefono }}</td>
                <td class="hover:bg-gray-200 cursor-pointer border p-2 text-center">{{ $usuario->Direccion }}</td>
                <td class="cursor-pointer border p-2 text-center">
                    <button onclick="eliminarUsuario({{ $usuario->id }})" class="bg-red-500 hover:bg-red-800 text-white py-2 px-1 ">
                        Eliminar
                    </button>
                    <button onclick="modificarUsuario({{ $usuario->id }})" class="bg-blue-600 hover:bg-blue-900 text-white py-2 px-1 ">
                        Modificar
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
<div><br></div>
<div class="flex justify-center">
<button onclick="window.location='{{ route('usuarios.pdf') }}'" class="bg-green-700 hover:bg-green-600 p-3 text-white rounded-lg uppercase font-bold">
    PDF General
</button>
</div>
<div><br></div>
    <a href="{{ route('registrar') }}" class="bg-sky-700  hover:bg-sky-900 text-white font-bold py-2 px-4 rounded">
        Volver
    </a>

</div>



@endsection
