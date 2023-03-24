<?php
define('__HOME_URL__', home_url());
define('__IMG_URL__', get_template_directory_uri() . '/source/img');
define('__COMPONENT_PATH__', get_template_directory() . '/components');
$inicio = 2020;
$anoAtual = date('Y');
define('EXPERIENCIA', (int) $anoAtual - (int) $inicio);
?>

<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title() ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Code:wght@300;400;500;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>

<body <?php echo body_class() ?>>
    <header class="container py-5">
        <div class=" grid grid-cols-2 grid-rows-1 gap-4">
            <div class="logo">
                <a href="<?php echo home_url() ?>">
                    <img width="230" height="50" src="<?= __IMG_URL__ ?>/logo.png" alt="logo vando dev">
                </a>
            </div>
            <div id="menu">
                <div class="h-full">
                    <ul class="menu h-full flex flex-col md:flex-row justify-between items-center">
                        <li><a class=" block text-center" href="<?= __HOME_URL__ ?>">Inicio</a></li>
                        <li><a class=" block text-center" href="<?= __HOME_URL__ ?>/portfolio">Portfólio</a></li>
                        <li><a class=" block text-center" href="<?= __HOME_URL__ ?>/hacks">Hacks</a></li>
                        <li><a class=" block text-center" href="<?= __HOME_URL__ ?>/sobre">Sobre</a></li>
                        <li><a class=" block text-center" href="#contato">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
    <main>