<?php
error_reporting(0);
header("content-type: application/json; charset=UTF-8");
$api = "https://api.ineo-team.ir"; // Don't change it.
$parameters = http_build_query(array(
	'action' => "information", // Don't change it.
	'auth' => "@YOUR-ACCESS-KEY", // Replace your HTTP-ACCESS-KEY.
	'phone' => "YOUR-PHONE-NUMBER", // Replace your phone number. [ex: 989012345678]
	'hashCheck' => "YOUR-LOGIN-HASH-CODE" // Replace your login hash code.
));
$requestUrl = $api."/tmanage.php?".$parameters; // Don't change it.
$output = file_get_contents($requestUrl);
echo $output;
unlink("error_log");
?>