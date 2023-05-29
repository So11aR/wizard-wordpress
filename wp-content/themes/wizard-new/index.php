<?php

get_header();

?>

<?php

/* Template Name: main-page */

?>

<?php if (have_rows('slajder_na_glavnoj', 'options')) : ?>
	<!-- Карусель -->
	<section class="section-line carousel bg-color-grey">
		<div>
			<div>
				<div class="swiper mySwiper swiper-initialized swiper-horizontal">
					<div class="swiper-wrapper">
						<?php while (have_rows('slajder_na_glavnoj', 'options')) : the_row();
							$image = get_sub_field('izobrazhenie_slajda');
							$title = get_sub_field('zagolovok_slajda');
							$desc = get_sub_field('opisanie_slajda');
							$link = get_sub_field('ssylka_na_straniczu_slajda');
						?>
							<div class="swiper-slide">
								<div class="grid col2-1 v-center">
									<div>
										<p class="m-b-10"><?php echo $title; ?></p>
										<p><?php echo $desc; ?></p>
										<a href="<?php echo $link; ?>">Подробнее</a>
									</div>
									<div>
										<img src="<?php echo $image; ?>" />
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					</div>
					<div class="swiper-button-next swiper-button-disabled" tabindex="-1" role="button"></div>
					<div class="swiper-button-prev" tabindex="0" role="button"></div>
					<div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal">
						<span class="swiper-pagination-bullet" tabindex="0" role="button"></span>
						<span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0">fghfgh</span>
					</div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
				</div>
			</div>

		</div>
	</section>
<?php endif; ?>



<!--Template Name: main-page  -->
<!--#include virtual="inc/header.htm"-->
<!--#include virtual="inc/nav.htm"-->

<!-- Карусель -->


<!-- Програмные проудкты -->
<section>
	<div>
		<h3>Программные продукты</h3>
		<div class="grid gap10 col2-1 products-list col-products-index">
			<?php

			// параметры по умолчанию
			$my_posts = get_posts(array(
				'numberposts' => -1,
				'category'    => 0,
				'orderby'     => 'date',
				'order'       => 'ASC',
				'include'     => array(),
				'exclude'     => array(),
				'meta_key'    => '',
				'meta_value'  => '',
				'post_type'   => 'program-products',
				'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
			));

			global $post;

			foreach ($my_posts as $post) {
				setup_postdata($post);

			?>

				<a href="" class="programmProductElem">
					<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
					<p><?php echo get_post_meta(get_the_ID(), 'descr', true); ?></p>
				</a>

			<?php

				// формат вывода the_title() ...
			}

			wp_reset_postdata(); // сброс

			?>

			<div>
				<p class="m-b-30">Наш вклад<br />в развитие отрасли</p>
				<div class="tabs tabs-style-1">
					<ul class="tabs__caption grid col3-3 gap10 m-b-30">

						<?php

						// параметры по умолчанию
						$my_posts = get_posts(array(
							'numberposts' => -1,
							'category'    => 0,
							'orderby'     => 'date',
							'order'       => 'ASC',
							'include'     => array(),
							'exclude'     => array(),
							'meta_key'    => '',
							'meta_value'  => '',
							'post_type'   => 'vklad-mini-img',
							'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
						));

						global $post;

						foreach ($my_posts as $post) {
							setup_postdata($post);

						?>

							<li class="miniVklad"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img"></li>

						<?php

							// формат вывода the_title() ...
						}

						wp_reset_postdata(); // сброс

						?>

					</ul>


					<?php

					// параметры по умолчанию
					$my_posts = get_posts(array(
						'numberposts' => -1,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  => '',
						'post_type'   => 'vklad-main',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					global $post;

					foreach ($my_posts as $post) {
						setup_postdata($post);

					?>

						<div class="tabs__content">

							<img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img m-b-20">
							<p class="m-b-20"><?php echo get_post_meta(get_the_ID(), 'descr', true); ?></p>
							<a href="">Подробнее</a>
						</div>

					<?php

						// формат вывода the_title() ...
					}

					wp_reset_postdata(); // сброс

					?>

				</div>
			</div>
		</div>
	</div>
</section>



<!-- Календарь мероприятий -->
<section class="bg-color-grey">
	<div>
		<div class="grid col2-2">
			<div>
				<h2>Календарь мероприятий</h2>
			</div>
			<div class="text-right"><a href="events/events.htm">Все мероприятия</a></div>
		</div>
		<div class="v-scroll">
			<div class="grid col4-2-1 gap10 news-list calendar">
				<a href="events/24-10-2022.htm" class="grid-item kursi">
					<div class="grid col2-2">
						<div>25.10.2022</div>
						<div>Организатор: ИПАП</div>
					</div>
					<p><span class="material-icons">school</span> Курс №7 / 5.0</p>
					Тема 7: Работа с формой Конъюнктурный анализ
				</a>
				<a href="" class="grid-item webinar">
					<div class="grid col2-2">
						<div>25.10.2022</div>
						<div>Организатор: ИПАП</div>
					</div>
					<p><span class="material-icons">cast</span> Курс №7 / 5.0</p>
					Тема 7: Работа с формой Конъюнктурный анализ
				</a>
				<a href="" class="grid-item online">
					<div class="grid col2-2">
						<div>25.10.2022</div>
						<div>Организатор: ИПАП</div>
					</div>
					<p><span class="material-icons">cast_for_education</span> Курс №7 / 5.0</p>
					Тема 7: Работа с формой Конъюнктурный анализ
				</a>
				<a href="" class="grid-item int">
					<div class="grid col2-2">
						<div>25.10.2022</div>
						<div>Организатор: ИПАП</div>
					</div>
					<p><span class="material-icons">rocket_launch</span> Курс №7 / 5.0</p>
					Тема 7: Работа с формой Конъюнктурный анализ
				</a>
				<!--
							<a href="">
								<p>
									<font>31.01.2023</font>
									<span><span class="material-icons">group</span> Семинар №10 /5.0</span>Тема 10: Формы отчетности: М29, Ресурсная ведомость, Ведомость объемов работ
								</p>
							</a>
							<a href="">
								<p>
									<font>31.01.2023</font>
									<span><span class="material-icons">groups</span> Конференция №10 /5.0</span>Тема 10: Формы отчетности: М29, Ресурсная ведомость, Ведомость объемов работ
								</p>
							</a>
							-->
			</div>
		</div>
	</div>
</section>

<!-- Новости -->
<?php //if(have_posts()) : 
?>
<!--    --><?php //while(have_posts()) : the_post(); 
						?>
<!--        <h2><a href="--><?php //the_permalink(); 
														?><!--">--><?php //the_title(); 
																					?><!--</a></h2>-->
<!--        <small>--><?php //the_time('F jS, Y'); 
											?><!--</small>-->
<!--        <div class="entry">-->
<!--            --><?php //the_content(); 
										?>
<!--        </div>-->
<!--    --><?php //endwhile; 
						?>
<?php //endif; 
?>

<!-- begin-->

<?php

$wp_query = new WP_Query(array(
	"post_type" => "post",
	"post_status" => "publish",
	'orderby' => 'post_date',
	'order'   => 'DESC',
	"posts_per_page" => 3
));

if ($wp_query->have_posts()) {
	$i = 0;


	while ($wp_query->have_posts()) {
		$wp_query->the_post();

		$temp_poists[$i] = $wp_query->posts[$i];
		$temp_poists[$i]->post_date_format = get_the_date("d.m.Y");
		$temp_poists[$i]->post_permalink = the_permalink();


		echo "<pre>";
		print_r($wp_query->posts[$i]);
		echo "</pre>";
?>

		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br />
		<?php echo $wp_query->posts[$i]->post_content;  ?>
		<br />
		<?php echo get_the_date("d-m-Y"); ?>
		<hr>

<?php
		$i++;
	}
}

wp_reset_postdata();

?>

<!-- end-->
<section class="carousel">
	<div>

		<div class="grid col2-2">
			<div>
				<h2>Новости</h2>
			</div>
			<div class="text-right"><a href="news/news.htm">Все новости</a></div>
		</div>

		<div class="v-scroll m-b-50">
			<div class="grid col3-1 gap10 news-list news">
				<a href="<?php echo $temp_poists[0]->guid; ?>">
					<img src="img/logo-w-red.svg" />
					<p>
						<font><?php echo $temp_poists[0]->post_date_format; ?></font>
						<h2><?php echo $temp_poists[0]->post_title; ?></h2>
						<?php echo $temp_poists[0]->post_content; ?>
					</p>
				</a>
				<a href="">
					<img src="img/minstroy.png" />
					<p>
						<font>21.10.2022</font>
						Минстрой РФ опубликовал дополнения к индексам изменения сметной стоимости за 3 квартал 2022 года
					</p>
				</a>
				<a href="">
					<img src="img/product-smeta.svg" />
					<p>
						<font>17.10.2022</font>
						Изменения в сметно-нормативной базе ПП SmetaWIZARD с 10 по 14 октября 2022 года
					</p>
				</a>
			</div>
		</div>


		<!-- Блок Партнеры -->
		<h2><a href="cooperation/partners.htm">Партнеры</a></h2>
		<div>
			<div class="swiper mySwiper2 swiper-initialized swiper-horizontal partners">
				<div class="swiper-wrapper ">
					<?php

					// параметры по умолчанию
					$my_posts = get_posts(array(
						'numberposts' => -1,
						'category'    => 0,
						'orderby'     => 'date',
						'order'       => 'ASC',
						'include'     => array(),
						'exclude'     => array(),
						'meta_key'    => '',
						'meta_value'  => '',
						'post_type'   => 'partners-block',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					global $post;

					foreach ($my_posts as $post) {
						setup_postdata($post);

					?>

						<div class="swiper-slide" role="">
							<a href="<?php echo get_post_meta(get_the_ID(), 'link-url', true); ?>" target="_blank"><img src="<?php echo get_the_post_thumbnail_url(); ?>" class="img" /></a>
						</div>

					<?php

						// формат вывода the_title() ...
					}

					wp_reset_postdata(); // сброс

					?>

				</div>

				<div class="swiper-button-next swiper-button-next-2 swiper-button-disabled" style="top: 50%; transform:translateY(-50%)" tabindex="-1" role="button"></div>
				<div class="swiper-button-prev swiper-button-prev-2" style="top: 50%; transform:translateY(-50%)" tabindex="0" role="button"></div>
				<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
			</div>
		</div>

	</div>
</section>

<!-- Подписаться на рассылку -->
<section class="bg-color-grey">
	<div>
		<h2>Подписаться на рассылку</h2>
		<form class="grid gap10 subscribe-main">
			<div class="grid subscribe gap10">
				<div><input type="text" name="name" id="name" required placeholder="Ваше имя"></div>
				<div><input type="text" name="email" id="email" required placeholder="Введите ваш e-mail"></div>
				<div class="checkbox">
					<input type="checkbox" id="checkbox_1">
					<label for="checkbox_1"><small>Подписываясь на рассылку, соглашаюсь с <a href="" class="link-grey">Политикой конфиденциальности</a></small></label>
				</div>
			</div>
			<div><input type="submit" value="Подписаться"></div>
		</form>
	</div>
</section>
<!--#include virtual="inc/footer.htm"-->


<?php

get_footer();

?>


