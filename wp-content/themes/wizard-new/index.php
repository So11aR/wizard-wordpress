<?php

get_header();

?>

<?php

/* Template Name: main-page */

?>

<!-- Карусель -->
<?php if (have_rows('slajder_na_glavnoj', 'options')) : ?>
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

<!-- Програмные проудкты -->
<section>
	<div>
		<h3>Программные продукты</h3>
		<div class="grid gap10 col2-1 products-list col-products-index">
			<?php if (have_rows('spisok_programmnyh_produktov', 'options')) : ?>

				<?php while (have_rows('spisok_programmnyh_produktov', 'options')) : the_row();
					$image = get_sub_field('izobrazhenie');
					$desc = get_sub_field('opisanie');
					$cssRule = get_sub_field('css_klass');

				?>
					<a href="" class="<?php echo $cssRule; ?>">
						<img src="<?php echo $image; ?>" />
						<p><?php echo $desc; ?></p>
					</a>
				<?php endwhile; ?>

			<?php endif; ?>

			<!-- Наш вклад в развитие отрасли -->
			<?php if (have_rows('nash_vklad_v_razvitie', 'options')) : ?>
				<div>
					<div class="tabs tabs-style-1">
						<ul class="tabs__caption grid col3-3 gap10 m-b-30">
							<?php while (have_rows('nash_vklad_v_razvitie', 'options')) : the_row();
								$image = get_sub_field('izobrazhenie');
							?>
								<?php $row_index = get_row_index(); ?>
								<li data-row="<?php echo $row_index; ?>" class="miniVklad <?php if ($row_index == 1) {
																																						echo 'active';
																																					} ?>"><img src="<?php echo $image; ?>" class="img"></li>
							<?php endwhile; ?>
						</ul>

						<?php while (have_rows('nash_vklad_v_razvitie', 'options')) : the_row();
							$image = get_sub_field('izobrazhenie');
							$desc = get_sub_field('opisanie');
						?>
							<div class="tabs__content">
								<img src="<?php echo $image; ?>" class="img m-b-20">
								<p class="m-b-20"><?php echo $desc; ?></p>
								<a href="">Подробнее</a>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>

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
			<div class="text-right"><a href="/meropriyatiya">Все мероприятия</a></div>
		</div>
		<div class="v-scroll">

			<?php
			$args_all = array(
				'post_type'      => 'events',
				'posts_per_page'  => 4,
				"meta_key" => "data_meropriyatiya",
				"orderby" => "meta_value_num",
				"order" => 'ASC'
				//TODO: убрать прошедшие мероприятия в архив, те что меньше текущей даты
			);
			$events_all = get_posts($args_all);
			query_posts($args_all);
			wp_reset_postdata();
			?>
			<div class="grid col4-2-1 gap10 news-list calendar">
				<?php if (!empty($events_all)) : ?>
					<?php foreach ($events_all as $event) { ?>
						<?php
						// $result = get_field('data_meropriyatiya', $event->ID);
						// $eventDate = DateTime::createFromFormat('d.m.Y', $result);

						// $eventDateSrt = strtotime($eventDate->format('d.m.Y')); //Дата мероприятия в метке времени Unix
						// $dateNowStr = strtotime(date('d.m.Y')); // Текущая дата в метке времени Unix

						// echo $eventDateStr;
						// echo 'Сегодня'.$dateNowStr;

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

						<a href="<?php the_permalink($event->ID); ?>" class="grid-item <?php echo $eventCssRule; ?>">
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

				<!-- <a href="events/24-10-2022.htm" class="grid-item kursi">
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
				</a> -->
			</div>
		</div>
	</div>
</section>

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
				<a href="">
					<img src="img/minstroy.png" />
					<p>
						<font>21.10.2022</font>
						Минстрой РФ опубликовал дополнения к индексам изменения сметной стоимости за 3 квартал 2022 года
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


		<h2><a href="cooperation/partners.htm">Партнеры</a></h2>
		<!-- Блок Партнеры -->
		<?php if (have_rows('partnery', 'options')) : ?>
			<div>
				<div class="swiper mySwiper2 swiper-initialized swiper-horizontal partners">
					<div class="swiper-wrapper ">
						<?php while (have_rows('partnery', 'options')) : the_row();
							$image = get_sub_field('izobrazhenie');
							$link = get_sub_field('ssylka');
						?>
							<div class="swiper-slide" role="">
								<a href="<?php echo $link; ?>" target="_blank">
									<img src="<?php echo $image; ?>" class="img" />
								</a>
							</div>
						<?php endwhile; ?>
					</div>

					<div class="swiper-button-next swiper-button-next-2 swiper-button-disabled" style="top: 50%; transform:translateY(-50%)" tabindex="-1" role="button"></div>
					<div class="swiper-button-prev swiper-button-prev-2" style="top: 50%; transform:translateY(-50%)" tabindex="0" role="button"></div>
					<span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
				</div>
			</div>
		<?php endif; ?>





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