<?php

$valor1 = floatval($_POST['valor1']);
$valor2 = floatval($_POST['valor2']);
$operacao = strval($_POST['operacao']);
$resultado = 0.00;
#Compara qual o tipo da operação matematica;
switch ($operacao){
    case '+':
        #Aqui teremos uma soma...
        $resultado = ($valor1 + $valor2);
        echo $resultado;
        break;
    case '-':
        #Aqui teremos uma subtração...
        $resultado = ($valor1 - $valor2);
        echo $resultado;
        break;
    case '*':
        $resultado = $valor1 * $valor2;
        echo $resultado;
        break;
    case '/':
        if ($valor2 != 0) {
            $resultado = $valor1 / $valor2;
        } 
        echo $resultado;
         break;
    default :
    $resultado = "Erro: Operação inválida";
    break;
}
$resposta = array(
    'resultado' => $resultado
);
