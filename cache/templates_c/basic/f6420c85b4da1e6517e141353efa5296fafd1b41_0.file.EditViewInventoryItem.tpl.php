<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\EditViewInventoryItem.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc43781405_77898752',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f6420c85b4da1e6517e141353efa5296fafd1b41' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\EditViewInventoryItem.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc43781405_77898752 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (!empty($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name'])) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['ITEM_DATA']->value['name']));
} elseif ($_smarty_tpl->tpl_vars['MAIN_PARAMS']->value) {
$_smarty_tpl->_assignInScope('REFERENCE_MODULE', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getDefaultModule($_smarty_tpl->tpl_vars['MAIN_PARAMS']->value));
}
if ($_smarty_tpl->tpl_vars['REFERENCE_MODULE']->value) {
$_smarty_tpl->_assignInScope('IS_VISIBLE', false);
if (isset($_smarty_tpl->tpl_vars['FIELDS']->value[2]['comment1'])) {
$_smarty_tpl->_assignInScope('IS_VISIBLE', $_smarty_tpl->tpl_vars['FIELDS']->value[2]['comment1']->isVisible);
}?><tr class="inventoryRow" numrow="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
"><td><span class="fas fa-trash-alt deleteRow u-cursor-pointer <?php if (!$_smarty_tpl->tpl_vars['IS_OPTIONAL_ITEMS']->value && $_smarty_tpl->tpl_vars['KEY']->value == 0) {?>d-none<?php }?>" title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"></span>&nbsp;&nbsp;<a class="dragHandle"><img src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0" alt="<?php echo \App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" /></a><input name="seq<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" class="sequence" /><?php if ($_smarty_tpl->tpl_vars['COUNT_FIELDS2']->value > 0) {?><br /><br /><span class="btn btn-light btn-sm toggleVisibility" data-status="<?php if ($_smarty_tpl->tpl_vars['IS_VISIBLE']->value) {?>1<?php } else { ?>0<?php }?>" href="#"><span class="fas <?php if ($_smarty_tpl->tpl_vars['IS_VISIBLE']->value) {?>fa-angle-up<?php } else { ?>fa-angle-down<?php }?>"></span></span><?php }?></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><td class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> text-right fieldValue"><?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php if ($_smarty_tpl->tpl_vars['FIELDS']->value[2] != 0) {?><tr class="inventoryRowExpanded numRow<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
 <?php if (!$_smarty_tpl->tpl_vars['IS_VISIBLE']->value) {?>d-none<?php }?>" numrowex="<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
"><td class="colExpanded" colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT_FIELDS1']->value+1;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[2], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['ITEM_DATA']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</td></tr><?php }
}
}
}
