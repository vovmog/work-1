<?php
/**
 * Основные параметры WordPress.
 *
 * Этот файл содержит следующие параметры: настройки MySQL, префикс таблиц,
 * секретные ключи и ABSPATH. Дополнительную информацию можно найти на странице
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Кодекса. Настройки MySQL можно узнать у хостинг-провайдера.
 *
 * Этот файл используется скриптом для создания wp-config.php в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать этот файл
 * с именем "wp-config.php" и заполнить значения вручную.
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'work-1');

/** Имя пользователя MySQL */
define('DB_USER', 'mysql');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', 'mysql');

/** Имя сервера MySQL */
define('DB_HOST', 'work-1');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')|<LqUv/7HBpT?d GE{4]r6BF  I:|C$;kaUAMA0j7)EQ$KFWK~%Lgt6+$[(xw$[');
define('SECURE_AUTH_KEY',  '<)T*ySoHnR;L%84HM=i0$vgSM*!ApyFj7^>QPcD+%XE|g({y2r.|)!nta4QN6gZH');
define('LOGGED_IN_KEY',    ' FULE:s$X{jG Nni&x0L.fDrM)*o#T7tmT<A}LsJ/d}.VGgRpEa[Z<NA4[*>Cg3m');
define('NONCE_KEY',        'eLbsY2cOjJ|3)t:I%-L}KZ rLr5.^n{mq[fRUdOrnEWM&kDL`vfbtr9)t+qqDS{g');
define('AUTH_SALT',        '|7CYHJK qi]ZIJj;VBP560sLeTArw$`k@j!j2kmeqnS|zQ`A d<a,(y?tS9>I:cK');
define('SECURE_AUTH_SALT', ';tr_Hjb|ofkU:| $)FTM@fJB)_|Zw8K*gVQL!:I[$/!lkb<_x/8$@=)R. 5`|oP?');
define('LOGGED_IN_SALT',   '~^yz[OFQ`YIm~.<]B<@U%t{G8iD!=FApLbG^OzM~Pj.)iUrk).fv,fT]Uw]yF C+');
define('NONCE_SALT',       '-nk80voqE/3?4B*v8fIGfndsHJqV67]j?_]xt3:?a:#T=sD+=%3NH>MLl @AheQ=');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'work1_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
