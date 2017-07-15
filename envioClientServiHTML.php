<html>
    <head>
        <title>codenorte</title> 
    </head>
    <body>
        <form action="index.php" method="POST" name="datos" name="datos">
            <table border="3" bgcolor="silver">
                <tr> <td> ingrese Nombre: <input type="text" name="nombre">  </td> </tr>
                <tr> <td> ingrese Edad: <input type="text" name="edad">  </td> </tr>
                <tr> <td> <input type=submit value="Suma">         </td> </tr>
            </table>
        </form>

        <?php
        if (isset($_REQUEST['nombre']) && isset($_REQUEST['edad'])) {
            $nombre = $_POST['nombre'];
            $edad = $_POST['edad'];
            echo $nombre . ',';
            echo $edad;
        } else {
            $nombre = '';
            $edad = '';
        }
        ?> 

    </body> 
</html>
