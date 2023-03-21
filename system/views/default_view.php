

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



?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Not Yet</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sidebars/">

    

    <!-- Bootstrap core CSS -->
<!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<link rel="stylesheet" href="/css/default.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/sidebars.css" rel="stylesheet">
  </head>
  <body>
    
<main>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 320px; ">
    <a href="/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-white text-decoration-none">
      <span class="fs-4">Gets</span>
    </a>
    <hr>
    <ul class="nav flex-column overf-auto " style="flex-wrap: nowrap; flex: auto">
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetDepartments" >Получить отделы</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictControlAction" >Дикт управления действием</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictDiscipline" >Дикт Дисциплина</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictDisciplineType" >Дикт Типа Дисциплины</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictQualification" >Дикт Отметок</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictQualification" >Дикт Квалификаций</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudyForm" >Дикт Учебных Форм</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudyFormType" >Дикт Типов Учебных Форм</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudyLevel" >Дикт Учебного Уровня</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudyTechnology" >Дикт Учебных технологий</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictTrainingLevel" >Дикт Тренеровочного уровня</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictBenefit" >Дикт Преимуществ</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictCitizenship" >Дикт Гражданства</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictCitizenshipType" >Дикт Типа Кражданства</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictCityTypes" >Дикт Типа Городов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictEducationDocTypes" >Дикт Типов образовательных документов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictEmailTypes" >Дикт Типов Email</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictFamilyMemberStatuses" >Дикт Статуса Члена Семьи</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictFilial" >Дикт Филиала</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictHealth" >Дикт Здоровья</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictIdentificationType" >Дикт Типа Идентификатора</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictInstitution" >Дикт Институтов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictInstitutionType" >Дикт Типа Институтов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictLanguageLevels" >Дикт Уровня Языка</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictLanguages" >Дикт Языков</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetDictMaritalStatus" >Дикт Материального статуса</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictMilitaryDocTypes" >Дикт Военных документов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictMilitaryRanks" >Дикт Военных Рангов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictMilitaryStatuses" >Дикт Военных Статусов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictMilitaryStockCategories" >Дикт Военных Категорий Акций</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictOrdersCategory" >Дикт Категорий Заказов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictOrderTypes" >Дикт Типов Заказов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictOrganization" >Дикт Огранизаций</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictPhoneTypes" >Дикт Типов Телефонов</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictSportCategory" >Дикт Категорий Спорта</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictSportType" >Дикт Типов Спорта</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictSpravkaType" >Дикт Типов Справки</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStreetTypes" >Дикт Типов Улицы</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudentAcademicState" >Дикт Академического Положения Студента</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictStudentBudget" >Дикт Студенческого бюджета</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetAllDictStudyLevel" >Получить Дикт Всех Студенческих Уровней</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetAllDictTrainingLevel" >Получить Дикт Всех Тренеровочныйх Уровней</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetAllDictStudyForm" >Получить Дикт Всех Учебных Форм</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetAllDictStudyFormType" >Получить Дикт Всех Типов Учебных Форм</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetAllDepartment" >Получить Все отделы</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>DictAdditionalFields" >Дикт Всех Добавочных Полей</a></li>
      <li class="nav-item"><a class="nav-link def-nav-bar" href="<?php echo conf::$SITE_URL;?>GetHostels" >Получить Хостолы</a></li>
    </ul>
    

    
  </div>
  <div class="b-example-divider"></div>

  <div class="p2 ml-2">
      <?php
        include("system/views/DictAdditionalFields_view.php");
      ?>
  </div>
 
</main>


    <!-- <script src="<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script></script> -->

    <script src="js/sidebars.js"></script>
  </body>
</html>
