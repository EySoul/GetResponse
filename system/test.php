<?php

$TOKEN = "eyJhbGciOiJSUzI1NiIsImtpZCI6IjZCN0FDQzUyMDMwNUJGREI0RjcyNTJEQUVCMjE3N0NDMDkxRkFBRTEiLCJ0eXAiOiJhdCtqd3QiLCJ4NXQiOiJhM3JNVWdNRnY5dFBjbExhNnlGM3pBa2ZxdUUifQ.eyJuYmYiOjE2NzkzOTY1NzEsImV4cCI6MTcxNTM5NjU3MSwiaXNzIjoibnVsbCIsImF1ZCI6WyJjb250aW5nZW50IiwiZGljdHMiXSwiY2xpZW50X2lkIjoiOURENjVCNDItMDk3MS00RUE5LUE4NTktNjVDN0E4NTQ1RTI3Iiwic2NvcGUiOlsiY29udGluZ2VudCIsImRpY3RzIl19.nS_N4XQ9qhq98Vf925D4ob4B0NJN97v1jDi-CR5YmQMnjmeFSuZoIxLmC0Z6nEFYeSagpLbyXj0MXRSC4Wq0xOng01Xd3Ou57ZLSFzK0WEsoKlkeW5_YkuZYesL9di0-IBzHWRe_14K2mCNcjCiRD2BV6bFnHWJrLv87JSN5-NaFhcW9iFP7ShLegVcWum-3WAuFdF_q0pFwjK4W0aoqGrnoZd-mkPXovG6MNsWNFV-tGt7DFQeTnOX3PISUwfW4QzDDT2r4Ze8G9YBNVdKYtLv7d93h6ozK8mAWvbWVat99v9MZWY4LmpXAP8Kg90zC2eyi5cew00bxKys2QdYyNg";

$URL = "https://my-api.nntu.ru";
$body = array(
  "grant_type" => "client_credentials",
  "client_id" => "9DD65B42-0971-4EA9-A859-65C7A8545E27",
  "client_secret" => "EnPjwdJJv3a5HuCPsTXykLt8f2",
  "scope" => "contingent dicts"
);
$URLget = "/contingent/d/additionalfields";
$header = array(
  "Content-Type" => "application/x-www-form-urlencoded",
  "Authorization: Bearer ".$TOKEN 
);
$crl = curl_init();

curl_setopt($crl, CURLOPT_HTTPHEADER, $header);
curl_setopt($crl, CURLOPT_URL, $URL . $URLget);
curl_setopt($crl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($crl, CURLOPT_CUSTOMREQUEST, 'GET');

curl_setopt($crl, CURLOPT_POSTFIELDS, $body);


$res = curl_exec($crl);


$r = json_decode($res,true);
var_dump($r);

curl_close($crl);