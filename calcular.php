<?php

//Recuperar as informações enviadas pelo formulario
//method = GET
$numero1 = $_GET["num1"];
$numero2 = $_GET["num2"];
$operacao = $_GET["operacao"];

//Realizar o processamento das informações
if($operacao == "soma"){
    $resultado = $numero1 + $numero2;
    echo "<h1> $resultado </h1>";
    //Colocar um botão para voltar para a pagina principal
    echo '<button><a href = index.php> <img src="img/icons/return.png" alt="botao de retornar"></button>';
}
elseif($operacao == "subtrair"){
    $resultado = $numero1 - $numero2;
    echo "<h1> $resultado </h1>";
    echo '<button><a href = index.php> <img src="img/icons/return.png" alt="botao de retornar"></button>';
}
elseif($operacao == "multiplicar"){
    $resultado = $numero1 * $numero2;
    echo "<h1> $resultado </h1>";
    echo '<button><a href = index.php> <img src="img/icons/return.png" alt="botao de retornar"></button> <br> <br>';
}
elseif($operacao == "dividir"){
    $resultado = $numero1 / $numero2;
    echo "<h1> $resultado </h1>";
    echo "<button><a href = index.php>VOLTAR</button>";
}
