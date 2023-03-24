<?php get_header() ?>
<section id="hero" class="flex items-center">
    <div class="container">
        <h1 class="title-default ">Desenvolvimento <br> FullStack</h1>
        <p class="pagraph-default">Aqui você encontrara meus projetos Front-end, Back-End, <br> além de dicas, truques, hacks...</p>
        <a class="default-button " href="<?= __HOME_URL__ ?>/portfolio">Portfólio</a>
    </div>
</section>
<section id="sobre">
    <div class="container py-14">
        <div class="  grid grid-cols-2 gris-rows-1 gap-4 items-center">
            <div class="sobre">
                <h2 class="title-default">Vandoir <br>Gerhard</h2>
                <span class="subtitle-default">DESENVOLVEDOR WEB</span>
                <p class="pagraph-default">Olá meu nome é Vandoir Gerhard trabalho a <?= EXPERIENCIA ?> anos como desenvolvedor web. PHP Wordpress JS jQuery ReactJs NextJs são algumas de minhas skill. </p>
                <a class="default-button " href="<?= __HOME_URL__ ?>/sobre">Conheça-me Melhor</a>
            </div>
            <div class="foto">
                <img src="<?= __IMG_URL__ ?>/vando.jpg" alt="Foto Vandoir">
            </div>
        </div>
    </div>
</section>
<section id="projetos">
    <?php include(__COMPONENT_PATH__ . '/projetos-recentes.php') ?>
</section>
<section id="equipe" class="bg-[##F3F5F8]">
    <?php include(__COMPONENT_PATH__ . '/equipes.php') ?>
</section>
<?php get_footer() ?>