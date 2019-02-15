<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:37
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewInventorySummary.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d85168b5a6_84844051',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa0920912c36cabf0d4147d22f1309ff38d69c6a' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/DetailViewInventorySummary.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d85168b5a6_84844051 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value, 'INVENTORY_ROW', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['INVENTORY_ROW']->value) {
$_smarty_tpl->_assignInScope('DISCOUNT', $_smarty_tpl->tpl_vars['DISCOUNT']->value+$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['discount']);
$_smarty_tpl->_assignInScope('TAXS', $_smarty_tpl->tpl_vars['INVENTORY_FIELD']->value->getTaxParam($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['taxparam'],$_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['net'],$_smarty_tpl->tpl_vars['TAXS']->value));
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class="row"><?php if (in_array("discount",$_smarty_tpl->tpl_vars['COLUMNS']->value) && in_array("discountmode",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th><img src="<?php echo \App\Layout::getImagePath('Discount24.png');?>
" alt="<?php echo \App\Language::translate('LBL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" />&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_DISCOUNTS_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><tr><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['DISCOUNT']->value,false,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol'],true);?>
</td></tr></tbody></table></div><?php }
if (in_array("tax",$_smarty_tpl->tpl_vars['COLUMNS']->value) && in_array("taxmode",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th colspan="2"><img src="<?php echo \App\Layout::getImagePath('Tax24.png');?>
" alt="<?php echo \App\Language::translate('LBL_TAX',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" />&nbsp;&nbsp;<strong><?php echo \App\Language::translate('LBL_TAX_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAXS']->value, 'TAX', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->_assignInScope('TAX_AMOUNT', $_smarty_tpl->tpl_vars['TAX_AMOUNT']->value+$_smarty_tpl->tpl_vars['TAX']->value);
?><tr><td class="textAlignRight" width='70px'><?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
%</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX']->value,false,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol']);?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<tr><td class="textAlignRight" width='70px'><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX_AMOUNT']->value,false,$_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol']);?>
</td></tr></tbody></table></div><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value) && $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['id'] != $_smarty_tpl->tpl_vars['CURRENCY']->value) {
$_smarty_tpl->_assignInScope('CURRENCY_PARAM', json_decode($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['currencyparam'],true));
$_smarty_tpl->_assignInScope('RATE', $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value[$_smarty_tpl->tpl_vars['CURRENCY']->value]['value']);
?><div class="col-md-4"><table class="table table-bordered inventorySummaryContainer"><thead><tr><th colspan="2"><strong><?php echo \App\Language::translate('LBL_CURRENCIES_SUMMARY',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></th></tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TAXS']->value, 'TAX', false, 'KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['KEY']->value => $_smarty_tpl->tpl_vars['TAX']->value) {
$_smarty_tpl->_assignInScope('CURRENY_AMOUNT', $_smarty_tpl->tpl_vars['CURRENY_AMOUNT']->value+$_smarty_tpl->tpl_vars['TAX']->value);
?><tr><td class="textAlignRight" width='70px'><?php echo $_smarty_tpl->tpl_vars['KEY']->value;?>
%</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['TAX']->value*$_smarty_tpl->tpl_vars['RATE']->value,false,$_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'],true);?>
</td></tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<tr><td class="textAlignRight" width='70px'><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</td><td class="textAlignRight"><?php echo CurrencyField::convertToUserFormatSymbol($_smarty_tpl->tpl_vars['CURRENY_AMOUNT']->value*$_smarty_tpl->tpl_vars['RATE']->value,false,$_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'],true);?>
</td></tr></tbody></table></div><?php }
}?></div>
<?php }
}
