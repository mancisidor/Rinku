<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado; // importamos el modelo del empleado

class EmpleadoController extends Controller
{
    public function index()
    {
        $empleados = Empleado::all(); // Obtener todos los empleados
        return view('empleados.index', compact('empleados'));
    }

    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        // Validar los datos del formulario aquí

        Empleado::create($request->all()); // Crear un nuevo empleado

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado creado exitosamente.');
    }

    public function edit($id)
    {
        $empleado = Empleado::findOrFail($id); // Buscar el empleado por ID
        return view('empleados.edit', compact('empleado'));
    }

    public function update(Request $request, $id)
    {
        // Validar los datos del formulario aquí

        $empleado = Empleado::findOrFail($id); // Buscar el empleado por ID
        $empleado->update($request->all()); // Actualizar los datos del empleado

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $empleado = Empleado::findOrFail($id); // Buscar el empleado por ID
        $empleado->delete(); // Eliminar el empleado

        return redirect()->route('empleados.index')
            ->with('success', 'Empleado eliminado exitosamente.');
    }
}
