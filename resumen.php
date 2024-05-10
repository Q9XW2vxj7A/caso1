<?php
session_start();
$_SESSION['Pregunta5'] = $_POST['preg5'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Resumen</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
        <center>
            <h3>INFORME DE ENCUESTA</h3>
        </center>
    </header>
    <?php
    $nombres = $_SESSION['nombres'];
    $dni = $_SESSION['dni'];
    $pregunta1 = $_SESSION['Pregunta1'];
    $pregunta2 = $_SESSION['Pregunta2'];
    $pregunta3 = $_SESSION['Pregunta3'];
    $pregunta4 = $_SESSION['Pregunta4'];
    $pregunta5 = $_SESSION['Pregunta5'];
    ?>
    <section>
        <form method="POST" action="resumen.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <td>Nombre del ciudadano</td>
                    <td><?php echo $nombres; ?></td>
                </tr>
                <tr>
                    <td>DNI</td>
                    <td><?php echo $dni; ?></td>
                </tr>
                <tr>
                    <td>1. ¿Cuál es tu modelo favorito de Samsung?</td>
                    <td><?php echo $pregunta1; ?></td>
                </tr>
                <tr>
                    <td>2. ¿Qué característica de los smartphones Samsung te gusta más?</td>
                    <td><?php echo $pregunta2; ?></td>
                </tr>
                <tr>
                    <td>3. ¿Qué procesador prefieres en los smartphones Samsung?</td>
                    <td><?php echo $pregunta3; ?></td>
                </tr>
                <tr>
                    <td>4. Si Samsung lanzara un nuevo smartphone, ¿qué característica te gustaría que tuviera? <td><?php echo $pregunta4; ?></td>
                </tr>
                <tr>
                    <td>5. ¿Cómo calificarías el servicio al cliente de Samsung?</td>
                    <td><?php echo $pregunta5; ?></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta5.php'" />
                        <input type="submit" value="Volver a encuestar" onclick="this.form.action = 'index.php'" />
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