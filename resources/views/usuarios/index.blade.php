@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Lista de Usuarios</h1>
    <a href="{{ route('usuarios.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Crear Usuario</a>
    
    @if(session('success'))
        <div class="bg-green-500 text-white p-4 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <table class="min-w-full bg-white border border-gray-300 rounded-lg shadow-md">
        <thead>
            <tr class="bg-gray-200 text-gray-700">
                <th class="py-2 px-4 border-b">Nombre de Usuario</th>
                <th class="py-2 px-4 border-b">Nombres</th>
                <th class="py-2 px-4 border-b">Apellidos</th>
                <th class="py-2 px-4 border-b">Correo Electrónico</th>
                <th class="py-2 px-4 border-b">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($usuarios as $usuario)
                <tr class="hover:bg-gray-100">
                    <td class="py-2 px-4 border-b">{{ $usuario->nombre_usuario }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->nombres }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->apellidos }}</td>
                    <td class="py-2 px-4 border-b">{{ $usuario->correo_electronico }}</td>
                    <td class="py-2 px-4 border-b">
                        <a href="{{ route('usuarios.show', $usuario) }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-3 rounded">Mostrar</a>
                        <a href="{{ route('usuarios.edit', $usuario) }}" class="bg-yellow-500 hover:bg-yellow-700 text-white font-bold py-1 px-3 rounded">Editar</a>
                        <form action="{{ route('usuarios.destroy', $usuario) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-3 rounded">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
