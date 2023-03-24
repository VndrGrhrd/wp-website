<?php
$argsEquipe = [
    'post_type' => 'post'
];
$theQueryEquipe = new WP_Query($argsEquipe);
?>
<div>
    <div class="container">
        <div class="equipe py-14">
            <h2 class="title-default">Em destaque</h2>
            <span class="subtitle-default block text-center mx-auto w-6/12">Estas são algumas das equipes em que tive o imenso prazer de fazer parte</span>
            <div>
                <div class="swiper equipeSwiper">
                    <div class="swiper-wrapper">
                        <?php if ($theQueryEquipe->have_posts()) :
                            while ($theQueryEquipe->have_posts()) :
                                $theQueryEquipe->the_post(); ?>
                                <div class="swiper-slide">
                                    <h3><?= the_title() ?></h3>
                                </div>
                        <?php endwhile;
                        endif  ?>
                    </div>
                    <div class="swiper-pagination"></div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>