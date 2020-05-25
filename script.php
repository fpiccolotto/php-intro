<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    echo 'O nome não pode ser vazio';
    return;
}

if(strlen($nome) < 3) 
{
    echo 'O nome deve conter no mínimo 3 caracteres';
    return;
}

if (strlen($nome) > 40)
{
    echo ' O nome não deve ultrapassar 40 caracteres';
    return;
}

if (!is_numeric($idade))
{
    echo 'Informe uma idade válida';
    return;
}

//var_dump($nome);
//var_dump($idade);

if($idade >= 6 && $idade <= 12)
{
    for($i = 0; $i <= count($categorias); $i++)
    {
        if($categorias[$i] == 'infantil')         
             echo "O nadador ", $nome, " compete na categoria infantil";
                   
    }
}
else if ($idade >= 13 && $idade <= 18)
{
    for($i = 0; $i <= count($categorias); $i++) 
    {
        if($categorias[$i] == 'adolescente')         
             echo "O nadador ", $nome, " compete na categoria adolescente"; 
    }
}
else
{
    
    echo "O nadador ", $nome, " compete na categoria adulto";
} 
