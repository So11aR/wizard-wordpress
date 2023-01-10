<?php get_header(); ?>

<?php

/* Template Name: products */

?>


<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
    </div> -->
    <h1>Программные продукты</h1>
    <p class="m-b-30"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>

    <div class="grid col2-1 gap10 col-products-products m-b-30">
      <a href="products-smeta.htm" class="smeta">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/product-smeta.svg" />
        <p class="m-b-20">SmetaWizard. Позволяет автоматизировать расчет, проверку, экспертизу и составление широкого спектра сметной и сопроводительной документации на предприятиях различного профиля.</p>
        <p class="m-b-20"><strong>Модули</strong></p>
        <div class="grid col2-2 gap20">
          <div><span class="material-icons">dashboard_customize</span> ПНР</div>
          <div><span class="material-icons">dashboard_customize</span> ПИР</div>
          <div><span class="material-icons">dashboard_customize</span> УНЦС</div>
          <div><span class="material-icons">dashboard_customize</span> НМЦК</div>
          <div><span class="material-icons">dashboard_customize</span> Дорожный</div>
          <div><span class="material-icons">bolt</span> Энергоаудит</div>
        </div>
      </a>
      <a href="" class="plan">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/product-plan.svg" />
        <p>PlanWizard. Предназначен для автоматизации управленческой деятельности на строительных предприятиях, а именно — для календарного и сетевого планирования проектов в строительстве.</p>
      </a>
      <a href="" class="bim">
        <img src="<?php echo get_template_directory_uri() ?>/assets/img/product-bim.svg" />
        <p class="m-b-20">BimWizard. Предназначен для автоматизированного получения строительных объемов из систем BIM-моделирования с дальнейшим составлением сметной документации на их основе.</p>
        <p class="m-b-20"><strong>Модули</strong></p>
        <div class="grid col2-2 gap20">
          <div><span class="material-icons">dashboard_customize</span> Infobase Wizard</div>
        </div>
      </a>
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