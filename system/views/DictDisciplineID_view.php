<?php
  $table = $data['table'];
  $secTable = $table->dictDisciplineType;
  // var_dump($table);
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">

  <div class="row rounded wh-main p-2">
    <label class="col form-label">dictDisciplineId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table->dictDisciplineId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">dictDisciplineExternalId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictDisciplineExternalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">disciplineName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->disciplineName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">disciplineSName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->disciplineSName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">disciplineType</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->disciplineType)?></span>
  </div>
  <hr>
  <!-- Вторая таблица -->
  <span class="fw-bold" style="display: ">dictDisciplineType</span>
  <div class="container border">
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">dictDisciplineTypeId</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable->dictDisciplineTypeId)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="form-label">dictDisciplineTypeExternalId</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->dictDisciplineTypeExternalId)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="form-label">name</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->name)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">sName</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->sName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">isPractice</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3 p-2" <?php if($secTable->isPractice) echo'checked';?>/>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">usedInStudyProcess</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3 p-2" <?php if($secTable->usedInStudyProcess) echo'checked';?>/>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">hiddenCipher</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3 p-2" <?php if($secTable->hiddenCipher) echo'checked';?>/>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">hiddenLaborIntensity</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3  p-2" <?php if($secTable->hiddenLaborIntensity) echo'checked';?>/>
    </div>
  </div>


</div>









