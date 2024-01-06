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
define( 'DB_NAME', 'my-site-03-01-24' );
/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );
/** Пароль к базе данных */
define( 'DB_PASSWORD', '/9uR+V&=:3Uqh#4CS$+3x}89' );
/** Имя сервера базы данных */
define( 'DB_HOST', 'my-site-03-01-24.loc' );
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
define( 'AUTH_KEY',         '}i4XbS9dVR$k<Ks!r_</g7i:LK6:mg-/i?[c/)vN17OnVsB>6 .,C},y{TbQ$+cp' );
define( 'SECURE_AUTH_KEY',  '&%Ce*H>a+``zYVGTXsjGvY85=$rK135Tcswz.*<{f*F6sYJSz?}l!`!P%>fO{bA_' );
define( 'LOGGED_IN_KEY',    '>IMy0Yz|E~1~U2Y82!]xANb*uJCCHzCRR;+wTYcQe+HXfHzN@:J/f?96R~%)vT_a' );
define( 'NONCE_KEY',        '%{U5J5(~{^/]:V`K,V,&_B3)jRSgYIV>*~`]8Ns{(/w>*5s:e@IvU-{4>+[{8%n3' );
define( 'AUTH_SALT',        'E/n=QhsJW}##,wjt;!7-3@Kt4w!NQA4Q$`#%0F^Tf+ |I;]y( m+rt3]i$c/VPpk' );
define( 'SECURE_AUTH_SALT', 'N,)^JiC(q 9YCP*siK.*yZo}pq//kY1;~A.2ZZuX*|>?J4Tf2k JAM^(?We+-[H[' );
define( 'LOGGED_IN_SALT',   '^XqV&z%Pw;!QoEJisZ7AQ4t{3l!z,Z3^c(hk]->~i`]=pD)Co;*AWZw/j(VU;}hl' );
define( 'NONCE_SALT',       '<&L]!nF SJ]gG[HBd2&##faE!cW(g}beKA*)luh,(% +&x2/PhI.y(ng4csONo6`' );
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
