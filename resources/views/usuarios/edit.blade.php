@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-6">Editar Usuario</h1>

    @if ($errors->any())
        <div class="bg-red-500 text-white p-4 rounded mb-4">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('usuarios.update', $usuario) }}" method="POST" class="bg-white p-6 rounded-lg shadow-md">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="nombre_usuario" class="block text-gray-700 font-bold mb-2">Nombre de Usuario</label>
            <input type="text" name="nombre_usuario" class="form-control border border-gray-300 rounded-md p-2 w-full" value="{{ $usuario->nombre_usuario }}" required>
        </div>
        <div class="mb-4">
            <label for="nombres" class="block text-gray-700 font-bold mb-2">Nombres</label>
            <input type="text" name="nombres" class="form-control border border-gray-300 rounded-md p-2 w-full" value="{{ $usuario->nombres }}" required>
        </div>
        <div class="mb-4">
            <label for="apellidos" class="block text-gray-700 font-bold mb-2">Apellidos</label>
            <input type="text" name="apellidos" class="form-control border border-gray-300 rounded-md p-2 w-full" value="{{ $usuario->apellidos }}" required>
        </div>
        <div class="mb-4">
            <label for="correo_electronico" class="block text-gray-700 font-bold mb-2">Correo Electrónico</label>
            <input type="email" name="correo_electronico" class="form-control border border-gray-300 rounded-md p-2 w-full" value="{{ $usuario->correo_electronico }}" required>
        </div>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Actualizar
        </button>
    </form>
</div>
@endsection
