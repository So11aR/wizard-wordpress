<?php get_header(); ?>

<?php

/* Template Name: interactive-support */

?>

<section>
  <div>
      <div class="xleb">
          <?php

          true_breadcrumbs();

          ?>
      </div>
    <h1>Удаленная техническая поддержка</h1>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <p class="m-b-20"><strong><?php echo get_post_meta(get_the_ID(), 'descr2', true); ?></strong></p>

    <div class="grid gap10 col2-1 services-list m-b-10">
      <div class="p20">
        <h2>1 <span class="material-icons">download</span></h2>
        <p class="m-b-10"><a href="">Скачать программу</a> для удалённого онлайн-доступа (EXE, 18 Мб)</p>
        <p><a href="">Руководство к программе</a> (ZIP, 86 Кб)</p>
      </div>
      <div class="p20">
        <h2>2 <span class="material-icons">mouse</span></h2>
        <p>Запустить скачанный файл двойным кликом левой кнопки мыши или кликнув по файлу правой клавишей мыши, выбрать в контекстном меню пункт «Открыть»</p>
      </div>
      <div class="p20">
        <h2>3 <span class="material-icons">account_circle</span></h2>
        <p class="m-b-20">Если для соединения с сетью Internet используется proxy-server может потребоваться ввести логин и пароль вашей учетной записи;</p>
        <img src="img/interactive-support1.jpg" class="img" />
      </div>
      <div class="p20">
        <h2>4 <span class="material-icons">perm_phone_msg</span></h2>
        <p class="m-b-20">Сообщить инженеру горячей линии ЗАО «ВИЗАРДСОФТ» Ваш ID указанный в открывшемся окне;</p>
        <img src="img/interactive-support2.jpg" class="img outline" />
      </div>
    </div>
    <div class="grid gap10 col1 services-list">
      <div class="p20">
        <h2>5 <span class="material-icons">web_asset</span></h2>
        <p>Для разрыва соединения просто закройте окно приложения программы удалённого онлайн-доступа.</p>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>