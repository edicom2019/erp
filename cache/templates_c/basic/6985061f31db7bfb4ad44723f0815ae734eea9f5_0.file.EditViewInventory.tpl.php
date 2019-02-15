<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:27
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/EditViewInventory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642913ee2402_91188642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6985061f31db7bfb4ad44723f0815ae734eea9f5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/EditViewInventory.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642913ee2402_91188642 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('INVENTORY_FIELD', Vtiger_InventoryField_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value));
$_smarty_tpl->_assignInScope('FIELDS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getFields(true));
if (count($_smarty_tpl->tpl_vars['FIELDS']->value[0]) != 0 && count($_smarty_tpl->tpl_vars['FIELDS']->value[1]) != 0) {
$_smarty_tpl->_assignInScope('DISCOUNTS_CONFIG', Vtiger_Inventory_Model::getDiscountsConfig());
$_smarty_tpl->_assignInScope('TAXS_CONFIG', Vtiger_Inventory_Model::getTaxesConfig());
$_smarty_tpl->_assignInScope('TAX_DEFAULT', Vtiger_Inventory_Model::getDefaultGlobalTax());
$_smarty_tpl->_assignInScope('BASE_CURRENCY', Vtiger_Util_Helper::getBaseCurrency());
$_smarty_tpl->_assignInScope('COLUMNS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getColumns());
$_smarty_tpl->_assignInScope('INVENTORY_ROWS', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryData());
$_smarty_tpl->_assignInScope('MAIN_PARAMS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getMainParams($_smarty_tpl->tpl_vars['FIELDS']->value[1]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS0', count($_smarty_tpl->tpl_vars['FIELDS']->value[0]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS1', count($_smarty_tpl->tpl_vars['FIELDS']->value[1]));
$_smarty_tpl->_assignInScope('COUNT_FIELDS2', count($_smarty_tpl->tpl_vars['FIELDS']->value[2]));
$_smarty_tpl->_assignInScope('IS_OPTIONAL_ITEMS', AppConfig::module($_smarty_tpl->tpl_vars['MODULE']->value,'INVENTORY_IS_OPTIONAL'));
if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {
if (count($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value) > 0) {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['currency']);
} else {
$_smarty_tpl->_assignInScope('CURRENCY', $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id']);
}
$_smarty_tpl->_assignInScope('CURRENCY_SYMBOLAND', vtlib\Functions::getCurrencySymbolandRate($_smarty_tpl->tpl_vars['CURRENCY']->value));
}
$_smarty_tpl->_assignInScope('INVENTORY_ITEMS_NO', count($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value));
?><input type="hidden" class="aggregationTypeDiscount" value="<?php echo $_smarty_tpl->tpl_vars['DISCOUNTS_CONFIG']->value['aggregation'];?>
"><input type="hidden" class="aggregationTypeTax" value="<?php echo $_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['aggregation'];?>
"><input name="inventoryItemsNo" id="inventoryItemsNo" type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['INVENTORY_ITEMS_NO']->value) {
echo $_smarty_tpl->tpl_vars['INVENTORY_ITEMS_NO']->value;
} else { ?>1<?php }?>"/><input id="accountReferenceField" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getReferenceField();?>
"/><input id="inventoryLimit" type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['MAIN_PARAMS']->value['limit'];?>
"/><div class="table-responsive mx-1"><table class="table table-bordered inventoryHeader blockContainer mb-0"><thead><tr data-rownumber="0" class="d-flex u-min-w-650px"><th class="btn-toolbar col-3 d-flex justify-content-center mb-0 border-bottom-0 p-2"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MAIN_PARAMS']->value['modules'], 'MAIN_MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MAIN_MODULE']->value) {
if (\App\Module::isModuleActive($_smarty_tpl->tpl_vars['MAIN_MODULE']->value)) {
$_smarty_tpl->_assignInScope('CRMENTITY', CRMEntity::getInstance($_smarty_tpl->tpl_vars['MAIN_MODULE']->value));
?><span class="btn-group-sm d-flex align-items-center justify-content-center ml-lg-2"><button type="button" data-module="<?php echo $_smarty_tpl->tpl_vars['MAIN_MODULE']->value;?>
"data-field="<?php echo $_smarty_tpl->tpl_vars['CRMENTITY']->value->table_index;?>
"data-wysiwyg="<?php echo $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->isWysiwygType($_smarty_tpl->tpl_vars['MAIN_MODULE']->value);?>
"class="btn btn-light addItem border mb-1 mb-lg-0"><span class="fas fa-plus"></span> &nbsp;<strong>Ajouter</strong></button></span><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[0], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th class="<?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?>d-none <?php }?>col-3 border-bottom-0"><span class="inventoryLineItemHeader"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>&nbsp;&nbsp;<?php $_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('EditView',$_smarty_tpl->tpl_vars['MODULE']->value)));
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0][$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead></table></div><div class="table-responsive mx-1"><table class="table blockContainer inventoryItems" data-isoptional="<?php echo $_smarty_tpl->tpl_vars['IS_OPTIONAL_ITEMS']->value;?>
"><?php if (count($_smarty_tpl->tpl_vars['FIELDS']->value[1]) != 0) {?><thead><tr><th class="text-center u-w-1per-45px"></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();?>
 <?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> text-center text-nowrap u-w-3per-150px"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><?php }?><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'ITEM_DATA', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM_DATA']->value) {
$_smarty_tpl->_assignInScope('ROW_NO', $_smarty_tpl->tpl_vars['KEY']->value+1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewInventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
} else {
if (!$_smarty_tpl->tpl_vars['IS_OPTIONAL_ITEMS']->value) {
$_smarty_tpl->_assignInScope('ROW_NO', 1);
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewInventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody><tfoot><tr><td colspan="1" class="hideTd">&nbsp;&nbsp;</td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value[1], 'FIELD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD']->value) {
?><td colspan="1" class="col<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getName();
if (!$_smarty_tpl->tpl_vars['FIELD']->value->isEditable()) {?> d-none<?php }?> text-right<?php if (!$_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {?> hideTd<?php } else { ?> wisableTd<?php }?>"data-sumfield="<?php echo lcfirst($_smarty_tpl->tpl_vars['FIELD']->value->get('invtype'));?>
"><?php if ($_smarty_tpl->tpl_vars['FIELD']->value->isSummary()) {
$_smarty_tpl->_assignInScope('SUM', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'ITEM_VALUE', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['ITEM_VALUE']->value) {
$_smarty_tpl->_assignInScope('SUM', ($_smarty_tpl->tpl_vars['SUM']->value+$_smarty_tpl->tpl_vars['ITEM_VALUE']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
echo CurrencyField::convertToUserFormat($_smarty_tpl->tpl_vars['SUM']->value,null,true);
}
if ($_smarty_tpl->tpl_vars['FIELD']->value->getName() == 'Name' && in_array("price",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {
echo \App\Language::translate('LBL_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);
}?></td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></tfoot></table></div><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewInventorySummary.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
$_smarty_tpl->_assignInScope('ITEM_DATA', $_smarty_tpl->tpl_vars['RECORD']->value->getInventoryDefaultDataFields());
?><table id="blackIthemTable" class="noValidate d-none"><tbody><?php $_smarty_tpl->_assignInScope('ROW_NO', '_NUM_');
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewInventoryItem.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</tbody></table><?php }
}
}
