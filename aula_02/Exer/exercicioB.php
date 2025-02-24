<?php
    
    define("Pi", 3.141592);
    $raio = 10;
    $area = 4*Pi*($raio*$raio);
    $volume = 4/3*Pi*($raio*$raio*$raio);

    echo "<h1> Raio = ". $raio ."</h1>";
    echo "<h1> π = ". Pi ."</h1>";
    echo "<h1>Área = $area</h1>";
    echo "<h1>Volume = $volume</h1>";

?>