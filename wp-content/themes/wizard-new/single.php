<?php get_header(); ?>
    <header class="header_text">
        <div class="container">
            <h1 class="header_title"><?php the_title(); ?></h1>
            <div>
                <?php if (have_posts()): while (have_posts()) : the_post(); ?>

                    <?php echo the_content(); ?>

                <?php endwhile; ?>

                <?php else: ?>

                <?php endif; ?>
            </div>
        </div>
    </header>

<?php get_footer(); ?>