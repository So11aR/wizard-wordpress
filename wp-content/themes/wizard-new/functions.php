<?php

/**
 * Enqueues script with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string      $handle    Name of the script. Should be unique.
 * @param string|bool $src       Path to the script from the theme directory of WordPress. Example: '/js/myscript.js'.
 * @param array       $deps      Optional. An array of registered script handles this script depends on. Default empty array.
 * @param bool        $in_footer Optional. Whether to enqueue the script before </body> instead of in the <head>.
 *                               Default 'false'.
 */
function enqueue_versioned_script($handle, $src = false, $deps = array(), $in_footer = false)
{
    wp_enqueue_script($handle, get_stylesheet_directory_uri() . $src, $deps, filemtime(get_stylesheet_directory() . $src), $in_footer);
}

/**
 * Enqueues stylesheet with WordPress and adds version number that is a timestamp of the file modified date.
 *
 * @param string      $handle Name of the stylesheet. Should be unique.
 * @param string|bool $src    Path to the stylesheet from the theme directory of WordPress. Example: '/css/mystyle.css'.
 * @param array       $deps   Optional. An array of registered stylesheet handles this stylesheet depends on. Default empty array.
 * @param string      $media  Optional. The media for which this stylesheet has been defined.
 *                            Default 'all'. Accepts media types like 'all', 'print' and 'screen', or media queries like
 *                            '(orientation: portrait)' and '(max-width: 640px)'.
 */
function enqueue_versioned_style($handle, $src = false, $deps = array(), $media = 'all')
{
    wp_enqueue_style($handle, get_stylesheet_directory_uri() . $src, $deps = array(), filemtime(get_stylesheet_directory() . $src), $media);
}



function wizardsoft_assets()
{

    enqueue_versioned_style('myforms', '/assets/css/forms.css');
    enqueue_versioned_style('tabs', '/assets/css/tabs.css');
    enqueue_versioned_style('window', '/assets/css/window.css');
    enqueue_versioned_style('carousel', '/assets/css/carousel.css');
    enqueue_versioned_style('style', '/assets/css/style.css');

    enqueue_versioned_script('nav-script', '/assets/scripts/nav.js', array('jquery'), true);
    enqueue_versioned_script('nav-mobile-script', '/assets/scripts/nav-mobile.js', array('jquery'), true);
    enqueue_versioned_script('tabs', '/assets/scripts/tabs.js', array('jquery'), true);
    enqueue_versioned_script('window-script', '/assets/scripts/window.js', array('jquery'), true);
    enqueue_versioned_script('carousel', '/assets/scripts/carousel.js', array('jquery'), true);
    enqueue_versioned_script('swiper-slider', '/assets/scripts/swiper-slider.js', array('jquery'), true);
    enqueue_versioned_script('sergey', '/assets/scripts/sergey.js', array('jquery'), true);

    // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/scripts/jquery-3.6.1.min.js', array(), '20151215', true );

}



add_action('wp_footer', 'program_products');


add_action('wp_enqueue_scripts', 'wizardsoft_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('portfolio'));

add_theme_support('menus');


class desktop_menu extends Walker_Nav_Menu
{
    /*
       * Позволяет перезаписать <ul class="sub-menu">
       */
    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        $output .= '<ul class="menu_sublist"><div class="element-wrapper">';
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
    {
        // для WordPress 5.3+
        // function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;
        /*
             * Некоторые из параметров объекта $item
             * ID - ID самого элемента меню, а не объекта на который он ссылается
             * menu_item_parent - ID родительского элемента меню
             * classes - массив классов элемента меню
             * post_date - дата добавления
             * post_modified - дата последнего изменения
             * post_author - ID пользователя, добавившего этот элемент меню
             * title - заголовок элемента меню
             * url - ссылка
             * attr_title - HTML-атрибут title ссылки
             * xfn - атрибут rel
             * target - атрибут target
             * current - равен 1, если является текущим элементом
             * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
             * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
             * menu_order - порядок в меню
             * object_id - ID объекта меню
             * type - тип объекта меню (таксономия, пост, произвольно)
             * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
             * type_label - название данного типа с локализацией (Рубрика, Страница)
             * post_parent - ID родительского поста / категории
             * post_title - заголовок, который был у поста, когда он был добавлен в меню
             * post_name - ярлык, который был у поста при его добавлении в меню
             */
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        /*
             * Генерируем строку с CSS-классами элемента меню
             */
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        /*
             * Генерируем ID элемента
             */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        /*
             * Генерируем элемент меню
             */
        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

class mobile_menu extends Walker_Nav_Menu
{
    /*
       * Позволяет перезаписать <ul class="sub-menu">
       */
    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        $output .= '<ul class="menu_sublist mobi_sublist">';
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
    {
        // для WordPress 5.3+
        // function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;
        /*
             * Некоторые из параметров объекта $item
             * ID - ID самого элемента меню, а не объекта на который он ссылается
             * menu_item_parent - ID родительского элемента меню
             * classes - массив классов элемента меню
             * post_date - дата добавления
             * post_modified - дата последнего изменения
             * post_author - ID пользователя, добавившего этот элемент меню
             * title - заголовок элемента меню
             * url - ссылка
             * attr_title - HTML-атрибут title ссылки
             * xfn - атрибут rel
             * target - атрибут target
             * current - равен 1, если является текущим элементом
             * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
             * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
             * menu_order - порядок в меню
             * object_id - ID объекта меню
             * type - тип объекта меню (таксономия, пост, произвольно)
             * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
             * type_label - название данного типа с локализацией (Рубрика, Страница)
             * post_parent - ID родительского поста / категории
             * post_title - заголовок, который был у поста, когда он был добавлен в меню
             * post_name - ярлык, который был у поста при его добавлении в меню
             */
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        /*
             * Генерируем строку с CSS-классами элемента меню
             */
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        /*
             * Генерируем ID элемента
             */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        /*
             * Генерируем элемент меню
             */
        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

class footer_menu extends Walker_Nav_Menu
{
    /*
       * Позволяет перезаписать <ul class="sub-menu">
       */
    function start_lvl(&$output, $depth = 0, $args = NULL)
    {
        $output .= '<ul class="footer-mobile">';
    }

    /**
     * @see Walker::start_el()
     * @since 3.0.0
     *
     * @param string $output
     * @param object $item Объект элемента меню, подробнее ниже.
     * @param int $depth Уровень вложенности элемента меню.
     * @param object $args Параметры функции wp_nav_menu
     */
    function start_el(&$output, $item, $depth = 0, $args = NULL, $id = 0)
    {
        // для WordPress 5.3+
        // function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 ) {
        global $wp_query;
        /*
             * Некоторые из параметров объекта $item
             * ID - ID самого элемента меню, а не объекта на который он ссылается
             * menu_item_parent - ID родительского элемента меню
             * classes - массив классов элемента меню
             * post_date - дата добавления
             * post_modified - дата последнего изменения
             * post_author - ID пользователя, добавившего этот элемент меню
             * title - заголовок элемента меню
             * url - ссылка
             * attr_title - HTML-атрибут title ссылки
             * xfn - атрибут rel
             * target - атрибут target
             * current - равен 1, если является текущим элементом
             * current_item_ancestor - равен 1, если текущим (открытым на сайте) является вложенный элемент данного
             * current_item_parent - равен 1, если текущим (открытым на сайте) является родительский элемент данного
             * menu_order - порядок в меню
             * object_id - ID объекта меню
             * type - тип объекта меню (таксономия, пост, произвольно)
             * object - какая это таксономия / какой тип поста (page /category / post_tag и т д)
             * type_label - название данного типа с локализацией (Рубрика, Страница)
             * post_parent - ID родительского поста / категории
             * post_title - заголовок, который был у поста, когда он был добавлен в меню
             * post_name - ярлык, который был у поста при его добавлении в меню
             */
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        /*
             * Генерируем строку с CSS-классами элемента меню
             */
        $class_names = $value = '';
        $classes = empty($item->classes) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // функция join превращает массив в строку
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args));
        $class_names = ' class="' . esc_attr($class_names) . '"';

        /*
             * Генерируем ID элемента
             */
        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args);
        $id = strlen($id) ? ' id="' . esc_attr($id) . '"' : '';

        /*
             * Генерируем элемент меню
             */
        $output .= $indent . '<li' . $id . $value . $class_names . '>';

        // атрибуты элемента, title="", rel="", target="" и href=""
        $attributes  = !empty($item->attr_title) ? ' title="'  . esc_attr($item->attr_title) . '"' : '';
        $attributes .= !empty($item->target)     ? ' target="' . esc_attr($item->target) . '"' : '';
        $attributes .= !empty($item->xfn)        ? ' rel="'    . esc_attr($item->xfn) . '"' : '';
        $attributes .= !empty($item->url)        ? ' href="'   . esc_attr($item->url) . '"' : '';

        // ссылка и околоссылочный текст
        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . apply_filters('the_title', $item->title, $item->ID) . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
    }
}

function true_breadcrumbs()
{

    // получаем номер текущей страницы
    $page_num = (get_query_var('paged')) ? get_query_var('paged') : 1;

    $separator = '  '; //  разделяем обычным слэшем, но можете чем угодно другим

    // если главная страница сайта
    if (is_front_page()) {

        if ($page_num > 1) {
            echo '<a href="' . site_url() . '">Главная</a>' . $separator . $page_num . '-я страница';
        } else {
            echo 'Вы находитесь на главной странице';
        }
    } else { // не главная

        echo '<a href="' . site_url() . '">Главная</a>' . $separator;


        if (is_single()) { // записи

            the_category(' ');
            echo $separator;
            // the_title();
        } elseif (is_page()) { // страницы WordPress
            global $post;
            // если у текущей страницы существует родительская
            if ($post->post_parent) {

                $parent_id  = $post->post_parent; // присвоим в переменную
                $breadcrumbs = array();

                while ($parent_id) {
                    $page = get_page($parent_id);
                    $breadcrumbs[] = '<a href="' . get_permalink($page->ID) . '">' . get_the_title($page->ID) . '</a>';
                    $parent_id = $page->post_parent;
                }

                echo join($separator, array_reverse($breadcrumbs)) . $separator;
            }
            // the_title();
        } elseif (is_category()) {

            single_cat_title();
        } elseif (is_tag()) {

            single_tag_title();
        } elseif (is_day()) { // архивы (по дням)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo '<a href="' . get_month_link(get_the_time('Y'), get_the_time('m')) . '">' . get_the_time('F') . '</a>' . $separator;
            echo get_the_time('d');
        } elseif (is_month()) { // архивы (по месяцам)

            echo '<a href="' . get_year_link(get_the_time('Y')) . '">' . get_the_time('Y') . '</a>' . $separator;
            echo get_the_time('F');
        } elseif (is_year()) { // архивы (по годам)

            echo get_the_time('Y');
        } elseif (is_author()) { // архивы по авторам

            global $author;
            $userdata = get_userdata($author);
            echo 'Опубликовал(а) ' . $userdata->display_name;
        } elseif (is_404()) { // если страницы не существует

            echo 'Ошибка 404';
        }

        if ($page_num > 1) { // номер текущей страницы
            echo ' (' . $page_num . '-я страница)';
        }
    }
}


//AJAX постраничная подгрузка постов для новостей(после смены года)
function true_load_posts(){
 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
	$newsArgs = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'paged' => $paged,
		'year' => $_POST['year'],
    );
	$newsAll = get_posts($newsArgs);
	query_posts($newsArgs);

	if (!empty($newsAll)) {
		foreach ($newsAll as $news) {
			$newsUrl = get_permalink($news->ID);
			$newsImg = get_the_post_thumbnail( $news->ID, [106, 60]);
			$newsTitle = $news->post_title;
			$newsDate = date_i18n('d.m.Y', strtotime($news->post_date));

			echo '<a href="' . $newsUrl . '">';
				echo $newsImg;
				echo '<p>';
					echo '<font>' . $newsDate . '</font>';
					echo $newsTitle;
				echo '</p>';
			echo '</a>';
		}

		$pagination = paginate_links( array(
			'base' => get_pagenum_link(1) . '%_%',
			'format' => 'page/%#%',
			'type' => 'array', //instead of 'list'
		//	'total' => $wp_query->max_num_pages,
			'current' => $paged,
			'show_all'    			=> false,
			'end_size'    			=> 1,
			'mid_size'    			=> 2,
			'prev_next'    			=> false,
			'prev_text'   			=> __('«'),
			'next_text'    			=> __('»'),
			'add_args'    			=> false,
			'add_fragment' 			=> '',
			'before_page_number'	=> '',
			'after_page_number' 	=> ''
		));
		if ( ! empty( $pagination ) ) {
			echo '<div class="pagination-list">';
			foreach ( $pagination as $key => $page_link ) {
				if ( strpos( $page_link, 'current' ) !== false ) {
					$activeClass = ' active';
					echo '<p class="paginated_link active">' . $page_link . '</p>';
				} else {
					echo '<p class="paginated_link">' . $page_link . '</p>';
				}
			}
			echo '</div>';
		}
	}
	
	die();
}

add_action('wp_ajax_loadmore', 'true_load_posts');
add_action('wp_ajax_nopriv_loadmore', 'true_load_posts');

//AJAX постраничная подгрузка постов для новостей(после смены года + нажатие на страницу пагинации)
function news_load_posts(){
 
	$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : $_POST['page'];
	$newsArgs = array(
        'post_type' => 'post',
		'post_status' => 'publish',
		'posts_per_page' => 3,
		'paged' => $paged,
		'year' => $_POST['year'],
    );
	$newsAll = get_posts($newsArgs);
	query_posts($newsArgs);

	if (!empty($newsAll)) {
		foreach ($newsAll as $news) {
			$newsUrl = get_permalink($news->ID);
			$newsImg = get_the_post_thumbnail( $news->ID, [106, 60]);
			$newsTitle = $news->post_title;
			$newsDate = date_i18n('d.m.Y', strtotime($news->post_date));

			echo '<a href="' . $newsUrl . '">';
				echo $newsImg;
				echo '<p>';
					echo '<font>' . $newsDate . '</font>';
					echo $newsTitle;
				echo '</p>';
			echo '</a>';
		}
global $wp_query;
$pagination = paginate_links( array(
//	'base' => get_pagenum_link(1) . '%_%',
//	'format' => 'page/%#%',
	'type' => 'array', //instead of 'list'
	'total' => $wp_query->max_num_pages,
	'current' => $paged,
	'show_all'    			=> false,
	'end_size'    			=> 1,
	'mid_size'    			=> 2,
	'prev_next'    			=> false,
	'prev_text'   			=> __('«'),
	'next_text'    			=> __('»'),
	'add_args'    			=> false,
	'add_fragment' 			=> '',
	'before_page_number'	=> '',
	'after_page_number' 	=> ''
	));
	if ( ! empty( $pagination ) ) {
		echo '<div class="pagination-list">';
		foreach ( $pagination as $key => $page_link ) {
			if ( strpos( $page_link, 'current' ) !== false ) {
				$activeClass = ' active';
				echo '<p class="paginated_link active">' . $page_link . '</p>';
			} else {
				echo '<p class="paginated_link">' . $page_link . '</p>';
			}
		}
		echo '<script>	$(".page-numbers:not(.prev):not(.next)").click(function(e){
		let currentYear = $(".select-news-year").val(),
			currentPage = Number($(this).text()),
			data = {
				"action": "loadmoreYear",
				"page" : currentPage,
				"year" : currentYear,
			};
		$.ajax({
            url:"/wp-admin/admin-ajax.php", // обработчик
			data:data, // данные
			type:"POST", // тип запроса
			beforeSend:function(data){
				$(".news-list a").remove();
				$(".pagination").remove();
				$(".pagination-list").remove();
			},
			success:function(data){
				$(data).prependTo(".news-list");
			}
		});
		e.preventDefault();
	});</script>';
		echo '</div>';
		
	}
	}
	
	die();
}

add_action('wp_ajax_loadmoreYear', 'news_load_posts');
add_action('wp_ajax_nopriv_loadmoreYear', 'news_load_posts');