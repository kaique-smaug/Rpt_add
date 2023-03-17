<?php
// Iniciando a sessão
    session_start();
// Veriável que verifica se a autenticação foi feita 
$autenticandoUsuario = false;
// Usuários do sistema porwue ainda não sei banco de dados
$usuarios_login = array(array('email' => 'kaiquebatramos@gmail.com', 'senha' => 'Av@nco123'),
array('email' => 'kaiqueramos826@gmail.com', 'senha' => '123456')
);

// echo "<pre>";
// print_r($usuarios_login);

foreach($usuarios_login as $usuarios_login){
    if ($usuarios_login['email'] == $_POST['email'] && $usuarios_login['senha'] == $_POST['password']) {
        $autenticandoUsuario = true;
    }
};

if ($autenticandoUsuario) {
    echo 'Usuário autenticado';
    $_SESSION['autenticado'] = 'SIM';
    $_SESSION['x'] = 'uma valor';
    $_SESSION['y'] = 'outro valor';
    header('Location: home.php ');
} else {
    header('Location: entrada.php?login=erro');
    $_SESSION['autenticado'] = 'NAO';
};

?>