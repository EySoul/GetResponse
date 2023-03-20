<script src="<?php echo conf::$SITE_URL ?>js/abits.js"></script>
<link rel="stylesheet" href="<?php echo conf::$SITE_URL ?>css/abits.css">
<style>
  a.a_auto{
  cursor: auto
 }
  .is_participant {
    background-color: #fcf480;
  }
</style>

<div class="container-fluid">
  <div class="row">
    <h3 style="margin-left: 15px">Список школьников - <?php echo $data['table']['count']?> чел.</h3>

    <form class="form-horizontal" id="find-form" method="GET" action="<?php echo conf::$SITE_URL ?>abits">
      <div class="form-group">
          <label for="s" class="col-sm-1  control-label">Фамилия</label>
          <div class="col-sm-2">
            <input name="s" id="s" type="text" class="form-control" value="<?php echo isset($_GET['s'])?$_GET['s']:'';?>">
          </div>
          <label for="abit_class" class="col-sm-1 control-label">Класс</label>
          <div class="col-sm-2">
            <select class="form-control" name="abit_class" id="abit_class">
              <option value="0"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 0)?' selected':''?>>Все</option>
              <option value="6"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 6)?' selected':''?>>6</option>
              <option value="7"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 7)?' selected':''?>>7</option>
              <option value="8"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 8)?' selected':''?>>8</option>
              <option value="9"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 9)?' selected':''?>>9</option>
              <option value="10"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 10)?' selected':''?>>10</option>
              <option value="11"<?php echo (isset($_GET['abit_class']) && $_GET['abit_class'] == 11)?' selected':''?>>11</option>
            </select>
          </div>
          <input type="submit" class="btn btn-default" value="Поиск"/>
      </div>
    </form>
    <?php
    if(sys::user_in_group('admin,user')) {
      echo '<a class="btn btn-default new" href="'.conf::$SITE_URL.'abits/add" role="button">Добавить</a>';
      echo '<a class="btn btn-default inc_class" style="margin-left:1rem; display: none" href="#" role="button">Перевести в следующий класс</a><br><br>';
		}
    ?>
    <h4>Дубликатов: <span id="col_dub"></span></h4>
    
    <table class="table table-bordered table-condensed table-modul tablesorter" id="table_abits">
      <thead>
        <tr>
          <?php
          if(sys::user_in_group('admin,user'))
              echo '<th></th>';
          else
              echo '<th style="display: none"></th>';
          ?>
          <th class="fio" style="  width: 270px;">ФИО</th>
          <th class="birthday" style=" width: 140px;">Дата рождения</th>
          <th class="school">Школа</th>
          <th class="klass">Класс</th>
        </tr>
      </thead>
      <tbody>
          <?php



          $col_dub = 0;
          $fio_old =  '';
          $bday_old = '';
          $is_duplicate = false;
          // получаем из модели массив с результатом для таблицы
          $table=0;
          // пробегаем по массиву и выводим
          
          ?>
        <input id="col_dub_inp" hidden value="<?=$col_dub?>">
      </tbody>
    </table>
  </div>
</div>