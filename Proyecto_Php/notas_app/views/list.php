<!DOCTYPE html>
<html>
<head>
    <title>Listado de Notas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Listado de Notas</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Estudiante</th>
            <th>Descripción</th>
            <th>Nota</th>
        </tr>
        <?php foreach ($notas as $n): ?>
            <tr>
                <td><?= $n['id'] ?></td>
                <td><?= htmlspecialchars($n['estudiante']) ?></td>
                <td><?= htmlspecialchars($n['descripcion']) ?></td>
                <td><?= $n['nota'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p><strong>Promedio general:</strong> <?= number_format($promedio, 2) ?></p>
    <br>
    <a href="index.php?action=registrar">Registrar nueva nota</a>
</body>
</html>