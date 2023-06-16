<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/difunto.css">
    <title>Resultado Búsqueda</title>
</head>
    <body>            
                <?php
                
                $serv ="localhost";
                $user ="root";
                $pass ="";
                $bbdd ="gravefinder";
                $nom = $_POST["nombre"];
                $ap1 = $_POST["apellidoUno"];
                $ap2 = $_POST["apellidoDos"];
                $fecha = $_POST["anioDef"];
                if (empty($fecha) ){
                    $sql="select * from difunto d left join zona z on d.zona=z.idzona where NombreCompleto like '$nom%$ap1%$ap2'";
                }
                else{
                    $sql="select * from difunto d left join zona z on d.zona=z.idzona where NombreCompleto like '$nom%$ap1%$ap2' AND year(fecha_def) = '$fecha'";
                }
                
                $conn = new mysqli($serv, $user, $pass, $bbdd);

                if ($conn-> connect_error){die("Error en la conexion: ".$conn->connect_error);}

                $res = $conn->query($sql);

                if ($res ->num_rows > 0){?>
                    <div class="container">
                        <table>
                            <thead>
                                <tr>
                                    <td>Nombre</td>
                                    <td>Nº Tumba</td>
                                    <td>Zona</td>
                                </tr>
                            </thead>
                            <tbody>
                                
                            
                                <?php
                                    for($i = 0; $i<$res->num_rows; $i++){
                                        $reg = $res->fetch_assoc();?>
                                        <tr>
                                            <td><button onclick="location.href = '../arbol/arbol.php'" class="busqueda" name="nom"><?php echo $reg['NombreCompleto'];?></button></td>
                                            <td class="contenido"><?php echo $reg['num_tumba'];?></td>
                                            <td class="contenido"><?php echo $reg['desc_zona'];?></td>
                                        </tr>
                            </tbody>

                            <?php
                                }?>  
                    </div>  
                            <?php
                }
                else{?>
                    <h1>Este difunto no existe.</h1><?php
                }?>
                    </table>
                </div>
        
    </body>
</html>