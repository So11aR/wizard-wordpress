<?php

get_header();

?>
<!--#include virtual="inc/header.htm"-->
<!--#include virtual="inc/nav.htm"-->

<!-- Карусель -->
<section class="section-line carousel bg-color-grey">
	<div>
		<div>
			<div class="swiper mySwiper swiper-initialized swiper-horizontal">
				<div class="swiper-wrapper">

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
						'post_type'   => 'slider-header',
						'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
					));

					global $post;

					foreach ($my_posts as $post) {
						setup_postdata($post);

					?>

						<div class="swiper-slide">
							<div class="grid col2-1 v-center">
								<div>
									<p class="m-b-10"><?php the_title(); ?></p>
									<p><?php echo get_post_meta(get_the_ID(), 'descr1', true); ?></p>
									<a href="">Подробнее</a>
								</div>
								<div>
									<img src="<?php echo get_the_post_thumbnail_url(); ?>" />
								</div>
							</div>
						</div>

					<?php

						// формат вывода the_title() ...
					}

					wp_reset_postdata(); // сброс

					?>

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

				<a href="">
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
						<li class="active"><img src="img/achievements-1.jpg" class="img"></li>
						<li><img src="img/achievements-2.jpg" class="img"></li>
						<li><img src="img/achievements-3.jpg" class="img"></li>
					</ul>
					<div class="tabs__content active">
						<img src="img/achievements-1.jpg" class="img m-b-20">
						<p class="m-b-20">С 15 по 21 августа 2022 года на территории конгрессно-выставочного центра «Патриот», аэродроме «Кубинка» и полигоне «Алабино» прошел VIII Международный военно-технический форум «АРМИЯ-2022». По итогам научно-деловой программы форума было проведено 340 мероприятий, 187 круглых столов ...</p>
						<a href="">Подробнее</a>
					</div>
					<div class="tabs__content">
						<img src="img/achievements-2.jpg" class="img m-b-20">
						<p class="m-b-20">Более сотни студентов со всей России из Москвы, Санкт-Петербурга, Калининграда, Орла, Курска, Воронежа, Оренбурга, Липецка, Ростова, Севастополя, Старого Оскола, Казани, Екатеринбурга и Донецка приняли участие в проектно-образовательном интенсиве «Школа Шухова 2.0», который проводит БГТУ им. В.Г. Шухова ...</p>
						<a href="">Подробнее</a>
					</div>
					<div class="tabs__content">
						<img src="img/achievements-3.jpg" class="img m-b-20">
						<p class="m-b-20">15 июня 2022 года в Москве состоялся VI Российский нефтегазовый IT-Саммит «Интеллектуальное месторождение», который прошёл при поддержке Министерства цифрового развития, связи и массовых коммуникаций РФ, Министерства энергетики РФ, Российского Газового Общества ...</p>
						<a href="">Подробнее</a>
					</div>
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
			<div class="text-right"><a href="">Все мероприятия</a></div>
		</div>
		<div class="v-scroll">
			<div class="grid col4-2-1 gap10 news-list calendar">
				<a href="">
					<p>
						<font>25.10.2022</font>
						<span><span class="material-icons">school</span> Курс №7 / 5.0</span>Тема 7: Работа с формой Конъюнктурный анализ
					</p>
				</a>
				<a href="">
					<p>
						<font>29.11.2022</font>
						<span><span class="material-icons">cast</span> Вебинар №8 / 5.0</span>Тема 8: Формы Объектная смета, Сводный сметный расчет и Сводка затрат
					</p>
				</a>
				<a href="">
					<p>
						<font>27.12.2022</font>
						<span><span class="material-icons">cast_for_education</span> Онлайн-видеоурок №9 / 5.0</span>Тема 9: Формы отчетности: КС-3, Журнал учета выполненных работ
					</p>
				</a>
				<a href="">
					<p>
						<font>31.01.2023</font>
						<span><span class="material-icons">rocket_launch</span> Интенсив №10 / 5.0</span>Тема 10: Формы отчетности: М29, Ресурсная ведомость, Ведомость объемов работ
					</p>
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
<section>
	<div>
		<div class="grid col2-2">
			<div>
				<h2>
					Новости</a>
			</div>
			<div class="text-right"><a href="">Все новости</a></div>
		</div>
		<div class="v-scroll m-b-50">
			<div class="grid col3-1 gap10 news-list news">
				<a href="">
					<img src="img/logo-w-red.svg" />
					<p>
						<font>24.10.2022</font>
						Еженедельный бюллетень «Ассистент строителя» № 4 (522) за октябрь 2022 года
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


		<h2>Партнеры</h2>
		<div class="grid col6-3-2 gap10 partners-list">
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

				<img src="<?php echo get_the_post_thumbnail_url(); ?>" />

			<?php

				// формат вывода the_title() ...
			}

			wp_reset_postdata(); // сброс

			?>

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