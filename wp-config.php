<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'ubk-mebel');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '1234');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' @5fK*Xu~}Q55T3Z0?:ro$O;Mk0iqJf#5@FZs`;sC;igS=;MRFW=b*Wf8@0C_2:p');
define('SECURE_AUTH_KEY',  'K +MKyD?j0sWaC@22sUb`#PguQMpGfyB]$j3`;[CLh(%JX4Pp:$%$GxNJAb_6a15');
define('LOGGED_IN_KEY',    'lv8C4IXx-LtL>K%?5/_WI`tIzy(Ne [S(Zrpt%fR^vT,bo4HjeXAW!YH1xEr)}3a');
define('NONCE_KEY',        'r|A:;r;]N,1l(~RzzApPdCCB:<7j_rXDTD}1kc6ls}@mhI!]0,#i-D&qLRa(EfiB');
define('AUTH_SALT',        '56EU}=*czjCS?uUD0VPmU4-Q0nC?Q;Uo,e+LXBd+$`E;MbizD%/=sx->duq<Db|2');
define('SECURE_AUTH_SALT', ')a<96[e:hA#( WOOACLChaYQh$-7]]=F[G0AJaM+CF/2I;x,8Yj:/>ffxstgAe]A');
define('LOGGED_IN_SALT',   'TA4k%l$D]!Cu`%GT kycbKYVDsPUJpe:.kJsX[sH;@WR`}_j4W;FPZCXIy,]=_EM');
define('NONCE_SALT',       'wc%9)yE|(=g()d]v41Bem68,:~L; H_uQ;H<r}ea98`VJk/OXAs=F8XWOuSDlVc>');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'ubkm_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
