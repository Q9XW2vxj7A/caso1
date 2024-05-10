<?php
session_start();
$_SESSION['nombres'] = $_POST['txtNombres'];
$_SESSION['dni'] = $_POST['txtDNI'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 1</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta1.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">1.¿Cuál es tu modelo favorito de Samsung?
                    </th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg1" value="a) Samsung Galaxy S" />a) Samsung Galaxy S<br />
                        <input type="radio" name="preg1" value="b) Samsung Galaxy Note" />b) Samsung Galaxy Note<br />
                        <input type="radio" name="preg1" value="c) Samsung Galaxy Z Fold" />c) Samsung Galaxy Z Fold<br />
                        <input type="radio" name="preg1" value="d) Otros" />d) Otros.<br/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action='index.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action='pregunta2.php'" />
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