<?php $id='';?>

<div>
<form>
<input class="form-text" type="text" name="id" value=""> 
<input class="btn btn-primary" type="submit" name="" value="Найти" onclick="location.href='<?php echo conf::$SITE_URL . 'DictDisciplineID?id=' . $_POST[`id`];?>'">
</form>
<?php
  $table = $data['table'];

 echo sys::viewTwoLevelIdTable($table[0],'dictDisciplineExternalId')

  // if(empty($_GET["id"]))
  // {
  //   echo sys::viewTwoLevelTable($table,'dictDisciplineExternalId');
  // }
  // else echo sys::viewTwoLevelIdTable($table);

  
?>
<div class="modal fade" id="dictDisciplineExternalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Заголовок модального окна</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
      </div>
      <div class="modal-body" id="result">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        <button type="button" class="btn btn-primary">Сохранить изменения</button>
      </div>
    </div>
  </div>
</div>
</div>