<?php
include "servicos/servicoMensagemSessao.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de inscrição</title>
</head>
<body>

<p>FORMULÁRIO PARA INSCRIÇÃO DE COMPETIDORES</p>

<form action="script.php" method="post">
    <?php
        $mensagemDeSucesso = obterMensagemSucesso();
        if(!empty($mensagemDeSucesso))
        {
            echo $mensagemDeSucesso;
        }

        $mensagemDeErro = obterMensagemErro();
        if(!empty($mensagemDeErro))
        {
            echo $mensagemDeErro;
        }
    ?>
    <p>Seu nome: <input type="text" name="nome" /></p>
    <p>Sua idade: <input type="text" name="idade" /></p>
    <p><input type="submit" value="Enviar dados do competidor" /></p>
</form>
    
</body>

</html>