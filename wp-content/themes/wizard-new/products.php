<?php get_header(); ?>

<?php

/* Template Name: products */

?>


<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
    </div> -->
      <div class="xleb">
          <?php

          true_breadcrumbs();

          ?>
      </div>
    <h1>Программные продукты</h1>
    <?php echo get_post_meta(get_the_ID(), 'descr1', true); ?>

    <div class="grid col2-1 gap10 col-products-products m-b-30">

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
        'post_type'   => 'program-products',
        'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ));

      global $post;

      foreach ($my_posts as $post) {
        setup_postdata($post);

      ?>

        <a href="" class="programmProductsElem">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" />
          <?php echo get_post_meta(get_the_ID(), 'descr', true); ?>
          <?php echo get_post_meta(get_the_ID(), 'module_title', true); ?>
          <div class="grid col2-2 gap20">
            <?php echo get_post_meta(get_the_ID(), 'products_modules', true); ?>
          </div>
        </a>

      <?php

        // формат вывода the_title() ...
      }

      wp_reset_postdata(); // сброс

      ?>

    </div>

    <div class="grid col4-2 gap10 products-list2">
      <a href=""><span class="material-icons">description</span>DigestWIZARD</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Модуль ПНР</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Модуль ПИР</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Модуль УНЦС</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Модуль НМЦК</a>
      <a href=""><span class="material-icons">dashboard_customize</span>Модуль Дорожный</a>
      <a href=""><span class="material-icons">bolt</span>Энергоаудит</a>
      <a href=""><span class="material-icons">tv</span>Установка под Linux</a>
      <a href=""><span class="material-icons">dashboard_customize</span> Infobase Wizard</a>
    </div>
  </div>
</section>

<section class="bg-color-grey">
  <div>
    <h2>Преимуществами компании </h2>
    <div class="grid gap40 col3-1">
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon1.svg" class="img" /></div>
        <div>Нам доверяют<br />больше 30 лет</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon2.svg" class="img" /></div>
        <div>Мы работаем<br />во всех регионах РФ</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon3.svg" class="img" /></div>
        <div>Мы активно сотрудничаем с учебными заведениями, участниками отраслям</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon4.svg" class="img" /></div>
        <div>Индивидуальный<br />подход</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon5.svg" class="img" /></div>
        <div>Заботливое<br />отношение</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon6.svg" class="img" /></div>
        <div>Оперативно реагируем<br />на пожелания клиентов</div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>