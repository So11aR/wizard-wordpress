<?php get_header(); ?>

<?php

/* Template Name: offices */

?>

<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
      <a href="about.htm">О компании</a>
    </div> -->
      <div class="xleb">
          <?php

          true_breadcrumbs();

          ?>
      </div>
    <h1><?php the_title(); ?></h1>
    <p class="m-b-40"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <div class="grid col3-1 gap20 city-list">

      <?php

      // параметры по умолчанию
      $my_posts = get_posts(array(
        'numberposts' => -1,
        'category'    => 0,
        'orderby'     => 'date',
        'order'       => 'ASC', // или DESC если по дате
        'include'     => array(),
        'exclude'     => array(),
        'meta_key'    => '',
        'meta_value'  => '',
        'post_type'   => 'offices',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>

        <div class="outline">
        <!-- <?php echo get_post_meta(get_the_ID(), 'descr1', true); ?> -->
          <p>
            <strong><?php the_title(); ?></strong><br />
            <span><?php echo get_post_meta(get_the_ID(), 'phone', true); ?></span><br />
            <span><?php echo get_post_meta(get_the_ID(), 'phone2', true); ?></span><br />
            <span><?php echo get_post_meta(get_the_ID(), 'phone3', true); ?></span><br />
            <span><?php echo get_post_meta(get_the_ID(), 'email', true); ?></span>
          </p>
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