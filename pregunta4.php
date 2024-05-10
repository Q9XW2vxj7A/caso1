<?php
session_start();
$_SESSION['Pregunta3'] = $_POST['preg3'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 4</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta4.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">4. Si Samsung lanzara un nuevo smartphone, ¿qué característica te gustaría que tuviera?</th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg4" value="a) Mejor resistencia al agua y al polvo" /> a) Mejor resistencia al agua y al polvo<br />
                        <input type="radio" name="preg4" value="b) Mayor capacidad de almacenamiento" />b) Mayor capacidad de almacenamiento<br />
                        <input type="radio" name="preg4" value="c) Mejor rendimiento de la batería (como Netflix, F1TV, etc.)" />c) Mejor rendimiento de la batería<br />
                        <input type="radio" name="preg4" value="d) Cámara con mayor resolución" />d) Cámara con mayor resolución<br/>
                        <input type="radio" name="preg4" value="e) Mayor seguridad" />e) Mayor seguridad
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta3.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action = 'pregunta5.php'" />
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php include 'pie.php'; ?>
    </footer>
</body>

</html>