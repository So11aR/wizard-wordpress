<?php get_header(); ?>

<?php

/* Template Name: clients */

?>


<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
      <a href="about.htm">О компании</a>
    </div> -->
    <h1><?php the_title(); ?></h1>
    <p class="m-b-40">
      <?php echo get_post_meta(get_the_ID(), 'descr1', true); ?>
    </p>
    <div class="grid col4-2 gap10 partners-list">
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
        'post_type'   => 'partners-block',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>

        <img src="<?php echo get_the_post_thumbnail_url(); ?>" />

      <?php

        // формат вывода the_title() ...
      }

      wp_reset_postdata(); // сброс

      ?>

    </div>
  </div>
</section>

<?php get_footer(); ?>