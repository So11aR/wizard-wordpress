<?php get_header(); ?>

<section>
    <div>
        <div class="xleb">
            <!-- <a href="../">Главная</a>
            <a href="our-contribution.htm">Наш вклад</a> -->
            <?php

            true_breadcrumbs();

            ?>
        </div>
        <h1><?php the_title(); ?></h1>
        <div class="grid news-list col1 m-b-20">
            <p class="m-b-20">
                <!-- <font>24.10.2022</font> -->
                <font><?php the_time('d.m.Y') ?></font>
            </p>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php else : ?>

            <?php endif; ?>
            <!-- <p class="m-b-20">Сообщаем Вам о выпуске Минстроем РФ дополнений к письмам от 08.11.2022 г. № 58497-ИФ/09, от 14.11.2022 г. № 60112-ИФ/09 о рекомендуемой величине индексов изменения сметной стоимости строительства на IV квартал 2022 года, в том числе величине индексов изменения сметной стоимости строительно-монтажных работ, пусконаладочных работ.</p>
            <p>На нашем сайте digest.wizardsoft.ru размещены письмо № 63135-ИФ/09 от 27.11.2022.</p> -->
        </div>
        <a href="news.htm"><span class="material-icons">arrow_back</span> Вернуться назад</a>
    </div>
</section>

<?php get_footer(); ?>