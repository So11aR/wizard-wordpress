<?php get_header(); ?>

<?php

/* Template Name: about */

?>


<section>
  <div>
    <h1><?php the_title(); ?></h1>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr2', true); ?></p>
    <p class="m-b-40"><?php echo get_post_meta(get_the_ID(), 'descr3', true); ?></p>

    <div class="grid col4-2 certificate-list">

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
        'post_type'   => 'sertificates',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>

        <div>
          <div class="m-b-10 window-link"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" /></div>
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
<section class="bg-color-grey">
  <div>
    <h2>Отзывы Wizardsoft</h2>
    <p class="m-b-20">Мы будем Вам очень благодарны за обратную связь! Отзыв о нашей работе и наших продуктах можно оставить тут:</p>
    <div class="grid col4-2 reviews-list">

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
        'post_type'   => 'otzyvs',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>

        <a href=""><img src="<?php echo get_the_post_thumbnail_url(); ?>" /></a>

      <?php

        // формат вывода the_title() ...
      }

      wp_reset_postdata(); // сброс

      ?>
      
    </div>
  </div>
</section>
<section>
  <div>
    <div class="grid col2-2">
      <div>
        <h2>Наш вклад в развитие отрасли</a>
      </div>
      <div class="text-right"><a href="">Смотреть еще</a></div>
    </div>
    <div>
      <div class="grid col3-1 gap10 news-list achievements">
        <a href="">
          <img src="../img/achievements-1.jpg" />
          <p>
            <font>24.10.2022</font>
            С 15 по 21 августа 2022 прошел VIII Международный военно-технический форум «АРМИЯ-2022».
          </p>
        </a>
        <a href="">
          <img src="../img/achievements-2.jpg" />
          <p>
            <font>21.10.2022</font>
            Более сотни студентов со всей России приняли участие в проектно-образовательном интенсиве «Школа Шухова 2.0»
          </p>
        </a>
        <a href="">
          <img src="../img/achievements-3.jpg" />
          <p>
            <font>17.10.2022</font>
            15 июня 2022 года в Москве состоялся VI Российский нефтегазовый IT-Саммит «Интеллектуальное месторождение»
          </p>
        </a>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>