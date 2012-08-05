<form class="well form-horizontal" method="post">
<? if ($message) echo '<div class="alert alert-error">'.$message.'</div>'; ?>
<fieldset>
  <div class="control-group">
    <label for="input01" class="control-label">Email</label>
    <div class="controls">
      <input type="text" name="login" id="input01" class="input-xlarge">
    </div>
  </div>
  <div class="control-group">
    <label for="input02" class="control-label">Пароль</label>
    <div class="controls">
      <input type="password" name="pass" id="input02" class="input-xlarge">
    </div>
  </div>
  <div class="control-group">
    <label for="optionsCheckbox" class="control-label"></label>
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox" value="option1" id="optionsCheckbox">
        Запомнить меня на этом компьютере
      </label>
    </div>
  </div>


  <div class="form-actions">
    <button class="btn btn-primary" type="submit">Войти</button>
    <button class="btn" onclick="window.location = '<?=(isset($_SERVER['HTTP_REFERER']) ? $_SERVER['HTTP_REFERER'] : '/')?>'">Отмена</button>
  </div>
</fieldset>
</form>
