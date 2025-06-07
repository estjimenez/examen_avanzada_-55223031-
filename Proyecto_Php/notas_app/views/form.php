
<!DOCTYPE html>
<html>
<head>
    <title>Registrar Nota</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Registrar Nota</h1>
    <form method="POST" action="index.php?action=registrar">
        <label>Estudiante:</label><br>
        <input type="text" name="estudiante" required><br><br>

        <label>Descripción:</label><br>
        <input type="text" name="descripcion" required><br><br>

        <label>Nota:</label><br>
        <input type="number" step="0.01" name="nota" required><br><br>

        <button type="submit">Guardar</button>
    </form>
    <br>
    <a href="index.php?action=listar">Ver todas las notas</a>
</body>
</html>