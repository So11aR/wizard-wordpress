<?php get_header(); ?>

<?php

/* Template Name: vacancy */

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

    <h1>Карьера в «Визардсофт»</h1>
    <div class="grid col2-1 gap40">
      <div><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" /></div>
      <div>
        <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
        <p><?php echo get_post_meta(get_the_ID(), 'descr2', true); ?></p>
      </div>
    </div>
  </div>
</section>

<section class="bg-color-grey">
  <div>
    <h2>Преимущества работы</h2>
    <div class="grid gap40 col4-2-1">
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/vacancy-icon1.svg" class="img" /></div>
        <div>Интересное<br />и эффективное обучение</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/vacancy-icon2.svg" class="img" /></div>
        <div>Карьерный<br />
          <nobr>и профессиональный</nobr> рост
        </div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/vacancy-icon3.svg" class="img" /></div>
        <div>Дружный<br />и сплоченный коллектив</div>
      </div>
      <div class="grid plus2-1">
        <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/about/vacancy-icon4.svg" class="img" /></div>
        <div>Работа<br />с лидерами рынка</div>
      </div>
    </div>
  </div>
</section>

<section>
  <div class="details">
    <h2>Вакансии</h2>
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
      'post_type'   => 'vacancy',
      'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
    ));

    global $post;

    foreach ($my_posts as $post) {
      setup_postdata($post);

    ?>

      <details>
        <summary><?php the_title(); ?></summary>
        <div>
          <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'office_position', true); ?></p>

          <p class="m-b-5"><strong>Требования:</strong></p>
          <?php echo get_post_meta(get_the_ID(), 'requirements', true); ?>

          <p class="m-b-5"><strong>Обязанности:</strong></p>
          <?php echo get_post_meta(get_the_ID(), 'duties', true); ?>

          <p class="m-b-5"><strong>Условия:</strong></p>
          <?php echo get_post_meta(get_the_ID(), 'conditions', true); ?>

          <div class="grid grid20 resume m-b-30 gap40 v-center bg-color-grey p20">
            <div>
              Ждем Ваше резюме на e-mail: personal@wizardsoft.ru<br />
              Подробная информация — по тел.: <nobr>8-904-554-79-97</nobr>, <nobr>+7 (812) 655-63-23</nobr> доб. 193, Кучерова Елена Геннадьевна.
            </div>
            <div>
              <a href="" class="btn1">Отправить резюме</a>
            </div>
          </div>
        </div>
      </details>

      <!-- <img src="<?php echo get_the_post_thumbnail_url(); ?>" /> -->

    <?php

      // формат вывода the_title() ...
    }

    wp_reset_postdata(); // сброс

    ?>

  </div>
</section>

<?php get_footer(); ?>