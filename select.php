 <?php


include('./system/controller/urls.php');

include('./system/controller/authInfo.php');

// POST https://test-api.uni-systems.ru/auth/clienttoken
// Content-Type: application/x-www-form-urlencoded
// grant_type: "client_credentials"
// client_id: "9DD65B42-0971-4EA9-A859-65C7A8545E27"
// client_secret: "EnPjwdJJv3a5HuCPsTXykLt8f2"
// scope: "contingent dicts"


$authData = array(
   'client_id'       => "9DD65B42-0971-4EA9-A859-65C7A8545E27",
   'client_secret'   => "EnPjwdJJv3a5HuCPsTXykLt8f2",
   'grant_type'      => "client_credentials",
   'scope'           => "contingent dicts",
   'Content-Type'    => 'application/x-www-form-urlencoded'
);

$client = "9DD65B42-0971-4EA9-A859-65C7A8545E27";
$secret = "EnPjwdJJv3a5HuCPsTXykLt8f2";

$URLP = _getURL();
$authData = _getHeader();

$ch = curl_init();


curl_setopt($ch, CURLOPT_POST, false);

curl_setopt($ch, CURLOPT_URL, $URLP . GetDepartments());

curl_setopt($ch, CURLOPT_POST, false);
curl_setopt($ch, CURLOPT_TIMEOUT, 15);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
curl_setopt($ch, CURLOPT_HEADER, 1);

// curl_setopt($ch, CURLOPT_VERBOSE, 1); 

curl_setopt($ch, CURLOPT_HTTPHEADER, $authData);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);

curl_close($ch);
print_r($result);