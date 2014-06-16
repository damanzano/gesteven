<?php /* Smarty version 2.6.26, created on 2014-02-24 11:36:28
         compiled from manager/scheduler/specialEvents.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'translate', 'manager/scheduler/specialEvents.tpl', 25, false),array('function', 'url', 'manager/scheduler/specialEvents.tpl', 41, false),array('function', 'page_info', 'manager/scheduler/specialEvents.tpl', 56, false),array('function', 'page_links', 'manager/scheduler/specialEvents.tpl', 57, false),array('block', 'iterate', 'manager/scheduler/specialEvents.tpl', 32, false),array('modifier', 'escape', 'manager/scheduler/specialEvents.tpl', 34, false),array('modifier', 'date_format', 'manager/scheduler/specialEvents.tpl', 37, false),)), $this); ?>
<?php echo ''; ?><?php $this->assign('pageTitle', "manager.scheduler.specialEvents"); ?><?php echo ''; ?><?php $this->assign('pageId', "manager.scheduler.specialEvents"); ?><?php echo ''; ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php echo ''; ?>


<br />

<div id="specialEvents">
<table width="100%" class="listing">
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
	<tr class="heading" valign="bottom">
		<td width="50%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.specialEvent.name"), $this);?>
</td>
		<td width="35%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.date"), $this);?>
</td>
		<td width="15%"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.action"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="headseparator">&nbsp;</td>
	</tr>
<?php $this->_tag_stack[] = array('iterate', array('from' => 'specialEvents','item' => 'specialEvent')); $_block_repeat=true;$this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], null, $this, $_block_repeat);while ($_block_repeat) { ob_start(); ?>
	<tr valign="top">
		<td><?php echo ((is_array($_tmp=$this->_tpl_vars['specialEvent']->getSpecialEventName())) ? $this->_run_mod_handler('escape', true, $_tmp) : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp)); ?>
</td>
		<td>
			<?php if ($this->_tpl_vars['specialEvent']->getStartTime()): ?>
				<?php echo ((is_array($_tmp=$this->_tpl_vars['specialEvent']->getStartTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['dateFormatShort']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['dateFormatShort'])); ?>

				<?php echo ((is_array($_tmp=$this->_tpl_vars['specialEvent']->getStartTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeFormat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeFormat'])); ?>
<?php if ($this->_tpl_vars['specialEvent']->getEndTime()): ?>&nbsp;&ndash;&nbsp;<?php echo ((is_array($_tmp=$this->_tpl_vars['specialEvent']->getEndTime())) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['timeFormat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['timeFormat'])); ?>
<?php endif; ?>
			<?php endif; ?>
		</td>
		<td><a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'editSpecialEvent','path' => $this->_tpl_vars['specialEvent']->getId()), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.edit"), $this);?>
</a>&nbsp;|&nbsp;<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'deleteSpecialEvent','path' => $this->_tpl_vars['specialEvent']->getId()), $this);?>
" onclick="return confirm('<?php echo ((is_array($_tmp=$this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.specialEvent.confirmDelete"), $this))) ? $this->_run_mod_handler('escape', true, $_tmp, 'jsparam') : $this->_plugins['modifier']['escape'][0][0]->smartyEscape($_tmp, 'jsparam'));?>
')" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "common.delete"), $this);?>
</a></td>
	</tr>
	<tr>
		<td colspan="3" class="<?php if ($this->_tpl_vars['specialEvents']->eof()): ?>end<?php endif; ?>separator">&nbsp;</td>
	</tr>
<?php $_block_content = ob_get_contents(); ob_end_clean(); $_block_repeat=false;echo $this->_plugins['block']['iterate'][0][0]->smartyIterate($this->_tag_stack[count($this->_tag_stack)-1][1], $_block_content, $this, $_block_repeat); }  array_pop($this->_tag_stack); ?>
<?php if ($this->_tpl_vars['specialEvents']->wasEmpty()): ?>
	<tr>
		<td colspan="3" class="nodata"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.specialEvent.noneCreated"), $this);?>
</td>
	</tr>
	<tr>
		<td colspan="3" class="endseparator">&nbsp;</td>
	</tr>
<?php else: ?>
	<tr>
		<td align="left"><?php echo $this->_plugins['function']['page_info'][0][0]->smartyPageInfo(array('iterator' => $this->_tpl_vars['specialEvents']), $this);?>
</td>
		<td colspan="2" align="right"><?php echo $this->_plugins['function']['page_links'][0][0]->smartyPageLinks(array('anchor' => 'specialEvents','name' => 'specialEvents','iterator' => $this->_tpl_vars['specialEvents']), $this);?>
</td>
	</tr>
<?php endif; ?>
</table>

<a href="<?php echo $this->_plugins['function']['url'][0][0]->smartyUrl(array('op' => 'createSpecialEvent'), $this);?>
" class="action"><?php echo $this->_plugins['function']['translate'][0][0]->smartyTranslate(array('key' => "manager.scheduler.specialEvent.create"), $this);?>
</a>
</div>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "common/footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>