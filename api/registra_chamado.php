<?php 
    echo '<pre>';
    print_r($_POST);
    echo '<pre>';

    // Abrindo aquivo para escrita
    $arquivo = fopen('arquivo.txt', 'a');
    // Formatando os espacoes fo texto
    $textarea = implode('-', $_POST);
    $texto =  $textarea . PHP_EOL;
    // Escrevendo a descrição no arquivo.txt
    fwrite($arquivo, $texto);
    // Após escrever dentro do arquivo deve fechar o arquivo
    fclose($arquivo);
    // Encaminhando para outra página após o chamado ser feito
    header('Location: chamado_feito.php')
?>