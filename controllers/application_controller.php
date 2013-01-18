<?php

# site specific values

$site_name = 'Atolle';
$site_root = 'http://www.atolle.com';
$site_keywords = array($site_name, $site_root);
$site_author = 'sbierti';

$scrpt = explode('.', $_SERVER['SCRIPT_NAME']);
$pageName = $scrpt[0];

# it18n variables
$lang = 'it'; #default value

$qstr = explode('=', $_SERVER['QUERY_STRING']);

if($qstr[1]=='it'||$qstr[1]=='fr'||$qstr[1]=='en'||$qstr[1]=='es'||$qstr[1]=='ru'){
	$lang = $qstr[1];
}
                
include 'languages/'.$lang.'/lang.php';

?>