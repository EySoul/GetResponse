<?php
  $table = $data['table'];
  $secTable[0] = $table->dictOrderType;
  $secTable[1] = $table->dictStudyLevel;
  // var_dump($table);
?>





<div class="container bd-highlight mb-3 align-baseline " style="display: grid;">
<div class="row row-cols-3">
<div class="col">
  <span class="fw-bold" style="display: ">DictOrdersCategory</span>
  <div class="container border">
  <div class="row rounded wh-main p-2">
    <label class="col form-label">dictOrdersCategoryId</label>
    <span class="col value-item border rounded-3 align-right p-1"><?=($table->dictOrdersCategoryId)?></span>
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
    <label class="form-label">dictStudyLevel</label>
    <span class="col value-item border rounded-3 align-baseline p-2">==>></span>
  </div>
</div>
  <hr>
  </div>
  <div class="col">
    <!-- Вторая таблица -->
    <span class="fw-bold" style="display: ">dictOrderType</span>
    <div class="container border">
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">typeName</label>
        <span class="col value-item border rounded-3 align-baseline p-1"><?=($secTable[0]->typeName)?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">studentMovement</label>
        <input type="checkbox" onclick="return false;" class="col rounded-3  p-2" <?php if($secTable[0]->studentMovement) echo'checked';?>/>
      </div>
      <!-- <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">orderNum</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable[0]->orderNum)?></span>
      </div> -->
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">enums</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->enums))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">order</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=($secTable[0]->order)?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">id</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->id))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="form-label">externalId</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->externalId))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">createdAt</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->createdAt))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">updatedAt</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->updatedAt))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">commonStatus</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[0]->commonStatus))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">externalEvents</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(implode($secTable[0]->externalEvents))?></span>
      </div>
    </div>
  </div>
  <!-- Третья таблица -->
  <div class="col">
  <span class="fw-bold" style="display: ">dictStudyLevel</span>
    <div class="container border">
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="form-label">studyLevelName</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->studyLevelName))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">studyLevelSName</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->studyLevelSName))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">id</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->id))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="form-label">externalId</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->externalId))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="col form-label">commonStatus</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->commonStatus))?></span>
      </div>
      <div class="row p-2 bd-highlight rounded wh-main">
        <label class="form-label">updatedAt</label>
        <span class="col value-item border rounded-3 align-baseline p-2"><?=(($secTable[1]->updatedAt))?></span>
      </div>
    </div>
  </div>
</div>

</div>









