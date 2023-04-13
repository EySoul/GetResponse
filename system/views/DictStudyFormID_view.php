<?php
  $table = $data['table'];
  $secTable = $table->dictStudyFormType;
  // var_dump($table);
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">

  <div class="row rounded wh-main p-2">
    <label class=" form-label">externalId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table->externalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="col form-label">dictStudyFormId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictStudyFormId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">dictStudyFormExternalId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictStudyFormExternalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="col form-label">studyFormName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->studyFormName)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="col form-label">studyFormSName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->studyFormSName)?></span>
  </div>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="col form-label">studyFormType</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->studyFormType)?></span>
  </div>
  <hr>
  <!-- Вторая таблица -->
  <span class="fw-bold" style="display: ">dictStudyFormType</span>
  <div class="container border">
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studyFormTypeName</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable->studyFormTypeName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studyFormTypeSName</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->studyFormTypeSName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">orderNum</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->orderNum)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">dictStudyForms</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(implode($secTable->dictStudyForms))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">id</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->id)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="form-label">externalId</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->externalId))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">createdAt</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->createdAt))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">updatedAt</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->updatedAt))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">updatedAt</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->commonStatus))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">externalEvents</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(implode($secTable->externalEvents))?></span>
    </div>


  </div>


</div>









