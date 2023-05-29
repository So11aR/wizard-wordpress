<?php get_header(); ?>

<?php

/* Template Name: shop */

?>

    <section>
        <div>

            <div class="xleb">
                <?php

                true_breadcrumbs();

                ?>
            </div>

            <h1>Магазин «Визардсофт»</h1>
            <div class="grid col2-2 m-b-10 city-list">
                <a href="<?php echo get_permalink(359); ?>" class="outline">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop/spb.jpg" class="img" />
                    <p>Санкт-Петербург</p>
                </a>
                <a href="/" class="outline">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop/msk.jpg" class="img" />
                    <p>Москва</p>
                </a>
                <a href="/" class="outline">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop/nn.jpg" class="img" />
                    <p>Нижний Новгород</p>
                </a>
                <a href="/" class="outline">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/shop/region.jpg" class="img" />
                    <p>Другие регионы</p>
                </a>
            </div>

        </div>
    </section>

<?php get_footer(); ?>