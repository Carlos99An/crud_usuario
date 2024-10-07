@extends('layouts.app')

@section('content')
<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Detalles del Usuario</h1>

    <ul class="list-disc list-inside mb-4">
        <li><strong>Nombre de Usuario:</strong> <span class="text-gray-700">{{ $usuario->nombre_usuario }}</span></li>
        <li><strong>Nombres:</strong> <span class="text-gray-700">{{ $usuario->nombres }}</span></li>
        <li><strong>Apellidos:</strong> <span class="text-gray-700">{{ $usuario->apellidos }}</span></li>
        <li><strong>Correo Electrónico:</strong> <span class="text-gray-700">{{ $usuario->correo_electronico }}</span></li>
        <li><strong>Fecha de Creación:</strong> <span class="text-gray-700">{{ $usuario->created_at }}</span></li>
        <li><strong>Fecha de Modificación:</strong> <span class="text-gray-700">{{ $usuario->updated_at }}</span></li>
    </ul>

    <a href="{{ route('usuarios.index') }}" class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded">Regresar</a>
</div>
@endsection
