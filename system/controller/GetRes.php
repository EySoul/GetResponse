<?php


require_once('./authInfo.php');

class get  
{
    static function getResFrom($URL)
{

    $ch = curl_init();

    curl_setopt($ch, CURLOPT_POST, false);

    curl_setopt($ch, CURLOPT_URL, _getURL().$URL);

    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_TIMEOUT, 15);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE); 
    curl_setopt($ch, CURLOPT_HEADER, 1);


    curl_setopt($ch, CURLOPT_HTTPHEADER, _getHeader());

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $result = curl_exec($ch);

    curl_close($ch);
    return $result;

}
}





