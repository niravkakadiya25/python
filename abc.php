<?php
$c = curl_init();
curl_setopt($c, CURLOPT_URL, "http://app-master.online/");
curl_setopt($c, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($c);
echo "PHP got the result - $result";
?>