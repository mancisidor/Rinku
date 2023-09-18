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

<!-- Modal para crear un nuevo empleado -->
<div class="modal fade" id="crearEmpleadoModal" tabindex="-1" role="dialog" aria-labelledby="crearEmpleadoModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="crearEmpleadoModalLabel">Crear Nuevo Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario para crear un nuevo empleado -->
                <h2>Agregar Empleado</h2>
                <form action="{{ route('agregar.empleado') }}" method="POST">
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
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </form>
            </div>
        </div>
    </div>
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