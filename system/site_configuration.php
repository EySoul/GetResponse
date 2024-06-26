<?php
// config some dir
//
class conf{
  static $ROOT;
  static $PROJECT_NAME;
  static $SITE_URL;
  static $SITE_URL_SHORT;
  static $SITE_PATH;
  static $SITE_NAME;
  static $SESSION_TIME;
  static $SITE_LOCAL;
  static $SITE_SUBDIR_INDEX;  // вложенность сайта - количество дополнительных поддиректорий
  static $VERSION; // Версия - используется для принудительного предотвращения кэширования js,css

  //---------------------------------------------------//

  static $TOKEN_HEADERS;
  static $TOKEN_BODY;
  static $TOKEN_URL;
  static $BASE_URL;

  static $TOKEN;
}

conf::$VERSION = 2;  // Устанавливается в system.php вызовом sys::version()

conf::$SITE_NAME = '';
conf::$PROJECT_NAME = 'abitprof';
conf::$SITE_URL_SHORT = $_SERVER['SERVER_NAME'];
conf::$SITE_PATH = dirname(__FILE__).DIRECTORY_SEPARATOR.'../';
conf::$SESSION_TIME = 2592000;
ini_set("memory_limit", "200M");  // для экспорта надо много
conf::$ROOT = rtrim($_SERVER['DOCUMENT_ROOT'],'/').'/';
conf::$SITE_URL = 'http://'.$_SERVER['SERVER_NAME'].'/';
conf::$SITE_LOCAL=true;
conf::$SITE_SUBDIR_INDEX=0; // например http://site.ru/ - 0
//-------------------------------------------------//
conf::$TOKEN_BODY = array(
  "grant_type"=>"client_credentials",
  "client_id"=>"9DD65B42-0971-4EA9-A859-65C7A8545E27",
  "client_secret"=>"EnPjwdJJv3a5HuCPsTXykLt8f2",
  "scope"=>"contingent dicts"
);
conf::$TOKEN_HEADERS = array(
  "Content-Type" => "application/x-www-form-urlencoded"
);
conf::$TOKEN_URL = "https://my-api.nntu.ru/auth/clienttoken";
conf::$BASE_URL = 'https://my-api.nntu.ru';

conf::$TOKEN = null;