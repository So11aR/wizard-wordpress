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

    <?php if (have_rows('spisok_programmnyh_produktov', 'options')) : ?>
      <div class="grid col2-1 gap10 col-products-products m-b-30">
        <?php while (have_rows('spisok_programmnyh_produktov', 'options')) : the_row();
          $image = get_sub_field('izobrazhenie');
          $desc = get_sub_field('opisanie');
          $cssRule = get_sub_field('css_klass');
          $moduleTitle = get_sub_field('zagolovok_moduli');
          $modules = get_sub_field('spisok_modulej');
        ?>
          <a href="" class="<?php echo $cssRule; ?>">
            <img src="<?php echo $image; ?>" />
            <p class="m-b-20"><?php echo $desc; ?></p>
            <p class="m-b-20"><strong><?php echo $moduleTitle; ?></strong></p>
            <div class="grid col2-2 gap20">
              <?php

              if ($modules) : ?>
                <?php foreach ($modules as $module) : ?>
                  <?php

                  switch ($module) {
                    case 'ПНР':
                    case 'ПИР':
                    case 'УНЦС':
                    case 'НМЦК':
                    case 'Дорожный':
                    case 'Infobase Wizard':
                      $moduleImg = '<span class="material-icons">dashboard_customize</span>';
                      break;
                    case 'Энергоаудит':
                      $moduleImg =  '<span class="material-icons">bolt</span>';
                      break;
                  }
                  ?>
                  <div><?php echo $moduleImg; ?> <?php echo $module; ?></div>
                <?php endforeach; ?>
              <?php endif; ?>
            </div>
          </a>
        <?php endwhile; ?>
      </div>
    <?php endif; ?>

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