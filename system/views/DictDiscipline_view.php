<?php $id='';?>

<div>
<form>
<input class="form-text" type="text" name="id" value=""> 
<input class="btn btn-primary" type="submit" name="" value="Найти" onclick="location.href='<?php echo conf::$SITE_URL . 'DictDisciplineID?id=' . $_POST[`id`];?>'">
</form>
<?php
  $table = $data['table'];

  if(empty($_GET["id"]))
  {
    echo sys::viewTwoLevelTable($table,'dictDisciplineExternalId');
  }
  else echo sys::viewTwoLevelIdTable($table);
  

?>

</div>