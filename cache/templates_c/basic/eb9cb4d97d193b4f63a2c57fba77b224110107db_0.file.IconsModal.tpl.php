<?php
/* Smarty version 3.1.31, created on 2019-02-14 10:55:40
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/IconsModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c65492c88fa41_44529118',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eb9cb4d97d193b4f63a2c57fba77b224110107db' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Vtiger/IconsModal.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c65492c88fa41_44529118 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_SELECT_ICON',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button></div><div class="modal-body col-md-12"><input type="hidden" id="iconType" value="-"/><input type="hidden" id="iconName" value="-"/><div><select class="form-control" id="iconsList" name="type"><option value="">-</option><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Vtiger_Icons_Model::getUserIcon(), 'CLASS', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['CLASS']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-class="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-type="icon" title="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Vtiger_Icons_Model::getAdminIcon(), 'CLASS', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['CLASS']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-class="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-type="icon" title="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Vtiger_Icons_Model::getAdditionalIcon(), 'CLASS', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['CLASS']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-class="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-type="icon" title="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Vtiger_Icons_Model::getFontAwesomeIcon(), 'CLASS', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['CLASS']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-class="<?php echo $_smarty_tpl->tpl_vars['CLASS']->value;?>
" data-type="icon" title="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, Settings_Vtiger_Icons_Model::getImageIcon(), 'URL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['URL']->value) {
?><option value="<?php echo \Vtiger_Theme::getImagePath($_smarty_tpl->tpl_vars['URL']->value);?>
" data-type="image"title="<?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['NAME']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select></div><br/><div><div class="row"><div class="col-md-3"><?php echo \App\Language::translate('LBL_ICON_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-9"><div class="iconName"></div></div></div><div class="row"><div class="col-md-3"><?php echo \App\Language::translate('LBL_ICON_EXAMPLE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
:</div><div class="col-md-9"><div class="iconExample" style="font-size: 32px;"></div></div></div></div></div><div class="modal-footer"><button class="btn btn-success" type="submit" name="saveButton" data-dismiss="modal"><span class="fas fa-check mr-1"></span><strong><?php echo \App\Language::translate('LBL_SELECT_OPTION',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-danger" type="reset" data-dismiss="modal"><span class="fas fa-times mr-1"></span><strong><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div>
<?php }
}
