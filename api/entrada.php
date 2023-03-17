<?php 
   session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/api.css">
    
    <title>Login</title>
</head>

<body class="kaique123">
    <header>
        <nav id="nav-nav">
            <a href="" class="logo link">Kaique_dev</a>
            <div class="mobile-menu">
                <div class="line1"></div>
                <div class="line2"></div>
                <div class="line3"></div>
            </div>
            <ul class="nav-list spacing-list">
                <li><a href="/" class="link">Home</a></li>
                <li><a href="" class="link">Suporte</a></li>
                <li><a href="logoff.php" class="link">Sair</a></li>
            </ul>
        </nav>
    </header>


    <div id="container">


      
          
        





        <div id="content">
       
            <div id="sub-content">
                <form action="valida_login.php" method="POST">
                    <fieldset>Registre-se</fieldset>
                    <div class="mb-3">
                        <label for="email" class="form-label ">Insira seu E-mail</label>
                        <input type="email" method="POST"  name="email" id="email" aria-describedby="emailHelp" class="form-control widht-input" placeholder="Digite seu email" >
                        <div id="emailHelp" class="form-text">Nós nunca compartilharemos seu email com ninguém</div>
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" method="POST"  name="password" id="password" class="form-control widht-input" placeholder="Digite sua senha" pattern="{0-9a-fa},{4,8}"  inputmode="numeric" autocomplete="new-password" >
                        <div id="emailHelp2" class="form-text">Nós nunca compartilharemos sua senha com ninguém</div>
                    </div>
                    <div class="mb-3 form-check">
                        <label class="form-check-label" for="checkbox">Lembrar senha</label>
                        <input type="checkbox" class="form-check-input" id="checkbox">
                    </div>
                    <?php 
                              // A função isset verifica se um determinado índice de um determinado array
                              // está setado/inserido no formulário 
                                if (isset($_GET['login']) && $_GET['login'] == 'erro') {
                                ?>
                                <div class="text-danger">
                                    Usuário ou senhas inválido(s)
                                </div>
                                <?php }?>
                                <!-- -->
                                <?php
                                if (isset($_GET['login']) && $_GET['login'] == 'erro2') {
                                ?>
                                <div class="text-danger">
                                    Usuário ou senhas inválido(s)
                                </div>
                                <?php } ?>
                    <button type="submit" class="btn btn-primary" autofocus>Submit</button>
                </form>
            </div>
        </div>
    </div>
    <script src="api.js"></script>
    
   
</body>

</html>