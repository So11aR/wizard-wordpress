<?php get_header(); ?>

<?php

/*
  Template Name: events
  Template Post Type: events
*/

?>

<section>
  <div>
    <div class="xleb">
      <?php

      true_breadcrumbs();

      ?>
    </div>


    <?php
    $eventType = get_field('tip_meropriyatiya');

    switch ($eventType) {
      case 'Курсы':
        echo '<span class="material-icons">school</span>';
        break;
      case 'Вебинар':
        echo '<span class="material-icons">cast</span>';
        break;
      case 'Онлайн-уроки':
        echo '<span class="material-icons">cast_for_education</span>';
        break;
      case 'Интенсивы':
        echo '<span class="material-icons">rocket_launch</span>';
        break;
      case 'Семинары':
        echo '<span class="material-icons">group</span>';
        break;
      case 'Конференции':
        echo '<span class="material-icons">groups</span>';
        break;
    }
    ?>

    <h1><?php the_title(); ?></h1>
    <div class="m-b-40">
      <p class="m-b-20">
        <font><?php the_field('data_meropriyatiya'); ?></font>
      </p>
      <p class="m-b-20">
        <?php if (get_field('vremya')) : ?>
          Время: <?php the_field('vremya'); ?>
        <?php endif; ?>
        <br />
        <?php if (get_field('stoimost')) : ?>
          Стоимость: <?php the_field('stoimost'); ?>
        <?php endif; ?>
        <br />  
        <?php if (get_field('organizator')) : ?>
          Организатор: <?php the_field('organizator'); ?>
        <?php endif; ?>
      </p>
      <p class="m-b-30">
        <a href="request.htm" class="btn1"><span class="material-icons">forward_to_inbox</span> Оставить заявку</a>
      </p>
      <p class="m-b-20"><?php the_field('opisanie'); ?></p>
    </div>
    <a href="events.htm" class="btn3"><span class="material-icons">arrow_back</span> Вернуться назад</a>
  </div>
</section>