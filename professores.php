<?php

$nome = "Valdir";
$curso = "ADS";
$universidade = "Unimar";
$idade = 24;

?>

<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1 - Completo</title>
</head>
<body>
    <h1>Listagem de Projetos</h1>
    <table>
        <thead>
            <tr>
                <th>Nome</th>
                <th>Curso</th>
                <th>Universidade</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $nome; ?></td>
                <td><?php echo $curso; ?></td>
                <td><?php echo $universidade; ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>