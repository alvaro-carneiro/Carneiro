<?php
// session_start inicia a sessão
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Bem vindo ao Painel, <?php echo $_SESSION['nome']; ?>

    <p>
        <a href="logout.php">Sair</a>
    </p>
</body>
</html>
