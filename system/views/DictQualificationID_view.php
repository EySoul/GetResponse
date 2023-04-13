<?php
  $table = $data['table'];
  $secTable = $table->dictTrainingLevel;
  // var_dump($table);
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">

  <div class="row rounded wh-main p-2">
    <label class="col form-label">dictQualificationId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table->dictQualificationId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">dictQualificationExternalId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictQualificationExternalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">qualificationName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->qualificationName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">qualificationSName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->qualificationSName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="col form-label">dictTrainingLevelId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictTrainingLevelId)?></span>
  </div>
  <hr>
  <!-- Вторая таблица -->
  <span class="fw-bold" style="display: ">dictTrainingLevel</span>
  <div class="container border">
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">trainingLevelName</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable->trainingLevelName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="form-label">trainingLevelSName</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->trainingLevelSName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">profileTitle</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->profileTitle)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studentTitle</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->studentTitle)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studentRTitle</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->studentRTitle)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">dictQualifications</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3 p-2" <?php if(implode($secTable->dictQualifications)) echo'checked';?>/>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">educationPlans</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->educationPlans)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">id</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=(($secTable->id))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="form-label">externalId</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=(($secTable->externalId))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">createdAt</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><time><?=(($secTable->createdAt))?></time></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">updatedAt</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><time><?=(($secTable->updatedAt))?></time></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">commonStatus</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=(($secTable->commonStatus))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">externalEvents</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=(implode($secTable->externalEvents))?></span>
    </div>

  </div>


</div>