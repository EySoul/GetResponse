<?php



    function _getHeader()
{
    $authData = array(
        'client_id'       => "9DD65B42-0971-4EA9-A859-65C7A8545E27",
        'client_secret'   => "EnPjwdJJv3a5HuCPsTXykLt8f2",
        'grant_type'      => "client_credentials",
        'scope'           => "contingent dicts",
        'Content-Type'    => 'application/x-www-form-urlencoded'
    );
    return $authData;
}
    function _getURL()
{
    $URLP = 'https://test-api.uni-systems.ru/auth/clienttoken';
    return $URLP;
}




