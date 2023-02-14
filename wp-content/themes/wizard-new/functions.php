<?php


function wizardsoft_assets()
{

  wp_enqueue_style('formscss', get_template_directory_uri() . '/assets/css/forms.css');
  wp_enqueue_style('tabscss', get_template_directory_uri() . '/assets/css/tabs.css');
  wp_enqueue_style('windowcss', get_template_directory_uri() . '/assets/css/window.css');
  wp_enqueue_style('carouselcss', get_template_directory_uri() . '/assets/css/carousel.css');
  wp_enqueue_style('maincss', get_template_directory_uri() . '/assets/css/style.css');

  // wp_enqueue_script( 'jquery', get_template_directory_uri() . '/assets/scripts/jquery-3.6.1.min.js', array(), '20151215', true );
  wp_enqueue_script('nav-script', get_template_directory_uri() . '/assets/scripts/nav.js', array(), '20151215', true);
  wp_enqueue_script('nav-mobile-script', get_template_directory_uri() . '/assets/scripts/nav-mobile.js', array(), '20151215', true);
  wp_enqueue_script('tabs', get_template_directory_uri() . '/assets/scripts/tabs.js', array(), '20151215', true);
  wp_enqueue_script('window-script', get_template_directory_uri() . '/assets/scripts/window.js', array(), '20151215', true);
  wp_enqueue_script('carousel', get_template_directory_uri() . '/assets/scripts/carousel.js', array(), '20151215', true);
  wp_enqueue_script('swiper-slider', get_template_directory_uri() . '/assets/scripts/swiper-slider.js', array(), '20151215', true);
  wp_enqueue_script('sergey', get_template_directory_uri() . '/assets/scripts/sergey.js', array(), '20151215', true);
}

function program_products()
{
  if (is_page('280')) {
?>
    <script type="text/javascript">
      document.addEventListener("DOMContentLoaded", function(event) {
        let programms = document.querySelectorAll(".programmProductsElem");

        programms[0].classList.add('smeta')
        programms[1].classList.add('plan')
        programms[2].classList.add('bim')
      });
    </script>
<?php
  }
}



add_action('wp_footer', 'program_products');


add_action('wp_enqueue_scripts', 'wizardsoft_assets');

show_admin_bar(false);

add_theme_support('post-thumbnails');

add_theme_support('post-thumbnails', array('portfolio'));

add_theme_support('menus');


class desktop_menu extends Walker_Nav_Menu {
  /*
	 * Позволяет перезаписать <ul class="sub-menu">
	 */
  function start_lvl( &$output, $depth = 0, $args = NULL ) {
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
  function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 )
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

class mobile_menu extends Walker_Nav_Menu {
  /*
	 * Позволяет перезаписать <ul class="sub-menu">
	 */
  function start_lvl( &$output, $depth = 0, $args = NULL ) {
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
  function start_el( &$output, $item, $depth = 0, $args = NULL, $id = 0 )
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