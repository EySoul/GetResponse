<div>

  <?php
  $table = $data['table'];
  if(!empty($table))
    echo sys::viewDefaultTable($table);
  else echo 'Ничего нет.';
  ?>

</div>