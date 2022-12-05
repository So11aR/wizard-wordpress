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
define( 'DB_NAME', 'wizardsoft_test' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '81,T+Rpa7uGf9|rm7YjIdR-AMpFz[bVuCvt,& I +VDD.69:~/,hpeX}bpOnsc0>' );
define( 'SECURE_AUTH_KEY',  '/(k$QC^C+DACV#Wz+A`1t7A.>gTc90^P,/TpX2<X3<vo+4{>aHln??K&xa.ow&q ' );
define( 'LOGGED_IN_KEY',    'i`V4-u)Yu>D 3Lqf^pyn>$AjB/sFi1tVGWv/ETFO#CN5-:v#Et2[AyxnFX_2@==I' );
define( 'NONCE_KEY',        'z*gbO7FK#kH|a$Nm7}R,s=!#I,k)P1;f*Cb<Rig!p7`-%w%6aHy!_v_aa(N6-;@c' );
define( 'AUTH_SALT',        ')6>HmhuBvqoeeO:V%SIDefFU.&&Eac1G9^0TiYqg&5W`JbCcXBI,wOKfPKMkJ@)F' );
define( 'SECURE_AUTH_SALT', 'M+A-=BJ}9ClN@-{[kIk9JL/c:{Em#gF6x3! I$N&)]Cl+If;VCi]otqKHqXJ,f/T' );
define( 'LOGGED_IN_SALT',   '&Ep92r&:!>!T~C9*yK@*e$ .f#=s@Wd]J3N)D-0MR}^]W/!jH,,P%d3B);GAuMfV' );
define( 'NONCE_SALT',       'gc0)o5g&?-EKALl4_u<]O#!X`6[9^3$3%RaL vxCd|1;L9kRg&Owe_TO~-`pUC3&' );

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
