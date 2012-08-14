<form class="form-horizontal">
<fieldset>
  <div class="control-group">
    <label for="focusedInput" class="control-label">Focused input</label>
    <div class="controls">
      <input type="text" value="This is focused…" id="focusedInput" class="input-xlarge focused">
    </div>
  </div>
  <div class="control-group">
    <label class="control-label">Uneditable input</label>
    <div class="controls">
      <span class="input-xlarge uneditable-input">Some value here</span>
    </div>
  </div>
  <div class="control-group">
    <label for="disabledInput" class="control-label">Disabled input</label>
    <div class="controls">
      <input type="text" disabled="" placeholder="Disabled input here…" id="disabledInput" class="input-xlarge disabled">
    </div>
  </div>
  <div class="control-group">
    <label for="optionsCheckbox2" class="control-label">Disabled checkbox</label>
    <div class="controls">
      <label class="checkbox">
        <input type="checkbox" disabled="" value="option1" id="optionsCheckbox2">
        This is a disabled checkbox
      </label>
    </div>
  </div>
  <div class="control-group warning">
    <label for="inputWarning" class="control-label">Input with warning</label>
    <div class="controls">
      <input type="text" id="inputWarning">
      <span class="help-inline">Something may have gone wrong</span>
    </div>
  </div>
  <div class="control-group error">
    <label for="inputError" class="control-label">Input with error</label>
    <div class="controls">
      <input type="text" id="inputError">
      <span class="help-inline">Please correct the error</span>
    </div>
  </div>
  <div class="control-group success">
    <label for="inputSuccess" class="control-label">Input with success</label>
    <div class="controls">
      <input type="text" id="inputSuccess">
      <span class="help-inline">Woohoo!</span>
    </div>
  </div>
  <div class="control-group success">
    <label for="selectError" class="control-label">Select with success</label>
    <div class="controls">
      <select id="selectError">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
      </select>
      <span class="help-inline">Woohoo!</span>
    </div>
  </div>
  <div class="form-actions">
    <button class="btn btn-primary" type="submit">Save changes</button>
    <button class="btn">Cancel</button>
  </div>
</fieldset>
</form>