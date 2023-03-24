<?php
$argsProjeto = [
    'post_type' => 'post'
];
$theQueryProjetos = new WP_Query($argsProjeto);
?>
<div>
    <div class="container py-14">
        <div class="projetos">
            <h2 class="title-default">Projetos Recentes</h2>
            <span class="block text-center mx-auto w-6/12 subtitle-default">Alguns dos últimos projetos em que tive a oportunidade de colaborar</span>
        </div>
        <div>
            <div class="grid grid-cols-4 grid-rows-1 gap-4 py-4">
                <?php if ($theQueryProjetos->have_posts()) :
                    while ($theQueryProjetos->have_posts()) :
                        $theQueryProjetos->the_post(); ?>
                        <article class="border ">
                            <h3><?= the_title() ?></h3>
                        </article>
                <?php endwhile;
                endif  ?>
            </div>
            <a class="default-button pt-5" href="<?= __HOME_URL__ ?>/portfolio">Veja todos os projetos</a>
        </div>
    </div>
</div>