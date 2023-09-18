@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Lista de Empleados</h1>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarEmpleadoModal">
        Agregar Empleado
    </button>

    <!-- Tabla de empleados -->
    <table id="empleadosTable" class="table table-bordered">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Tipo</th>
                <th>Horas Trabajadas</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <!-- Aquí se cargarán los datos de los empleados -->
        </tbody>
    </table>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
        $('#empleados-table').DataTable({
            processing: true,
            serverSide: true,
            ajax: "{{ route('empleados.index') }}",
            columns: [
                { data: 'nombre', name: 'nombre' },
                { data: 'tipo', name: 'tipo' },
                { data: 'horas_trabajadas', name: 'horas_trabajadas' },
                { data: 'action', name: 'action', orderable: false, searchable: false },
            ]
        });
    });
</script>
@endsection