<?php

//eu sei bem bla bla bla
//Meu código vem aqui.
//Meu professor!!!!!!

// O tempo Ruge e a Sapucaí é Grande!!
//beeeeeeu site!!


$pg = isset($_GET['pg']);

if ($pg) {
    switch ($_GET['pg']) {

        case 'inicio':
            // Incluir a página inicio


            include_once 'paginas/includes/header.php';
            include_once 'paginas/inicio.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'contato':
            // Incluir a página contato

            include_once 'paginas/includes/header.php';
            include_once 'paginas/contato.php';
            include_once 'paginas/includes/footer.php';
            break;



        case 'produtos':
            // Incluir a página produtos

            include_once 'paginas/includes/header.php';
            include_once 'paginas/produtos.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'servicos':
            // Incluir a página servicos

            include_once 'paginas/includes/header.php';
            include_once 'paginas/servicos.php';
            include_once 'paginas/includes/footer.php';
            break;

        case 'sobre':
            // Incluir a página sobre

            include_once 'paginas/includes/header.php';
            include_once 'paginas/sobre.php';
            include_once 'paginas/includes/footer.php';
            break;

        default:
            // Página de Erro.
            echo 'Página não encontrada';
            break;
    }
} else {
    include_once 'paginas/includes/header.php';
    include_once 'paginas/inicio.php';
    include_once 'paginas/includes/footer.php';
}
?>