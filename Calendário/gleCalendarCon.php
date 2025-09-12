<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'eventos');


define('GOOGLE_CLIENT_ID', '53728534665-97u58bqrn6i78uum85mc1p3034o3493a.apps.googleusercontent.com');
define('GOOGLE_CLIENT_SECRET', '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');
define('GOOGLE_OAUTH_SCOPE', 'https://www.googleapis.com/auth/calendar');
define('GOOGLE_REDIRECT_URI', 'http://localhost/PI---SENAC\Calendário\calendarioDinamico.php');

$googleOauthURL = 'https://accounts.google.com/o/oauth2/auth?scope='.urlencode(GOOGLE_OAUTH_SCOPE).'&redirect_uri='.REDIRECT_URI.'&response_type=code&client_id='.GOOGLE_CLIENT_ID.'&access_type=online';

if(session_id()) session_start();

?>