<?php
session_start();
$_SESSION['Pregunta2'] = $_POST['preg2'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Pregunta 3</title>
    <link href="estilo.css" rel="stylesheet">
</head>

<body>
    <header>
        <?php include 'encabezado.php'; ?>
    </header>
    <section>
        <form method="POST" action="pregunta3.php">
            <table border="1" width="700" cellspacing="10" cellpadding="0">
                <tr>
                    <th colspan="2">3. ¿Qué procesador prefieres en los smartphones Samsung? </th>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="radio" name="preg3" value="a) Exynos" />a) Exynos<br />
                        <input type="radio" name="preg3" value="b) Snapdragon" />b) Snapdragon<br />
                        <input type="radio" name="preg3" value="c) Kirin" />c) Kirin<br />
                        <input type="radio" name="preg3" value="d) Media Tek" />d) Media Tek<br/>
                        <input type="radio" name="preg3" value="e) Ninguno en particular" />e) Ninguno en particular<br/>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="< Anterior" onclick="this.form.action = 'pregunta2.php'" />
                        <input type="submit" value="Siguiente >" onclick="this.form.action = 'pregunta4.php'" />
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