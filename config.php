<?php
/*
|--------------------------------------------------------
| Turning ON/OFF debug mode (for maintenance mode)
|--------------------------------------------------------
|
*/
define('DEBUG_MODE', FALSE);
/*
|--------------------------------------------------------
| Default language
|--------------------------------------------------------
|
*/
define('DEFAULT_LANG','english');
/*
|--------------------------------------------------------
| Default language
|--------------------------------------------------------
|
*/
define('DEFAULT_TIMEZONE','UTC');
/*
|--------------------------------------------------------
| The uploads folder name
|--------------------------------------------------------
|
*/
define('UPLOADS_FOLDER','files');
/*
|--------------------------------------------------------
| Maximum upload file size. This size is per files in KB (Media library)
| 1000 = 1MB
|--------------------------------------------------------
|
*/
define('UPLOADS_MAX_SIZE_IMAGE','1000');
define('UPLOADS_MAX_SIZE_VIDEO','30000');
/*
|--------------------------------------------------------
| Cookie name
|--------------------------------------------------------
|
*/
define('COOKIE_NAME','kp_6671a06029d6f');
/*
|---------------------------------------------------------
| App settings
|---------------------------------------------------------
*/
Define('DB_HOST',	'localhost');
define('BD_DRIVER',	'mysql');
Define('DB_NAME',	'kingposter');
Define('DB_USER',	'root');
Define('DB_PASS',	'password');
/*
|---------------------------------------------------------
| App URL must be difened
|---------------------------------------------------------
*/
Define('BASE_URL',	'http://localhost/kingposter/');
/*
|---------------------------------------------------------
| Index File
|---------------------------------------------------------
*/
Define('INDEX_PAGE', '');
/*
|---------------------------------------------------------
| App folder to store temporary files
|---------------------------------------------------------
*/
Define('TMP_PATH',	sys_get_temp_dir());
/*
|---------------------------------------------------------
| Mail settings
|---------------------------------------------------------
*/
Define('MAIL_PROTOCOL','mail');  // mail|smtp
Define('SMTP_HOST','');
Define('SMTP_USER','');
Define('SMTP_PASS','');
Define('SMTP_PORT', 465);
Define('SMTP_CRYPTO',''); // tls|ssl
/*
|---------------------------------------------------------
| App token used in some places for security
|---------------------------------------------------------
*/
Define('APP_TOKEN', '112f620fc8f34c690a6382793a8a51ee');
/*
|---------------------------------------------------------
| Sys installed
|---------------------------------------------------------
*/
Define('SYS_INSTALLED',	TRUE);
/*
|---------------------------------------------------------
| Date that will be injected on each post status position
|---------------------------------------------------------
*/
Define('FB_PDP_POSITTION', 'bottom');
/*
|---------------------------------------------------------
| Send images as data instead of sending image URL
|---------------------------------------------------------
*/
Define('FB_SEND_IMAGE_AS_MP', TRUE);
/*
|---------------------------------------------------------
| Using file_get_contens Instead of CURL
|---------------------------------------------------------
*/
Define('USE_GET_FILE_CONTENTS', TRUE);
/*
|---------------------------------------------------------
| Using multi Thread to send posts
|---------------------------------------------------------
*/
Define('USE_MULTI_THREAD', FALSE);
/*
|---------------------------------------------------------
| Unique post format (1 = Random string, 2 = Current Date time, 3 - Mixte of 1 - 2)
|---------------------------------------------------------
*/
Define('UNIQUE_POST_FORMAT', 1);
/*
|  Display less data
*/
define('LESS_DATA_ON_DATATABLE', FALSE);
/*
|  Wither to Use Datatable plugin or not, if not sample table filter will be used instead and no pagination
*/
define('USE_DT_PLUGIN', TRUE);
?>