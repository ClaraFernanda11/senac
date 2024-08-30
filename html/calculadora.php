<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>

<body>
    <form name='form' id="form">
        <label for="valor1">valor1</label><br>
        <input type="number" placeholder="Digite o primeiro valor" id="valor1" name="valor1" /><br>
         
        <label for="valor2">valor2</label><br>
        <input type="number" placeholder="Digite o segundo valor" id="valor2" name="valor2" />
        <br>   
        
        <label for="operacao">Digite na operação matemática</label>
        <br>
        <input type="text" id="operacao" name="operacao" placeholder="Digite * ou /ou - ou +">
        <br>

        <label for="Resultado">Resultado</label>
        <br>
        <input type="text" id="resultado" name="resultado" placeholder="Aqui temos o resultado do calculo" disabled readonly />
        <br>
        <br>
        <button type="button" id="btncalcular"> Calcular </button>
        <button type="button" id="btncancelar"> Cancelar </button>
    </form>
    <script src="/js/index.js"></script>
</body>

</html>