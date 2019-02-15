<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewInventoryView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8515c6551_63023124',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c5b5c8a51563c0a68c955bd2dcb3bb435cddebc3' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewInventoryView.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8515c6551_63023124 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('INVENTORY_FIELD', Vtiger_InventoryField_Model::getInstance($_smarty_tpl->tpl_vars['MODULE_NAME']->value));
$_smarty_tpl->_assignInScope('FIELDS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getFields(true,array(),'Detail'));
if (count($_smarty_tpl->tpl_vars['FIELDS']->value) != 0) {
$_smarty_tpl->_assignInScope('COLUMNS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getColumns());
$_smarty_tpl->_assignInScope('INVENTORY_ROWS', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('MAIN_PARAMS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getMainParams($_smarty_tpl->tpl_vars['FIELDS']->value[1]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS0', count($_smarty_tpl->tpl_vars['FIELDS']->value[0]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS1', count($_smarty_tpl->tpl_vars['FIELDS']->value[1]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS2', count($_smarty_tpl->tpl_vars['FIELDS']->value[2]));
$_smarty_tpl->_assignInScope('BASE_CURRENCY', Vtiger_Util_Helper::getBaseCurrency());
if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {
if (count($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value) > 0 && $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['currency'] != NULL) {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['currency']);
} else {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id']);
}
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOLAND', vtlib\Functions::getCurrencySymbolandRate($_smarty_tpl->tpl_vars['CURRENCY']->value));
}
if (count($_smarty_tpl->tpl_vars['FIELDS']->value[0]) != 0) {?><table class="table table-bordered inventoryHeader blockContainer"><thead><tr><th style="width: 40%;"></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[0], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th><span class="inventoryLineItemHeader"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
:</span>&nbsp;<?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0][$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead></table><?php }
$_smarty_tpl->_assignInScope('FIELDS_TEXT_ALIGN_RIGHT', array('TotalPrice','Tax','MarginP','Margin','Purchase','Discount','NetPrice','GrossPrice','UnitPrice','Quantity'));
?><table class="table blockContainer inventoryItems"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('colspan') != 0) {?> style="width: <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('colspan');?>
%" <?php }?> class="textAlignCenter"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'INVENTORY_ROW', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
$_smarty_tpl->_assignInScope('ROW_NO', $_smarty_tpl->tpl_vars['KEY']->value+1);
if ($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']) {
$_smarty_tpl->_assignInScope('ROW_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']));
}?><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><td <?php if (in_array($_smarty_tpl->tpl_vars['FIELD']->value->getName(),$_smarty_tpl->tpl_vars['FIELDS_TEXT_ALIGN_RIGHT']->value)) {?>class="textAlignRight"<?php }?>><?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['MODULE_NAME']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody><tfoot><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><td <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('colspan') != 0) {?> style="width: <?php echo $_smarty_tpl->tpl_vars['FIELD']->value->get('colspan');?>
%" <?php }?>  class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
 textAlignRight <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {?>hideTd<?php } else { ?>wisableTd<?php }?>" data-sumfield="<?php echo lcfirst($_smarty_tpl->tpl_vars['FIELD']->value->get('invtype'));?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {
$_smarty_tpl->_assignInScope('SUM', $_smarty_tpl->tpl_vars['FIELD']->value->getSummaryValuesFromData($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['SUM']->value,null,true);
}?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></tfoot></table><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('DetailViewInventorySummary.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
}
