<?php get_header(); ?>

<?php

/* Template Name: freeconsultation */

?>

<section>
  <div>
    <div class="xleb">
      <a href="../">Главная</a>
      <a href="services.htm">Поддержка и обучение</a>
    </div>
    <h1>Бесплатные консультации в Визардсофт</h1>
    <p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
    <div class="grid col2-left-icon gap20 m-b-30">
      <div><img src="<?php echo get_template_directory_uri() ?>/assets/img/product-icon2.svg" class="img" /></div>
      <div><?php echo get_post_meta(get_the_ID(), 'descr2', true); ?></div>
    </div>
    <div class="outline p40">
      <h2>Записаться на консультацию</h2>
      <div class="grid col2-1 gap10 m-b-10">
        <div><input type="text" name="name" id="name" required placeholder="Ваше имя*"></div>
        <div><input type="text" name="number" id="number" required placeholder="Номер Вашей программы*"></div>
        <div><input type="text" name="phone" id="phone" required placeholder="Телефон*"></div>
        <div><input type="text" name="day" id="day" required placeholder="Дата и время*"></div>
      </div>
      <div class="grid col1 gap10">
        <div><textarea id="text" name="text" required placeholder="Что вы хотели бы обсудить*" rows="4"></textarea></div>
        <div><small>Нажимая на кнопку "Отправить", вы даете согласие на <a href="" class="link-grey">обработку своих персональных данных</a></small></div>
        <div><input type="submit" value="Отправить"></div>
        <div><small>* Поля, отмеченные символом , обязательны для заполнения</small></div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>