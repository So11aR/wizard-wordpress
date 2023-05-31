<?php get_header(); ?>

<?php

/*
  Template Name: events
  Template Post Type: page
*/

?>


<section>
  <div>
    <div class="xleb">
      <?php

      true_breadcrumbs();

      ?>
    </div>

    <h1>Мероприятия</h1>

    <select class="select m-b-20 m-r-20">
      <option>2022</option>
      <option>2021</option>
      <option>2020</option>
    </select>

    <select class="select m-b-20">
      <option>Ноябрь</option>
      <option>Декабрь</option>
      <option>Январь</option>
    </select>

    <?php
    $args_all = array(
      'post_type'      => 'events',
      'posts_per_page'  => -1,
    );
    $events_all = get_posts($args_all);
    query_posts($args_all);
    wp_reset_postdata();
    ?>




    <div class="grid col7-3-2 m-b-20 tabslink" id="flavor-nav">
      <a rel="all" class="current">Все мероприятия</a>
      <a rel="kursi">Курсы</a>
      <a rel="webinar">Вебинар</a>
      <a rel="online">Онлайн-уроки</a>
      <a rel="int">Интенсивы</a>
      <a rel="seminar">Семинары</a>
      <a rel="kon">Конференции</a>
    </div>


    <div id="all-flavors" class="grid col4-2-1 gap10 news-list calendar">
      <?php if (!empty($events_all)) : ?>
        <?php foreach ($events_all as $event) { ?>
          <?php
          $eventType = get_field('tip_meropriyatiya', $event->ID);
          switch ($eventType) {
            case 'Курсы':
              $eventTypeImg = '<span class="material-icons">school</span>';
              $eventCssRule = 'kursi';
              break;
            case 'Вебинар':
              $eventTypeImg = '<span class="material-icons">cast</span>';
              $eventCssRule = 'webinar';
              break;
            case 'Онлайн-уроки':
              $eventTypeImg = '<span class="material-icons">cast_for_education</span>';
              $eventCssRule = 'online';
              break;
            case 'Интенсивы':
              $eventTypeImg = '<span class="material-icons">rocket_launch</span>';
              $eventCssRule = 'int';
              break;
            case 'Семинары':
              $eventTypeImg = '<span class="material-icons">group</span>';
              $eventCssRule = 'seminar';
              break;
            case 'Конференции':
              $eventTypeImg = '<span class="material-icons">groups</span>';
              $eventCssRule = 'kon';
              break;
          }
          ?>

          <a href="<?php the_permalink($event->ID); ?>" class="flavor all <?php echo $eventCssRule; ?>">
            <div class="grid col2-2">
              <div><?php the_field('data_meropriyatiya', $event->ID); ?></div>
              <div>Организатор: <?php the_field('organizator', $event->ID); ?></div>
            </div>
            <p>

              <?php echo $eventTypeImg; ?>
              <?php the_field('nazvanie', $event->ID); ?>
            </p>
            <?php the_field('opisanie_dlya_prevyu', $event->ID); ?>
          </a>



        <?php  } ?>
      <?php endif; ?>
      <!-- <a href="24-10-2022.htm" class="flavor all kursi">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">school</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a>
      <a href="" class="flavor all webinar">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">cast</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a>
      <a href="" class="flavor all online">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">cast_for_education</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a>
      <a href="" class="flavor all int">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">rocket_launch</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a>
      <a href="" class="flavor all seminar">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">group</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a>
      <a href="" class="flavor all kon">
        <div class="grid col2-2">
          <div>25.10.2022</div>
          <div>Организатор: ИПАП</div>
        </div>
        <p><span class="material-icons">groups</span> Курс №7 / 5.0</p>
        Тема 7: Работа с формой Конъюнктурный анализ
      </a> -->
    </div>
  </div>
</section>



<script>
  $(function() {
    var newSelection = "";
    $("#flavor-nav a").click(function() {
      $("#all-flavors").show();
      $("#flavor-nav a").removeClass("current");
      $(this).addClass("current");

      newSelection = $(this).attr("rel");

      $(".flavor").not("." + newSelection).hide();
      $("." + newSelection).show();
      $("#all-flavors").fadeTo();
    });
  });
</script>