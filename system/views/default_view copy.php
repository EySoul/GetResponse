<?php
require_once conf::$ROOT . 'system/etc/functions.php';

// получаем адрес страницы без учета параметров
$CURRENT_PAGE = basename($_SERVER['REQUEST_URI']); // получаем адрес
// способ 1
//$pos = strpos($CURRENT_PAGE, '?'); // получаем позицию знака вопроса
//if($pos) $CURRENT_PAGE = substr($CURRENT_PAGE, 0, $pos); // если знак вопроса есть, получаем подстроку до знака вопроса
// способ 2
// парсим адрес 
$arr = parse_url($CURRENT_PAGE);
$CURRENT_PAGE_HARD = $CURRENT_PAGE; // сохраняем для жестких ссылок прописанных с учетом параметров в запросе
$CURRENT_PAGE = $arr['path']; // получаем конечный адрес
//var_dump($arr);


// ------------- получаем адрес страницы без учета параметров



?><!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="utf-8"/>
        <title><?php echo isset($data['title'])?$data['title']:conf::$SITE_NAME; ?></title>

 
        <link href="<?php echo conf::$SITE_URL ?>css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <script src="<?php echo conf::$SITE_URL ?>js/bootstrap.min.js" type="text/javascript"></script>

        <!-- <script src="<?php echo conf::$SITE_URL ?>js/main.js" type="text/javascript"></script> -->
        
        <link href="<?php echo conf::$SITE_URL ?>css/main.css" rel="stylesheet" type="text/css">
        <!--link href="<?php echo conf::$SITE_URL ?>css/jquery-ui-combobox.css" rel="stylesheet" type="text/css"/-->
        <link href="<?php echo conf::$SITE_URL ?>css/menu.css" rel="stylesheet" type="text/css">
      
        <script>
          var SITE_URL = "<?php echo conf::$SITE_URL ?>";
          var CURRENT_PAGE = "<?=$CURRENT_PAGE?>"
        </script>
        
      <style>
        .main_menu .nav>li>a {
          position: relative;
          display: block;
          padding: 3px 10px;
        }
      </style>
    </head>
    <body>
      <?php
      
      if (sys::is_super_admin()){
        require_once 'system/views/menu_admin.php';
      }
      
      ?>
        <div id="all">

            <!--"Шапка"-->
            <table class="heder">
                <tbody>
                    <tr>
                        <td class="hedtdl">

                            <a href="<?= conf::$SITE_URL ?>" title=""><img style="height: 160px;" src="<?= conf::$SITE_URL ?>/img/logo.jpg" alt="НГТУ" title="НГТУ" /></a>
                        </td>
                        <td>
                            <div class="main_name">
                              <div class="page-header" style="color: #337ab7;">
                                <h1>ИС «<?php echo conf::$SITE_NAME;?>» <small></small></h1>
                              </div>
                            </div>
                        </td>
                        <td class="hedtdr">
                            <?php
                            echo '<a class="medium red awesome" href="' . conf::$SITE_URL . 'logout">Выйти</a>';
                             echo '<p>Вы вошли как:</small> '.user_login().'</p>';
                             
                            ?>
                        </td>
                    </tr>
                </tbody>
            </table>
            
            <table class="total">
                <tr>
                    <td class="menu_td">
                       
                          <nav class="main_menu">

                            <ul class="list-group">
                              <li class="list-group-item">
                                <h4 class="list-group-item-heading">Школьники</h4>
                                <p class="list-group-item-text">
                                  <ul class="nav nav-pills nav-stacked">
                                    <li <?php echo ($CURRENT_PAGE == 'abits')?('class="active"'):""; ?>><a href="<?php echo conf::$SITE_URL;?>abits" style="padding-right: 0px;padding-left: 5px;">Список школьников<span class="badge pull-right" id="count_abits"></span></a></li>
                                    <li <?php echo ($CURRENT_PAGE == 'konkurs_categ')?('class="active"'):""; ?>><a href="<?php echo conf::$SITE_URL;?>first" style="padding-left: 5px;">Виды мероприятий</a></li>
                                    <li <?php echo ($CURRENT_PAGE == 'konkurs_categ')?('class="active"'):""; ?>><a href="<?php echo conf::$SITE_URL;?>first" style="padding-left: 5px;">Виды мероприятий</a></li>
                                    <li <?php echo ($CURRENT_PAGE == 'konkurs')?('class="active"'):""; ?>><a href="<?php echo conf::$SITE_URL;?>konkurs" style="padding-right: 0px;padding-left: 5px;">Мероприятия<span class="badge pull-right" id="count_events"></span></a></li>
                                  </ul>
                                </p>
                              </li>
                              <li class="list-group-item">
                                <h4 class="list-group-item-heading">Результаты</h4>
                                <p class="list-group-item-text">
                                  <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'results?konk_categ_id=1')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'results?konk_categ_id=1" style="padding-left: 5px;">Олимпиады</a></li>';
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'results?konk_categ_id=11')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'results?konk_categ_id=11" style="padding-left: 5px;">ВСоШ</a></li>';
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'results?konk_categ_id=8')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'results?konk_categ_id=8" style="padding-left: 5px;">Технические конкурсы</a></li>';
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'results?konk_categ_id=4')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'results?konk_categ_id=4" style="padding-left: 5px;">Минпрос</a></li>';
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'results?konk_categ_id=7')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'results?konk_categ_id=7" style="padding-left: 5px;">Подготовительные курсы</a></li>';
                                    echo '<li '.(($CURRENT_PAGE_HARD == 'individual_achievements_new')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'individual_achievements_new" style="padding-left: 5px;">Индивидуальные достижения<span class="badge pull-right" id="count_abits_ind"></span></a></li>';
                                    if(sys::user_in_group('admin')){
                                      echo '<li '.(($CURRENT_PAGE_HARD == 'import_results')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'import_results" style="padding-left: 5px;">Импорт из олимпиад в абитпроф</a></li>';
                                    }
                                    
                                    ?>
                                  </ul>
                                </p>
                              </li>
                              
                              <li class="list-group-item">
                                <h4 class="list-group-item-heading">Отчеты</h4>
                                <p class="list-group-item-text">
                                  <ul class="nav nav-pills nav-stacked">
                                    <?php
                                    echo '<li '.(($CURRENT_PAGE == 'report_members')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'report_members" style="padding-left: 5px;">Участники олимпиад</a></li>';
                                    echo '<li '.(($CURRENT_PAGE == 'report_testprof')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'report_testprof" style="padding-right: 0px;padding-left: 5px;">Тестирование "Профориентатор"<span class="badge pull-right" id="count_testprof"></span></a></li>';
                                    echo '<li '.(($CURRENT_PAGE == 'report_abits')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'report_abits" style="padding-left: 5px;">Список мотивированных абитуриентов<span class="badge pull-right" id="count_abit_res"></span></a></li>';
                                    echo '<li '.(($CURRENT_PAGE == 'report_abit_professii')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'report_abit_professii" style="padding-left: 5px;">Профессии</a></li>';
                                    echo '<li '.(($CURRENT_PAGE == 'report_for_company')?('class="active"'):"").'><a href="'.conf::$SITE_URL.'report_for_company" style="padding-left: 5px;">Для предприятий</a></li>';
                                    ?>
                                  </ul>
                                </p>
                              </li>

                              <!--<li class="list-group-item">Отчеты</li>-->
                            </ul>

                          </nav>
                        <?php
                        
                        ?>

                    </td>
                   
                    <td class="content">
                      
                      <?php
                      if ($content_view <> '') {
                        include 'system/views/' . $content_view;
                      }
                      else
                      {
                        ?>
                        <h3>ИС <?php echo conf::$SITE_NAME;?></h3>
                        <br>
                        <!--index-content-->
                        
                        <?php
                      }
                      ?>
                        
                    </td>
                </tr>	
            </table>
            <!--footer-->
            <div id="footer_guarantor">&nbsp;</div>
        </div>
        <div class="text-center" id="footer1">
          <br>НГТУ, <?= date('Y') ?> г 
        </div>
        <!--a id="move_up" href="#">Наверх</a-->
    </body>
</html>
