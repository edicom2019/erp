<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:34:04
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/HelpInfo.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642adc400b00_02619613',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3113735e8337f155ee50ad9eac6d94b3a63733bb' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/HelpInfo.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642adc400b00_02619613 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal-header"><h5 class="modal-title"><span class="fas fa-info-circle mr-1"></span><?php echo App\Language::translate('LBL_CONTEXT_HELP',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
" name="field"><div class="modal-body"><div class="form-group"><label for="view-type"><?php echo \App\Language::translate('LBL_SHOW_IN_VIEWS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><select class="form-control select2" multiple name="views"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['HELP_INFO_VIEWS']->value, 'VIEW_NAME', false, 'VIEW_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VIEW_LABEL']->value => $_smarty_tpl->tpl_vars['VIEW_NAME']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VIEW_NAME']->value;?>
" <?php if (strpos($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo'),$_smarty_tpl->tpl_vars['VIEW_NAME']->value) !== false) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['VIEW_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><hr><?php $_smarty_tpl->_assignInScope('CONTEXT_HELP', (($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translate($_smarty_tpl->tpl_vars['CONTEXT_HELP']->value,'HelpInfo',$_smarty_tpl->tpl_vars['LANG_DEFAULT']->value));
if ($_smarty_tpl->tpl_vars['TRANSLATE']->value == $_smarty_tpl->tpl_vars['CONTEXT_HELP']->value) {
$_smarty_tpl->_assignInScope('TRANSLATE', '');
}?><div class="form-group"><label for="lang"><?php echo \App\Language::translate('LBL_CHOOSE_LANGUAGE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><a href="#" class="js-help-info float-right" data-toggle="popover" title="<?php echo App\Purifier::decodeHtml(\App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getModuleName()));?>
" data-placement="top" data-content="<?php echo htmlspecialchars(App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['TRANSLATE']->value));?>
" data-original-title='<?php echo $_smarty_tpl->tpl_vars['langs']->value['label'];?>
'><span class="fa fa-info-circle"></span></a><select class="form-control select2 js-lang" data-js="change" name="lang" id="lang"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'LABEL', false, 'PREFIX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value == $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?>selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LANGUAGES']->value, 'LABEL', false, 'PREFIX');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PREFIX']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
$_smarty_tpl->_assignInScope('TRANSLATE', \App\Language::translate($_smarty_tpl->tpl_vars['CONTEXT_HELP']->value,'HelpInfo',$_smarty_tpl->tpl_vars['PREFIX']->value));
?><div class="form-group js-context-block <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?> d-none <?php }?>"><textarea id="<?php echo $_smarty_tpl->tpl_vars['PREFIX']->value;?>
" name="context" <?php if ($_smarty_tpl->tpl_vars['PREFIX']->value != $_smarty_tpl->tpl_vars['LANG_DEFAULT']->value) {?> disabled <?php }?> data-js="CkEditor" class="form-control js-editor js-context-area"><?php if ($_smarty_tpl->tpl_vars['TRANSLATE']->value != $_smarty_tpl->tpl_vars['CONTEXT_HELP']->value) {
echo $_smarty_tpl->tpl_vars['TRANSLATE']->value;
}?></textarea></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class="modal-footer"><button class="btn btn-success" type="submit" name="saveButton"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></form>
<?php }
}
