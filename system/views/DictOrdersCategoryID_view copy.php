<?php
  $table = $data['table'];
  $secTable = $table->dictStudyFormType;
  // var_dump($table);
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">

  <div class="row rounded wh-main p-2">
    <label class="col form-label">dictOrdersCategoryId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table['dictOrdersCategoryId'])?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="form-label">dictOrdersCategoryExternalId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictOrdersCategoryExternalId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">dictOrderTypeId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictOrderTypeId)?></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight  rounded wh-main">
    <label class="col form-label">dictOrderType</label>
    <span class="col value-item border rounded-3 align-baseline p-2">=></span>
  </div>
  <hr>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">categoryName</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->categoryName)?></span>
  </div>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">dictStudyLevelId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictStudyLevelId)?></span>
  </div>
  <div class="row p-2 bd-highlight rounded wh-main">
    <label class="form-label">dictStudyLevelId</label>
    <span class="col value-item border rounded-3 align-baseline p-2"><?=($table->dictStudyLevelId)?></span>
  </div>
  <hr>
  <!-- Вторая таблица -->
  <span class="fw-bold" style="display: ">dictOrderType</span>
  <div class="container border">
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">typeName</label>
      <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable->typeName)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">studentMovement</label>
      <input type="checkbox" onclick="return false;" class="col rounded-3  p-2" <?php if($secTable->studentMovement) echo'checked';?>/>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">orderNum</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->orderNum)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">enums</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->enums))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">order</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable->order)?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">id</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->id))?></span>
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
      <label class="col form-label">commonStatus</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable->commonStatus))?></span>
    </div>
    <div class="row p-2 bd-highlight rounded wh-main">
      <label class="col form-label">externalEvents</label>
      <span class="col value-item border rounded-3 align-baseline p-2"><?=(implode($secTable->externalEvents))?></span>
    </div>


  </div>


</div>









