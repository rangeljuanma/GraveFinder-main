<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscador</title>
    <link rel="stylesheet" href="./css/busqueda.css">
</head>
<body>
    
    <form action="difunto.php" method="POST" id="frmSearch">
        <div class="container">
            <div class="field-column">
                <div>
                <label for="lblname">Nombre del Difunto</label>
                </div>
                <div>
                <input type="text" class="demo-input-box" name="nombre" placeholder="Introduce un nombre" autofocus>
                </div>
            </div>
            <div class="field-column">
                <div>
                <label for="lblname">Primer Apellido</label>
                </div>
                <div>
                <input type="text" class="demo-input-box" name="apellidoUno" placeholder="Introduce el primer apellido">
                </div>
            </div>
            <div class="field-column">
                <div>
                <label for="lblname">Segundo Apellido</label>
                </div>
                <div>
                <input type="text" class="demo-input-box" name="apellidoDos" placeholder="Introduce el segundo apellido">
                </div>
            </div>
            <div class="field-column">
                <div>
                <label for="lblname">Año de Defunción</label>
                </div>
                <div>
                <input type="text" class="demo-input-box" name="anioDef" placeholder="Introduce el año de fallecimiento">
                </div>
            </div>
            <div class="field-column">
                <input type="submit" class="btnBuscar" value="Buscar">
            </div>
        </div>
    </form>
</body>
</html>