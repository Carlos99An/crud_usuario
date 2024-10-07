<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Usuario; // Asegúrate de importar el modelo Usuario

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Crea datos de prueba
        Usuario::create([
            'nombre_usuario' => 'usuario1',
            'nombres' => 'Juan',
            'apellidos' => 'Pérez',
            'correo_electronico' => 'juan.perez@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Usuario::create([
            'nombre_usuario' => 'usuario2',
            'nombres' => 'María',
            'apellidos' => 'González',
            'correo_electronico' => 'maria.gonzalez@example.com',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        // Agrega más usuarios según sea necesario
    }
}
