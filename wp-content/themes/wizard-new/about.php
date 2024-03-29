<?php get_header(); ?>

<?php

/* Template Name: about */

?>


<section>
  <div>
    <div class="xleb">
      <?php

      true_breadcrumbs();

      ?>
    </div>
    <h1><?php the_title(); ?></h1>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr2', true); ?></p>
    <p class="m-b-40"><?php echo get_post_meta(get_the_ID(), 'descr3', true); ?></p>


    <!-- Блок Партнеры -->
    <?php if (have_rows('sertifikaty', 'options')) : ?>
      <div class="grid col4-2 certificate-list">
        <?php while (have_rows('sertifikaty', 'options')) : the_row();
          $desc = get_sub_field('opisanie');
          $image = get_sub_field('izobrazhenie');
        ?>
          <div>
            <div class="m-b-10 window-link">
              <img src="<?php echo $image; ?>" class="img" />
            </div>
            <p><?php echo $desc; ?></p>
            <div class="window">
              <div>
                <img src="<?php echo $image; ?>" class="img" />
                <p><?php echo $desc; ?></p>
                <div class="window-close">×</div>
              </div>
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<!-- Блок Отзывы -->
<section class="bg-color-grey">
  <div>
    <h2>Отзывы Wizardsoft</h2>
    <?php if (have_rows('otzyvy', 'options')) : ?>
      <p class="m-b-20">Мы будем Вам очень благодарны за обратную связь! Отзыв о нашей работе и наших продуктах можно оставить тут:</p>
      <div class="grid col4-2 reviews-list">
        <?php while (have_rows('otzyvy', 'options')) : the_row();
          $link = get_sub_field('ssylka');
          $image = get_sub_field('izobrazhenie');
        ?>
          <a href="<?php echo $link; ?>">
            <img src="<?php echo $image; ?>" />
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

  </div>
</section>

<section>
  <div>
    <div class="grid col2-2">
      <div>
        <h2>Наш вклад в развитие отрасли</h2>
      </div>
      <div class="text-right"><a href="">Смотреть еще</a></div>
    </div>
    <div>
      <div class="grid col3-1 gap10 news-list achievements">
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
          'post_type'   => 'page-about-vklad',
          'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
        ));

        global $post;

        foreach ($my_posts as $post) {
          setup_postdata($post);

        ?>

          <a href="">
            <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
            <p>
              <font><?php echo get_post_meta(get_the_ID(), 'date-post', true); ?></font>
              <?php echo get_post_meta(get_the_ID(), 'descr', true); ?>
            </p>
          </a>

        <?php

          // формат вывода the_title() ...
        }

        wp_reset_postdata(); // сброс

        ?>


        <!-- <a href="">
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
        </a> -->
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>