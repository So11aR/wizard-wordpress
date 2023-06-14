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
      <option>2023</option>
      <option>2022</option>
      <option>2021</option>
      <option>2020</option>
    </select>

    <select class="select m-b-20">
      <option>Январь</option>
      <option>Февраль</option>
      <option>Март</option>
      <option>Апрель</option>
      <option>Май</option>
      <option>Июнь</option>
      <option>Июль</option>
      <option>Август</option>
      <option>Сентябрь</option>
      <option>Октябрь</option>
      <option>Ноябрь</option>
      <option>Декабрь</option>

    </select>

    <?php
    $args_all = array(
      'post_type'      => 'events',
      'posts_per_page'  => -1,
      'meta_key' => "data_meropriyatiya",
      'orderby' => "meta_value_num",
      'order' => 'ASC'
    );
    $events_all = get_posts($args_all);

    $args_tab = array(
      'post_type' => 'events',
      'posts_per_page' => -1,
      'orderby' => "title",
    );
    $eventsTabs_all = get_posts($args_tab);

    $tabArr = [];
    query_posts($args_all);
    wp_reset_postdata();
    ?>

    <!-- Табы мероприятий -->
    <div class="grid col7-3-2 m-b-20 tabslink" id="flavor-nav">
      <a rel="all" class="current">Все мероприятия</a>
      <?php
      if (!empty($eventsTabs_all)) {

        foreach ($eventsTabs_all as $event) {

          $eventDateTab = strtotime(get_field('data_meropriyatiya', $event->ID));
          $dateNowTab = strtotime(date('d.m.Y'));
          $tabTerms = get_field('kategoriya_meropriyatiya', $event->ID);

          if ($eventDateTab >= $dateNowTab) {
            foreach ($tabTerms as $term) {
              $tabItem = '<a rel="' . $term->slug . '" class="">'  . $term->name . '</a>';
              $tabArr[] = $tabItem;
            }
          }
        }

        $resultTab = array_unique($tabArr);
        foreach ($resultTab as $resultTabSngl) {
          echo $resultTabSngl;
        }
      }
      ?>
    </div>

    <!-- Активные и будущие мероприятия -->
    <div id="all-flavors" class="grid col4-2-1 gap10 news-list calendar">
      <?php if (!empty($events_all)) : ?>
        <?php foreach ($events_all as $event) { ?>
          <?php
          $eventDate = strtotime(get_field('data_meropriyatiya', $event->ID));
          $dateNow = strtotime(date('d.m.Y'));
          ?>

          <?php
          $eventType = get_field('tip_meropriyatiya', $event->ID);
          switch ($eventType) {
            case 'Курсы':
              $eventTypeImg = '<span class="material-icons">school</span>';
              break;
            case 'Вебинар':
              $eventTypeImg = '<span class="material-icons">cast</span>';
              break;
            case 'Онлайн-уроки':
              $eventTypeImg = '<span class="material-icons">cast_for_education</span>';
              break;
            case 'Интенсивы':
              $eventTypeImg = '<span class="material-icons">rocket_launch</span>';
              break;
            case 'Семинары':
              $eventTypeImg = '<span class="material-icons">group</span>';
              break;
            case 'Конференции':
              $eventTypeImg = '<span class="material-icons">groups</span>';
              break;
          }
          $terms = get_field('kategoriya_meropriyatiya', $event->ID);
          if ($eventDate >= $dateNow) { ?>
            <a href="<?php the_permalink($event->ID); ?>" class="flavor all <?php if ($terms) {
                                                                              foreach ($terms as $term) {
                                                                                echo esc_html($term->slug);
                                                                              }
                                                                            }
                                                                            ?>">
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
          <?php    }
          ?>

        <?php  } ?>
      <?php endif; ?>

    </div>

    <br>
    <h1>Прошедшие мероприятия</h1>
    <div class="grid col4-2-1 gap10 news-list calendar">
      <?php if (!empty($events_all)) : ?>
        <?php foreach ($events_all as $event) { ?>
          <?php
          $eventDate = strtotime(get_field('data_meropriyatiya', $event->ID));
          $dateNow = strtotime(date('d.m.Y'));
          ?>

          <?php
          $eventType = get_field('tip_meropriyatiya', $event->ID);
          switch ($eventType) {
            case 'Курсы':
              $eventTypeImg = '<span class="material-icons">school</span>';
              break;
            case 'Вебинар':
              $eventTypeImg = '<span class="material-icons">cast</span>';
              break;
            case 'Онлайн-уроки':
              $eventTypeImg = '<span class="material-icons">cast_for_education</span>';
              break;
            case 'Интенсивы':
              $eventTypeImg = '<span class="material-icons">rocket_launch</span>';
              break;
            case 'Семинары':
              $eventTypeImg = '<span class="material-icons">group</span>';
              break;
            case 'Конференции':
              $eventTypeImg = '<span class="material-icons">groups</span>';
              break;
          }
          $terms = get_field('kategoriya_meropriyatiya', $event->ID);
          if ($eventDate < $dateNow) { ?>
            <a href="<?php the_permalink($event->ID); ?>" class="">
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
          <?php    }
          ?>

        <?php  } ?>
      <?php endif; ?>

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
<?php get_footer(); ?>