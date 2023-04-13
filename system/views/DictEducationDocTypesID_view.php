<?php
  $table = $data['table'];
  $secTable = $table->dictStudyLevel;
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">

  <div class="row rounded wh-main p-2">
    <label class="col form-label">dictEducationDocTypeId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table->dictEducationDocTypeId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">dictEducationDocTypeExternalId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictEducationDocTypeExternalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">educationDocTypeName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->educationDocTypeName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">dictStudyLevelId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictStudyLevelId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="col form-label">order</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->order)?></span>
  </div>
  <hr>
  <!-- Вторая таблица -->
  <span class="fw-bold" style="display: ">dictStudyLevel</span>
  <div class="container border">
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studyLevelName</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable->studyLevelName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studyLevelSName</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->studyLevelSName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">id</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->id)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">externalId</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->externalId)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">commonStatus</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->commonStatus)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">updatedAt</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->updatedAt)?></span>
    </div>

  </div>


</div>









