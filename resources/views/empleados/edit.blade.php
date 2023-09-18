<!-- resources/views/empleados/edit.blade.php -->

<div class="modal fade" id="editEmpleadoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Empleado</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Formulario de edición del empleado -->
                <form action="{{ route('empleados.update', ['empleado' => $empleado->id]) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Campos del formulario para editar datos del empleado -->
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empleado->nombre }}" required>
                    </div>

                    <!-- Agrega otros campos aquí -->

                    <button type="submit" class="btn btn-primary">Guardar Cambios</button>
                </form>
            </div>
        </div>
    </div>
</div>