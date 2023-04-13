<div>

  <?php
  $table = $data['table'];
  if(!empty($table))
    sys::viewDefaultTable($table);
  else echo 'Ничего нет.';
  ?>

</div>