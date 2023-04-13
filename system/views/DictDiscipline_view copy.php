<?php $id='';?>

<div>
<!-- <form>
<input class="form-text" type="text" name="id" value=""> 
<input class="btn btn-primary" type="submit" name="" value="Найти" onclick="location.href='<?php echo conf::$SITE_URL . 'DictDisciplineID?id=' . $_POST[`id`];?>'">
</form> -->
<?php
  $table = $data['table'];


  // if(empty($_GET["id"]))
  // {
  //   $result ='';
  //   $nextLevelTable = array();
  
  //   $result .= '<table class="table table-bordered">';
  //   $result .= '<tr>';
  //   foreach ($table[0] as $key => $value) {
  //     $result .= '<th>'.$key.'</th>';
  //   }
    
    // $result .= '</tr><tr>';



    // foreach ($table as $key => $value) {
    //   if(is_object($value))
    //   {
    //     $nextLevelTable[] = '<td colspan="8" class="table-secondary"><table class="table border-white"><tr>'.
    //     sys::_getForEachHtml($value,'<th>','</th>',0).'</tr><tr>'.sys::_getForEachHtml($value,'<td>','</td>',1).'</table>';
    //     $result .= '<td>==></td>';
    //     continue;
    //   }
    //   else if($key == $SecLevelName)
    //   {
    //     $result .= '
    //     <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#'.$key.'">
    //       '.$value.'
    //     </button></td>';
        
    //   }
    //   $result .= '<td>'.$value.'</td>';
    // }
    // $result .= '</tr>';
    // foreach ($nextLevelTable as $key ) {
    //   $result .= $key;
    // }
    $result .= '</table>';
    echo $result;
 
  
  // }
  // else {
  //   echo sys::viewTwoLevelIdTable($table);
  // }
  
?>



<div class="modal fade" id="dictDisciplineExternalId" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
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