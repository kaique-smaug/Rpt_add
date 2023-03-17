<?php 
    require_once "validar_acesso.php";
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/api.css">
    <link rel="stylesheet" href="../css/chmado_feito.css">
    <title>Suporte</title>
</head>
<body>
<header>
        <nav id="nav-nav">
            <a href="" class="logo link">Kaique_dev</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list spacing-list">
                <li><a href="home.php" class="link">Home</a></li>
                <li><a href="suporte.php" class="link">Suporte</a></li>
                <li><a href="logoff.php" class="link">Sair</a></li>
            </ul>
        </nav>
    </header>


    <main>  
        <div id="chmado_feito_content">
            <h1>Chamado enviado com sucesso</h1>
            <p>Dentre 24 horas retornaremos seu chamado. Caso não receba nenhuma mensagme envie mensagem para nosso email kaiquebatramos@gmail.com</p>
        </div>
    </main>
    <script src="api.js"></script>
</body>
</html>