<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo</title>
</head>
<body>
    <h1>Calculadora de Sueldo</h1>
    <form action="{{ route('calculate.salary') }}" method="post">
        @csrf
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="rol">Rol:</label>
        <select name="rol" required>
            <option value="chofer">Chofer</option>
            <option value="cargador">Cargador</option>
            <option value="auxiliar">Auxiliar</option>
        </select><br>

        <label for="horas_trabajadas">Horas Trabajadas:</label>
        <input type="number" name="horas_trabajadas" required><br>

        <label for="entregas">Entregas:</label>
        <input type="number" name="entregas" required><br>

        <button type="submit">Calcular Sueldo</button>
    </form>
</body>
</html>