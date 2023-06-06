<?php 
include "./main.php" ;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actividad cómo utilizar las funciones de listas (arrays)</title>
</head>

<html>

<head>
    <title>Talleres de arrays</title>
</head>

<body>
    <h2>Ejercicio 1</h2>
    <p> Identificar planetas y sus respectivos números de orden en el sistema solar. Ingresar un número del 1 al 8 </p>
    <form method="POST" action="">
        <label for="ej1">Ingresar el número del planeta que desea observar</label>
        <select name="ej1" onchange="this.form.submit()">
            <option name="select" id="select" selected>select</option>
            <option name="1" id="1">1</option>
            <option name="2" id="2">2</option>
            <option name="3" id="3">3</option>
            <option name="4" id="4">4</option>
            <option name="5" id="5">5</option>
            <option name="6" id="6">6</option>
            <option name="7" id="7">7</option>
            <option name="8" id="8">8</option>
        </select>
    </form>
    <p> <?= $hi ?> </p>
    <h4> <?= $res ?></h4>

    <h2>Ejercicio 2</h2>
    <p> Crear un array para un sistema solar </p>
    <form method="POST" action="">
        <label for="ej2">Ingresar el número de planetas del sistema solar</label>
        <input type="number" name="ej2">
    </form>
    <p> <?= $hi2 ?> </p>
    <h4> <?= $res2 ?></h4>

    <h2>Ejercicio 3</h2>
    <p> Filtrar planetas habitables </p>
    <form method="POST" action="">
        <label for="ej3">tocar el botón para conocer los planetas habitables</label>
        <button name="ej3">planetas ((0))</button>
    </form>
    <h4> <?= $res3 ?></h4>

    <h2>Ejercicio 4</h2>
    <p>Calcular la gravedad en diferentes planetas</p>
    <form method="POST" action="">
        <label for="ej4">Selecciona el planeta para calcular la gravedad real</label>
        <select name="ej4" onchange="this.form.submit()">
            <option name="select" id="select" selected>select</option>
            <option name="Mercurio" id="Mercurio">Mercurio</option>
            <option name="Venus" id="Venus">Venus</option>
            <option name="Tierra" id="Tierra">Tierra</option>
            <option name="Marte" id="Marte">Marte</option>
            <option name="Jupiter" id="Jupiter">Jupiter</option>
            <option name="Saturno" id="Saturno">Saturno</option>
            <option name="Urano" id="Urano">Urano</option>
            <option name="Neptuno" id="Neptuno">Neptuno</option>
        </select>
    </form>
    <p> <?= $hi4 ?> </p>
    <h4> <?= $res4 ?></h4>

    <h2>Ejercicio 5</h2>
    <p> Calcular la masa total de una flota de naves espaciales </p>
    <form method="POST" action="">
        <label for="ej5">tocar el botón para calcular la masa de las naves</label>
        <button name="ej5">Naves Sum</button>
    </form>
    <h4> <?= $res5 ?></h4>

    <h2>Ejercicio 6</h2>
    <p> Consultar planeta </p>
    <form method="POST" action="">
        <label for="ej6">Nombre del planeta</label>
        <br>
        <input type="text" name="ej6">Coloca el nombre del planeta que deseas consultar y presiona enter</input>
    </form>
    <h4> <?= $res6 ?></h4>

    <h2>Ejercicio 7</h2>
    <p> Verificar si un tipo de nave espacial está en tu flota </p>
    <form method="POST" action="">
        <label for="ej7">Ingrese el tipo de nave</label>
        <br>
        <input type="text" name="ej7"></input>
    </form>
    <h4> <?= $res7 ?></h4>

    <h2>Ejercicio 8</h2>
    <p> Seleccionar un planeta aleatorio para explorar </p>
    <form method="POST" action="">
        <label for="ej8">tocar el botón para seleccionar un planeta aleatorio</label>
        <button name="ej8">Indice aleatorio</button>
    </form>
    <h4> <?= $res8 ?></h4>

    <h2>Ejercicio 9</h2>
    <p> Eliminar elementos duplicados de una lista de especies alienígenas </p>
    <form method="POST" action="">
        <label for="ej9">tocar el botón para seleccionar un planeta aleatorio</label>
        <button name="ej9">Eliminar duplicados</button>`
    </form>
    <h4> <?= $res9 ?></h4>

    <h2>Ejercicio 10</h2>
    <p> Encontrar planetas comunes en dos sistemas solares </p>
    <form method="POST" action="">
        <label for="ej10">tocar el botón para encontrar planetas comunes en dos sistemas solares</label>
        <button name="ej10">Planetas comunes</button>
    </form>
    <h4> <?= $res10 ?> </h4>

    <h2>Ejercicio 11</h2>
    <p> Encontrar planetas únicos en dos sistemas solares </p>
    <form method="POST" action="">
        <label for="ej11">tocar el botón para encontrar planetas únicos en dos sistemas solares</label>
        <button name="ej11">Planetas únicos</button>
    </form>
    <h4> <?= $res11 ?> </h4>

    <h2>Ejercicio 12</h2>
    <p> Crear una lista de satélites para un planeta </p>
    <form method="POST" action="">
        <label for="ej12">Insertar Satelite de jupiter</label>
        <br>
        <input type="text" name="ej12">Coloca el nombre del satelite de jupiter que deseas añadir</input>
    </form>
    <h4> <?= $res12 ?></h4>

    <h2>Ejercicio 13</h2>
    <p> Revertir el orden de los planetas en un sistema solar </p>
    <form method="POST" action="">
        <label for="ej13">tocar el botón para revertir el orden de los planetas en un sistema solar</label>
        <button name="ej13">revert</button>
    </form>
    <h4> <?= $res13 ?> </h4>

</body>

</html>