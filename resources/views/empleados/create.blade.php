@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Agregar Empleado</h2>
    <form action="{{ route('empleados.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
        </div>
        <div class="form-group">
            <label for="tipo">Tipo:</label>
            <select class="form-control" id="tipo" name="tipo" required>
                <option value="chofer">Chofer</option>
                <option value="cargador">Cargador</option>
                <option value="auxiliar">Auxiliar</option>
            </select>
        </div>
        <div class="form-group">
            <label for="horas_trabajadas">Horas Trabajadas:</label>
            <input type="number" class="form-control" id="horas_trabajadas" name="horas_trabajadas" required>
        </div>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection