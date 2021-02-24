<?php
error_reporting(0);
header("content-type: application/json; charset=UTF-8");
$api = "https://api.ineo-team.ir"; // Don't change it.
$parameters = http_build_query(array(
	'action' => "createapp", // Don't change it.
	'auth' => "@YOUR-ACCESS-KEY", // Replace your HTTP-ACCESS-KEY.
	'phone' => "YOUR-PHONE-NUMBER", // Replace your phone number. [ex: 989012345678]
	'title' => "APPLICATION-TITLE", // Replace your application name.
	'shortName' => "APPLICATION-SHORT-NAME", // Replace your application shortname.
	'url' => "https://SITE.IR", // Replace your application website address.
	'platform' => "APPLICATION-PLATFORM", // Replace your application platform. [ex: android, ios, ubp, desktop, bb, wp, web or other]
	'description' => "APPLICATION-DESCRIPTION" // Replace your application information.
));
$requestUrl = $api."/tmanage.php?".$parameters; // Don't change it.
$output = file_get_contents($requestUrl);
echo $output;
unlink("error_log");
?>
