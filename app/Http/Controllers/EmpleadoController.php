<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function agregarEmpleado(Request $request)
    {
        $nombre = $request->input('nombre');
        $tipo = $request->input('tipo');
        $horasTrabajadas = $request->input('horas_trabajadas');

        // Llama al procedimiento almacenado
        DB::statement('CALL sp_agregar_empleado(?, ?, ?)', [$nombre, $tipo, $horasTrabajadas]);

        return redirect()->back()->with('success', 'Empleado agregado correctamente');
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
