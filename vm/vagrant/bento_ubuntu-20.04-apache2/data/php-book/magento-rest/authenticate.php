<?php

$data = array(
    'username' => 'henock.admin',
    'password' => 'magento3599'
);
$data_string = json_encode($data);
$url = "http://192.168.33.10/magento/rest/V1/integration/admin/token";

echo "data:",$data_string;

$request = curl_init($url);
curl_setopt($request,CURLOPT_CUSTOMREQUEST,'POST');
curl_setopt($request,CURLOPT_POSTFIELDS,$data_string);
curl_setopt($request,CURLOPT_RETURNTRANSFER,true);
curl_setopt($request,CURLOPT_HTTPHEADER,array(
    'Content-Type:application/json',
    'Content-Length:'.strlen($data_string)
));

$result = curl_exec($request);

print_r($result);

?>