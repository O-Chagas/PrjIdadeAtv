<?php

$data1 = date_create('1991-05-01');
$data2 = date_create("now");
$intervalinho = $data1->diff($data2);
echo $intervalinho->format('%y');

// $nome = filter_input(INPUT_POST,"nome", FILTER_SANITIZE_SPECIAL_CHARS);
// $cargo = $_POST["cargo"];
// $dataNascimento = $_POST["data-nasc"];

// $data = new DateTime($dataNascimento );

// $resultado = $data->diff( new DateTime( date('Y-m-d') ) );

// echo $resultado->format( '%Y anos' );

// var_dump($data);
// var_dump($resultado);

// // CalcularData($dataNascimento);

// // function CalcularData($dataNascimento){

// // }

?>

<!-- <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">    
    <title>Idade</title>
</head>

<header>
    <button class="dark_mode">Modo Noturno</button>
</header>
<body>
    <main>
        <div class="formulario">
        <form action="./php/idade.php" method="post"></form>
        <input type="text" name="nome" placeholder="Digite seu nome..."> <br>
        <input type="text" name="cargo" placeholder="Digite seu cargo..."> <br>
        <input type="text" name="data-nascimento" placeholder="Digite sua data de nascimento..."> <br>

        <input type="submit" value="Enviar">
        </div>

        <div class="retornoFormulario">
            <input type="text" name="reotrno-formulario" id="retornoFormulario" value="<?php $resultado ?>">
        </div>

        <p class="faixaEtaria"></p>

        <div>
            <button class="btnLimpar" type="reset">Limpar Formulário</button>
        </div>

    </main>
    
</body>
</html> -->