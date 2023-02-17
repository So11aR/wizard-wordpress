<?php get_header(); ?>

<?php

/* Template Name: order-demo */

?>

<section>
  <div>
    <!-- <div class="xleb">
      <a href="../">Главная</a>
      <a href="services.htm">Поддержка и обучение</a>
    </div> -->

    <div class="xleb">
      <?php

      true_breadcrumbs();

      ?>
    </div>

    <h1>Бесплатная демонстрация программных продуктов «Визардсофт»</h1>
    <p class="m-b-30"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <div class="outline p40">
      <div class="grid col2-1 gap10 m-b-10">
        <div><input type="text" name="name" id="name" required placeholder="Ваше имя*"></div>
        <div><input type="text" name="email" id="email" required placeholder="Введите ваш e-mail*"></div>
        <div><input type="text" name="phone" id="phone" required placeholder="Телефон*"></div>
        <div><input type="text" name="city" id="city" required placeholder="Город (населенный пункт) и область*"></div>
      </div>
      <div class="grid col1 gap10">
        <div>
          <p class="m-b-10">Выберите продукт*</p>
          <div class="checkbox grid col3-2 gap10">
            <input type="checkbox" id="checkbox_1">
            <label for="checkbox_1">SmetaWIZARD</label>

            <input type="checkbox" id="checkbox_2">
            <label for="checkbox_2">PlanWIZARD</label>

            <input type="checkbox" id="checkbox_3">
            <label for="checkbox_3">BIMWIZARD</label>

            <input type="checkbox" id="checkbox_4">
            <label for="checkbox_4">TrioBoxWIZARD</label>

            <input type="checkbox" id="checkbox_5">
            <label for="checkbox_5">Модуль ПНР</label>

            <input type="checkbox" id="checkbox_6">
            <label for="checkbox_6">Модуль ПИР</label>
          </div>
        </div>
        <div><small>Нажимая на кнопку "Отправить", вы даете согласие на <a href="" class="link-grey">обработку своих персональных данных</a></small></div>
        <div><input type="submit" value="Отправить"></div>
        <div><small>* Поля, отмеченные символом , обязательны для заполнения</small></div>
      </div>
    </div>
  </div>
</section>

<?php get_footer(); ?>