<?php get_header(); ?>

<?php

/*
  Template Name: all-news
  Template Post Type: page
*/

?>

<section>
  <div>
    <div class="xleb">
      <!-- <a href="../">Главная</a> -->
      <?php

      true_breadcrumbs();

      ?>
    </div>



    <h1><?php the_title(); ?></h1>

    <!--Для вывода актуальных годов на основе опубликованных новостей-->
    <?php

    $yearArgs = array(
      'post_type' => 'post',
      'posts_per_page'   => -1,
      'post_status' => 'publish',
      'order'          => 'DESC',
      'orderby'        => 'date',

    );
    $yearAll = get_posts($yearArgs);
    $tabArrYear = [];
    query_posts($yearArgs);
    wp_reset_postdata();
    ?>

    <select class="select select-news-year m-b-20">
      <?php if (!empty($yearAll)) : ?>
        <?php foreach ($yearAll as $year) { ?>
          <?php
          $tabItem = date_i18n('Y', strtotime($year->post_date));
          $tabArrYear[] = $tabItem;
          ?>
        <?php  }
        $resultTab = array_unique($tabArrYear);
        foreach ($resultTab as $resultTabSngl) {
          echo '<option>' . $resultTabSngl . '</option>';
        }

        ?>


      <?php wp_reset_query();
      endif; ?>
    </select>

    <div class="grid col5-2 m-b-20 tabslink">
      <a href="news.htm" class="activetab">Все новости</a>
      <a href="our-contribution.htm">Наш вклад</a>
      <a href="#">Партнеры</a>
      <a href="#">Визардсофт</a>
      <a href="#">Продукты</a>
    </div>

    <!--Вывод новостей-->
    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $yearNow = date('Y');
    $newsArgs = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page'   => 3,
      'paged' => $paged,
      'order'          => 'DESC',
      'orderby'        => 'date',
      'year'        => $yearNow,
      //'paged' => $paged,
    );
    $news_all = get_posts($newsArgs);
    query_posts($newsArgs);
    wp_reset_postdata();


    ?>

    <?php if (!empty($news_all)) : ?>
      <div class="grid col1 gap10 news-list news">
        <?php foreach ($news_all as $news) : ?>
          <a href="<?php the_permalink($news->ID); ?>">
            <?php echo get_the_post_thumbnail($news->ID, [106, 60]); ?>
            <p>
              <font><?php echo date_i18n('d.m.Y', strtotime($news->post_date)); ?></font>
              <?php echo $news->post_title; ?>
            </p>
          </a>
        <?php endforeach; ?>

        <?php
        $pagination = paginate_links(array(
          //	'base' => get_pagenum_link(1) . '%_%',
          //	'format' => 'page/%#%',
          'type' => 'array', //instead of 'list'
          //	'total' => $wp_query->max_num_pages,
          'current' => $paged,
          'show_all'          => false,
          'end_size'          => 1,
          'mid_size'          => 2,
          'prev_next'          => false,
          'prev_text'         => __('«'),
          'next_text'          => __('»'),
          'add_args'          => false,
          'add_fragment'       => '',
          'before_page_number'  => '',
          'after_page_number'   => ''
        ));
        if (!empty($pagination)) {
          echo '<div class="pagination">';
          foreach ($pagination as $key => $page_link) {
            if (strpos($page_link, 'current') !== false) {
              $activeClass = ' active';
              echo '<p class="paginated_link active">' . $page_link . '</p>';
            } else {
              echo '<p class="paginated_link">' . $page_link . '</p>';
            }
          }
          echo '</div>';
        }
        ?>

      </div>

    <?php wp_reset_query();
    endif; ?>

    <?php
    //echo get_permalink();
    ?>

  </div>
</section>

<script src="<?php echo get_template_directory_uri(); ?>/assets/scripts/loadMore.js"></script>
<?php get_footer(); ?>