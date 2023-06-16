<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/arbol.css">
    <title>Ubicación</title>
</head>
<body>
        <?php    
        $serv ="localhost";
        $user ="root";
        $pass ="";
        $bbdd ="gravefinder";
        $nom = $_POST["nombre"];
        $sql = "select * from difunto where NombreCompleto like '$nom'";

        $conn = new mysqli($serv, $user, $pass, $bbdd);

        if ($conn-> connect_error){die("Error en la conexion: ".$conn->connect_error);}

        $res = $conn->query($sql);

        if($res ->num_rows > 0){?>
        <table>
            <tbody>
                <?php
                    for($i = 0; $i<$res->num_rows; $i++){
                        $reg = $res->fetch_assoc();?>
                        <tr>
                            <td class="contenido"><?php echo $reg['nombre'];?></td>
                            <td class="contenido"><?php echo $reg['apellido1'];?></td>
                            <td class="contenido"><?php echo $reg['apellido2'];?></td>
                        </tr>
                <?php
                }?>
                
            </tbody>
        </table><?php
        }
    ?>
</body>
</html>