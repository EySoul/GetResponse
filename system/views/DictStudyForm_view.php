<?php 
$id='';
$table = $data['table'];
$id = null;
?>
<div>



<table class="table table-bordered">
  <tr>
    <?php foreach($table[0] as $key=>$value):?>
      <th><?=$key?></th>
    <?php endforeach;?>
  </tr>
  <?php foreach($table as $key => $value):?>
  <tr>
      <?php foreach($value as $name => $field):?>

        <?php if($name == 'dictStudyFormId') $id = $field;?>

        <?php if($name == 'dictStudyFormType'):?>
          <td><button type="button" value="<?=$id?>" class="btn btn-primary show_element_studform" data-bs-toggle="modal" data-bs-target="#dictStudyFormType"> Открыть всю таблицу</button></td>
        
        <?php else:?>
          <td> <?=$field?> </td>


        <?php endif;?>
      <?php endforeach;?>
  </tr>
    <?php endforeach;?>

  </tr>
</table>

  <div class="modal fade" id="dictStudyFormType" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Solo Id Element</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Закрыть"></button>
        </div>
        <div class="modal-body" id="">
          <div id="result"></div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
        </div>
      </div>
    </div>
  </div>
</div>