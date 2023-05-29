<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wizardsoft-site' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost:8888' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U*s042izXL]I,@s9Gk1OTt[Y|x]>LFj5_ukE.k>OC+-|3KnVXAH5DH+]Z#]IKcC@');
define('SECURE_AUTH_KEY',  '+0l|Tx,kbg5kjPuR;iY~mzi82RxC+Ii+?E0vV}5YL?uAEy%&rIAyNO@2c__87|:J');
define('LOGGED_IN_KEY',    'cmuVin~O)@}[;;k-xOpYAlI4Y>+Z?S{-+J<aPFP<D*;C-}-8Pp{=Cb%-fIg_=J/r');
define('NONCE_KEY',        '#<Z+^f;Ooj8#|@lSFkD-|b.!<jMP^`L=S,xltY)`b}f}9+[h}q+$+5@H>RPW4IH ');
define('AUTH_SALT',        '_bqYM|Xe/Bdl0*vY64]M?kK#J.bvt|,V4|~F=G-RLlE-^+{sfv}{3=}c|vFV0 qO');
define('SECURE_AUTH_SALT', 'v|n<-E =+tnHwI-Th`h<g;0Zz)xM~*NWB{:G~QyLN8nv3$U-kCj%6G.ECm!:Ls}2');
define('LOGGED_IN_SALT',   'EW1+sf12!#X,d3+hkB&up%0d(KW?Qs9}b.{{;.|B3`=#JYDZc$NDlx97-la1V?zO');
define('NONCE_SALT',       '|3i#O,-6$3-?_7s;[/_3akIj!_jlry#NT=][}hw+6&TdP)=7|n>1+D(L4-`qXo~H');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
