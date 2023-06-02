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

    <h1>Новости</h1>
    <select class="select m-b-20">
      <option>2022</option>
      <option>2021</option>
      <option>2020</option>
    </select>

    <?php
    $args_all = array(
      'post_type'  => 'post',
      'posts_per_page'  => -1,
    );
    $news_all = get_posts($args_all);
    query_posts($args_all);
    wp_reset_postdata();
    ?>

    <div class="grid col5-2 m-b-20 tabslink">
      <a href="news.htm" class="activetab">Все новости</a>
      <a href="our-contribution.htm">Наш вклад</a>
      <a href="#">Партнеры</a>
      <a href="#">Визардсофт</a>
      <a href="#">Продукты</a>
    </div>

    <div class="grid col1 gap10 news-list news">
      <?php if (!empty($news_all)) : ?>
        <?php foreach ($news_all as $news) { ?>
          <a href="<?php the_permalink($news->ID); ?>">
            <img src="<?php echo get_the_post_thumbnail_url($news->ID); ?>" />
            <p>
              <font>
                <?php echo date_i18n('d.m.Y', strtotime($news->post_date)); ?>
              </font>
              <?php the_field('prevyu_dlya_novosti', $news->ID); ?>
            </p>
          </a>
        <?php  } ?>
      <?php endif; ?>
    </div>

  </div>
</section>


<?php get_footer(); ?>