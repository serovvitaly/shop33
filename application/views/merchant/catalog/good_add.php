<form class="form-horizontal" action="" method="post">
<fieldset>

  <input type="hidden" name="token" value="<?=Controller_Merchant::get_token()?>" />

  <div class="control-group">
    <label class="control-label">Наименование *</label>
    <div class="controls">
      <input type="text" value="" name="good[title]" class="input-xlarge focused">
    </div>
  </div>

  <div class="control-group">
    <label class="control-label">Артикул *</label>
    <div class="controls">
      <input type="text" value="" name="good[articul]" class="input-xlarge focused">
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Краткое описание</label>
    <div class="controls">
      <textarea rows="3" name="good[note]" class="input-xlarge"></textarea>
    </div>
  </div>
  
  <div class="control-group">
    <label class="control-label">Полное описание</label>
    <div class="controls">
      <textarea rows="3" name="good[descript]" class="input-xlarge"></textarea>
    </div>
  </div>


  <div class="form-actions">
    <button class="btn btn-primary" type="submit">Сохранить</button>
    <button class="btn">Отмена</button>
  </div>
</fieldset>
</form>