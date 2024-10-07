<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    // Mostrar todos los usuarios
    public function index()
    {
        $usuarios = Usuario::all(); // Obtener todos los usuarios
        return view('usuarios.index', compact('usuarios')); // Retornar vista con usuarios
    }

    // Mostrar el formulario para crear un nuevo usuario
    public function create()
    {
        return view('usuarios.create'); // Retornar vista para crear usuario
    }

    // Almacenar un nuevo usuario en la base de datos
    public function store(Request $request)
    {
        $request->validate([
            'nombre_usuario' => 'required|unique:usuario|max:255',
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'correo_electronico' => 'required|email|unique:usuario|max:255',
        ]);

        Usuario::create($request->all()); // Crear nuevo usuario
        return redirect()->route('usuarios.index')->with('success', 'Usuario creado con éxito.');
    }

    // Mostrar un usuario específico
    public function show(Usuario $usuario)
    {
        return view('usuarios.show', compact('usuario')); // Retornar vista con el usuario
    }

    // Mostrar el formulario para editar un usuario
    public function edit(Usuario $usuario)
    {
        return view('usuarios.edit', compact('usuario')); // Retornar vista para editar usuario
    }

    // Actualizar un usuario en la base de datos
    public function update(Request $request, Usuario $usuario)
    {
        $request->validate([
            'nombre_usuario' => 'required|max:255|unique:usuario,nombre_usuario,' . $usuario->id,
            'nombres' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'correo_electronico' => 'required|email|max:255|unique:usuario,correo_electronico,' . $usuario->id,
        ]);

        $usuario->update($request->all()); // Actualizar usuario
        return redirect()->route('usuarios.index')->with('success', 'Usuario actualizado con éxito.');
    }

    // Eliminar un usuario de forma lógica
    public function destroy(Usuario $usuario)
    {
        $usuario->delete(); // Eliminar usuario
        return redirect()->route('usuarios.index')->with('success', 'Usuario eliminado con éxito.');
    }
}
