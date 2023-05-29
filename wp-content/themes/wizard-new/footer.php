<footer>
	<div>
		<div class="grid footer-menu m-b-30">
            <?php
            wp_nav_menu([
                'theme_location'  => '',
                'menu'            => 'footer-menu',
                'container'       => 'false',
                'container_class' => '',
                'container_id'    => '',
                'menu_class'      => 'nav-menus',
                'menu_id'         => '',
                'echo'            => true,
                'fallback_cb'     => 'wp_page_menu',
                'before'          => '',
                'after'           => '',
                'link_before'     => '',
                'link_after'      => '',
                'items_wrap'      => '%3$s',
                'depth'           => 0,
                'walker'          => new footer_menu
            ]);

            ?>

            <li class="soc-icons__wrapper">
                <a href="/">Соцсети</a>
                <div class="footer-mobile">
                    <div class="grid col3-3 gap10">
                        <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/vk.svg" /></a>
                        <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/youtube.svg" /></a>
                        <a href="/"><img src="<?php echo get_template_directory_uri() ?>/assets/img/ok.svg" /></a>
                    </div>
                </div>
            </li>
		</div>


		<div class="m-b-40">
			<p><a href="">Контакты</a></p>
			<div class="footer-mobile">
				<div class="grid footer-contacts">
					<div>
						Санкт-Петербург<br />
						+7 (812) 655-63-23<br />
						info@wizardsoft.ru<br />
						<small>
							198303, Россия,<br />
							г. Санкт-Петербург,<br />
							ул. Возрождения, д. 20а
						</small>
					</div>
					<div>
						<a href="">Москва</a>
						+7 (495) 585-14-12<br />
						msk@wizardsoft.ru
					</div>
					<div>
						<a href="">Ростов-на-Дону</a>
						+7 (863) 221-31-23<br />
						+7 (863) 221-63-50<br />
						161@wizardsoft.ru
					</div>
					<div>
						<a href="">Республика Крым Севастополь</a>
						+7 (365) 267-13-18<br />
						bmd@wizardsoft.ru
					</div>
					<div>
						Регионы<br />
						+7 (812) 655-63-25<br />
						+7 (904) 554-79-97<br />
						info@wizardsoft.ru
					</div>
				</div>
			</div>
		</div>
		<div class="grid footer-rights">
			<div>
				<a href="index.htm"><img src="https://www.design-spb.ru/tmp/2022/wizard-site1/img/logo-text-gray.svg" /></a>
			</div>
			<div>
				© 1993–2022 ЗАО «ВИЗАРДСОФТ» — комплексная автоматизация управления затратами в строительствеВсе материалы сайта являются собственностью проекта ЗАО «ВИЗАРДСОФТ».
				По вопросам копирования и использования информации пишите на электронную почту info@wizardsoft.ru
			</div>
			<div>
				<a href="">Карта сайта</a>
				<a href="">Политика конфиденциальности</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>

</body>
</html>