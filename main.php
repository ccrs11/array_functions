<?php
//Ejercicio 1
if (isset($_POST["ej1"])) {
    $ej1 = $_POST["ej1"];
    $hi = "El número seleccionado es => " . $ej1;

    $array_planetas = ["Mercurio" => 1, "Venus" => 2, "Tierra" => 3, "Marte" => 4, "Júpiter" => 5, "Saturno" => 6, "Urano" => 7, "Neptuno" => 8];
    $change = array_flip($array_planetas);
    $planeta = isset($change[$ej1]) ? $change[$ej1] : "nothing";
    $res = "El planeta correspondiente a ese número es: " . $planeta;
}
//ejercicio 2
else if (isset($_POST["ej2"])) {
    $ej2 = $_POST["ej2"];
    $hi2 = "El número seleccionado es => " . $ej2;
    $array_planetas = array_fill(0, $ej2, "Deshabitado");
    $res2 = json_encode($array_planetas);
}
//ejercio 3
else if (isset($_POST["ej3"])) {
    $ej3 = $_POST["ej3"];
    $array_planetas = ["Mercurio" => false, "Venus" => false, "Tierra" => true, "Marte" => false, "Júpiter" => false, "Saturno" => false, "Urano" => false, "Neptuno" => false];
    $filter = array_filter($array_planetas, fn ($p1) => $p1 == true);
    $res3 = " Los planetas habitables son: " . json_encode($filter);
} else if (isset($_POST["ej4"])) {
    $ej4 = $_POST["ej4"];
    $hi4 = "El planeta seleccionado es => " . $ej4;
    $array_planetas = ["Mercurio" => 0.38, "Venus" => 0.91, "Tierra" => 1, "Marte" => 0.38, "Jupiter" => 2.53, "Saturno" => 1.07, "Urano" => 0.92, "Neptuno" => 1.19];
    $planetasGravedad = array_map(fn ($array_planetas) => $array_planetas * 9.80665, $array_planetas);
    $gravedad = isset($planetasGravedad[$ej4]) ? $planetasGravedad[$ej4] : "nothing";
    $res4 = "la gravedad del planeta seleccionado es de : " . $gravedad .  " m/s^2";
} else if (isset($_POST["ej5"])) {
    $ej5 = $_POST["ej5"];
    $array_naves = ["Voyager 1" => 722, "Voyager 2" => 825, "Cassini" => 2514, "Hubble" => 11110];
    $sum = array_sum($array_naves);
    $res5 = "la suma de los arrays es de: " . $sum . " Ton";
} else if (isset($_POST["ej6"])) {
    $ej6 = strtolower($_POST["ej6"]);
    $array_planetas = ["mercurio", "venus", "tierra", "marte", "júpiter", "saturno", "urano", "neptuno"];
    $consulta = in_array($ej6, $array_planetas);
    $res6 = $consulta ? "El planeta $ej6 SI existe" : "El planeta $ej6 NO existe";
} else if (isset($_POST["ej7"])) {
    $ej7 = strtolower($_POST["ej7"]);
    $array_tipos = ["sobrevuelo", "orbiter", "atmosférica", "lander", "rover", "penetradora", "observatorio", "comunicaciones"];
    $consulta = in_array($ej7, $array_tipos);
    $res7 = $consulta ? "El tipo de nave $ej7 SI existe" : "El tipo de nave $ej7 NO existe";
} else if (isset($_POST["ej8"])) {
    $ej8 = $_POST["ej8"];
    $array_planetas = [1 => "mercurio", 2 => "venus", 3 => "tierra", 4 => "marte", 5 => "júpiter", 6 => "saturno", 7 => "urano", 8 => "neptuno"];
    $al = array_rand($array_planetas);
    $planeta = $array_planetas[$al];
    $res8 = "El indice es: " . $al . " y corresponde al planeta $planeta";
} else if (isset($_POST["ej9"])) {
    $ej9 = $_POST["ej9"];
    $especies = ["klingons", "wookiees", "vulcans", "wookiees", "daleks", "ewoks", "xenomorphs", "predators", "klingons", "daleks"];
    $unique = array_unique($especies);
    $encoded = json_encode($unique);
    $res9 = "Las especies únicas son:  $encoded";
} else if (isset($_POST["ej10"])) {
    $sistema1 = ["mercurio", "venus", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];
    $sistema2 = ["andromeda", "triangulum", "sombrero", "Whirlpool", "Centaurus", "venus", "tierra", "saturno", "urano"];
    $inter = array_intersect($sistema1, $sistema2);
    $encoded = json_encode($inter);
    $res10 = "Los planetas comunes son: $encoded";
} else if (isset($_POST["ej11"])) {
    $sistema1 = ["mercurio", "venus", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];
    $sistema2 = ["andromeda", "triangulum", "sombrero", "Whirlpool", "Centaurus", "venus", "tierra", "saturno", "urano"];
    $differ = array_diff($sistema1, $sistema2);
    $encoded = json_encode($differ);
    $res11 = "Los planetas comunes son: $encoded";
} else if (isset($_POST["ej12"])) {
    $ej12 = strtolower($_POST["ej12"]);
    $array_satelites = ["Europa","Ganimedes","Calisto","Amaltea","Himalia","Elara","Leda","Carme"];
    $push = array_push($array_satelites,$ej12);
    var_dump($push);
    $encoded = json_encode($array_satelites);
    $res12 = "los satelites de saturno ahora son: $encoded";
} else if (isset($_POST["ej13"])) {
    $sistema_solar = ["mercurio", "venus", "tierra", "marte", "jupiter", "saturno", "urano", "neptuno"];
    $reverse = array_reverse($sistema_solar);
    $encoded = json_encode($reverse);
    $res13 = "Los planetas revertidos: $encoded";
} 
?>