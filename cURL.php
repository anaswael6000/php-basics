<?php

$handle = curl_init();

$url = "example.com";

curl_setopt($handle, CURLOPT_URL, $url);

curl_exec($handle);