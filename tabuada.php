<?php
$tabuada = $_GET["tabuada"];

echo "<h1> Tabuada do número $tabuada </h1>";
for($i=1; $i<=10; $i++){
    $resultado_tab = $tabuada * $i;
    echo $tabuada. "x" .$i ."=" .$resultado_tab ."<br>";
}

echo "<h1> Tabuada completa</h1>";
for ($tabuada = 1; $tabuada <=10; $tabuada++){
    echo "<br>";
      for($i=1; $i<=10; $i++){
           $resultado_tab = $tabuada * $i;
           echo $tabuada. "x" .$i ."=" .$resultado_tab ."<br>";
   }
 }
 echo "<br>";
 echo '<button><a href = index.php> <img src="img/icons/return.png" alt="botao de retornar"></button>';