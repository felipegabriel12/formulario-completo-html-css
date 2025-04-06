<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Resposta</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Dados Recebidos</h2>
    <ul class="list-group">
        <li class="list-group-item"><strong>Nome:</strong> <?= $_GET['nome'] ?></li>
        <li class="list-group-item"><strong>Email:</strong> <?= $_GET['email'] ?></li>
        <li class="list-group-item"><strong>Idade:</strong> <?= $_GET['idade'] ?></li>
        <li class="list-group-item"><strong>Data de Nascimento:</strong> <?= $_GET['dataNascimento'] ?></li>
        <li class="list-group-item"><strong>Matérias:</strong> <?= isset($_GET['materias']) ? implode(', ', $_GET['materias']) : 'Nenhuma' ?></li>
        <li class="list-group-item"><strong>Experiência:</strong> <?= $_GET['experiencia'] ?? 'Não informado' ?></li>
        <li class="list-group-item"><strong>Sistema Operacional:</strong> <?= $_GET['sistema'] ?></li>
    </ul>
</body>
</html>
