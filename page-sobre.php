<?php get_header() ?>
<section id="sobre_page">
    <div class="container">
        <h1 class="title-default">Sobre</h1>
        <div class="relative grid grid-cols-3 grid-row-1 gap-4">
            <div class="foto col-span-1">
                <img src="<?= __IMG_URL__ ?>/vando.jpg" alt="Foto Vandoir">
            </div>
            <div class="col-span-2">
                <h3 class="title-default">Perfil</h3>
                <p class="pagraph-default">Desenvolvedor Web Full-Stack no <?= EXPERIENCIA ?> ano de experiência, atuei em vários projetos, utilizando
                    tecnologias como PHP, Wordpress, jQuery, React, NextJs, JavaScript, CSS, Tailwind CSS, Bootstrap.</p>
                <p class="pagraph-default">Cursei 4 períodos de Publicidade e Propaganda, onde obtive skills sobre marketing,
                    melhorando bastante a percepção de experiência do usuário.</p>
                <p class="pagraph-default">Cursei 2 períodos de Análise e Desenvolvimento de Sistemas, onde me apaixonei pela
                    Arquitetura e Engenharia de Software no qual estou cursando hoje.</p>
                <p class="pagraph-default">Dentre as minhas competências, ressalto a responsabilidade, comprometimento e facilidade de
                    me relacionar, trabalhar em equipe, com foco nos resultados, no bem-estar da empresa.</p>
                <div class="formacao">
                    <h3 class="title-default">Formação acadêmcia</h3>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                </div>
                <div class="experiencia">
                    <h3 class="title-default">EXPERIÊNCIA PROFISSIONAL</h3>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                </div>
                <div class="cursos">
                    <h3 class="title-default">CURSOS</h3>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                    <article>
                        <h4 class="font-semibold">UNIASSELVI - Associação Educacional Leonardo da Vinci - 2023</h4>
                        <p>- Bacharelado em Engenharia de Software</p>
                    </article>
                </div>
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