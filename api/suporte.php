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
    <link rel="stylesheet" href="../css/suporte.css">
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
        <p class="centralizadinho">Chamdo para suporte</p>
        <form action="registra_chamado.php" method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Object</label>
                <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Notbook" name="title">
            </div>
            <div>
            <select class="form-select" aria-label="Default select example" name="category">
                <option selected>---Select Problem---</option>
                <option value="1">Hardware</option>
                <option value="2">Software</option>
                <option value="3">Outros</option>
            </select>
            </div>
            <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="txtarea"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-lg" id="open">Open</button>
            <a class="btn btn-primary btn-lg" href="home.php">Back</a>
        </form>
    </main>
    <script src="api.js"></script>
</body>
</html>