<?php
/**
 * @package Zadarma
 * @author Iurii Makukh <gplcart.software@gmail.com>
 * @copyright Copyright (c) 2017, Iurii Makukh <gplcart.software@gmail.com>
 * @license https://www.gnu.org/licenses/gpl-3.0.en.html GNU General Public License 3.0
 */
?>
<form method="post" class="form-horizontal">
  <input type="hidden" name="token" value="<?php echo $_token; ?>">
  <div class="form-group">
    <label class="col-md-2 control-label"><?php echo $this->text('Trigger'); ?></label>
    <div class="col-md-4">
      <select class="form-control" name="settings[trigger_id]">
        <option value=""><?php echo $this->text('- None, display on every page -'); ?></option>
        <?php foreach ($triggers as $trigger_id => $trigger) { ?>
        <option value="<?php echo $this->e($trigger_id); ?>"<?php echo $settings['trigger_id'] == $trigger_id ? ' selected' : ''; ?>><?php echo $this->e($trigger['name']); ?></option>
        <?php } ?>
      </select>
      <div class="help-block"><?php echo $this->text('Select a <a href="@url">trigger</a> to show widget', array('@url' => $this->url('admin/settings/trigger'))); ?></div>
    </div>
  </div>
  <div class="form-group">
    <label class="col-md-2 control-label"><?php echo $this->text('Code'); ?></label>
    <div class="col-md-6">
      <textarea name="settings[code]" rows="6" class="form-control" placeholder="var ZCallbackWidgetLinkId  = 'abc..."><?php echo $this->e($settings['code']); ?></textarea>
      <div class="help-block"><?php echo $this->text('Paste your <a href="@url">widget code</a> without wrapping "script" tags', array('@url' => 'https://my.zadarma.com/callback/widget/add')); ?></div>
    </div>
  </div>
  <div class="form-group">
    <div class="col-md-4 col-md-offset-2">
      <div class="btn-toolbar">
        <a href="<?php echo $this->url("admin/module/list"); ?>" class="btn btn-default"><?php echo $this->text('Cancel'); ?></a>
        <button class="btn btn-default save" name="save" value="1"><?php echo $this->text("Save"); ?></button>
      </div>
    </div>
  </div>
</form>