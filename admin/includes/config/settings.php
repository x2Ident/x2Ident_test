<?php
global $lang, $txt, $k, $pathTeampas, $urlTeampass, $pwComplexity, $mngPages;
global $server, $user, $pass, $database, $pre, $db, $port, $encoding;

### DATABASE connexion parameters ###
$server = "localhost";
$user = "teampass_xi_test";
$pass = "jugendhackt";
$database = "teampass_xi_test";
$pre = "teampass_";
$port = 3306;
$encoding = "utf8";

@date_default_timezone_set($_SESSION['settings']['timezone']);
@define('SECUREPATH', '/var/www/html/x2Ident/test/admin/includes');
require_once "/var/www/html/x2Ident/test/admin/includes/sk.php";
?>