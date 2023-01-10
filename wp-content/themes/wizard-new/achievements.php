<?php get_header(); ?>

<?php

/* Template Name: achievements */

?>

<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
      <a href="about.htm">О компании</a>
    </div> -->
    <h1><?php the_title(); ?></h1>
    <div class="grid col4-2 certificate-list">
      <?php

      // параметры по умолчанию
      $my_posts = get_posts(array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'ASC',
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  => '',
        'post_type'   => 'achievements',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>
        <div>
          <span class="material-icons m-b-10 window-link">description</span>
          <p><?php the_title(); ?></p>
          <div class="window">
            <div>
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" />
              <p><?php the_title(); ?></p>
              <div class="window-close">×</div>
            </div>
          </div>
        </div>


      <?php

        // формат вывода the_title() ...
      }

      wp_reset_postdata(); // сброс

      ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>