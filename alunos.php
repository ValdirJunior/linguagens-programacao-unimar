<?php

include 'conexao.php';

$result = mysqli_query($connection, "SELECT * FROM aluno");

$alunos = $result->fetch_all(MYSQLI_ASSOC);

?>
<!DOCTYPE html>
<html lang="ptBR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto 1 - Completo</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
            border-collapse: collapse;
            padding:8px;
        }
    </style>
</head>
<body>
    <h1>Listagem de Alunos</h1>
    <a href="cadastro_aluno.php">Cadastrar Aluno</a>
    <table>
        <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Celular</th>
                <th>Data Nascimento</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) { ?>
                <tr>
                    <td><?php echo $aluno["id"]; ?></td>
                    <td><?php echo $aluno["nome"]; ?></td>
                    <td><?php echo $aluno["email"]; ?></td>
                    <td><?php echo $aluno["celular"]; ?></td>
                    <td><?php echo date("d/m/Y", strtotime($aluno["data_nascimento"])); ?></td>
                    <td>
                        <?php echo "<a href='edita_aluno.php?id={$aluno['id']}'>Editar</a>"; ?>
                        <?php echo "<a href='exclui_aluno.php?id={$aluno['id']}'>Excluir</a>"; ?>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>