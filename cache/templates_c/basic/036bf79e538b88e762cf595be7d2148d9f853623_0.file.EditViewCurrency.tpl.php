<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\inventoryfields\EditViewCurrency.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc436be825_78938845',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '036bf79e538b88e762cf595be7d2148d9f853623' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\inventoryfields\\EditViewCurrency.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc436be825_78938845 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('CURRENCIES', vtlib\Functions::getAllCurrency(true));
$_smarty_tpl->_assignInScope('SELECTED_CURRENCY', $_smarty_tpl->tpl_vars['ITEM_VALUE']->value);
$_smarty_tpl->_assignInScope('FIELD_PARAMS', \App\Json::decode($_smarty_tpl->tpl_vars['FIELD']->value->get('params')));
if ($_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value == '') {
$_smarty_tpl->_assignInScope('USER_CURRENCY_ID', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_id'));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CURRENCY']->value) {
if ($_smarty_tpl->tpl_vars['CURRENCY']->value['id'] == $_smarty_tpl->tpl_vars['USER_CURRENCY_ID']->value) {
$_smarty_tpl->_assignInScope('SELECTED_CURRENCY', $_smarty_tpl->tpl_vars['CURRENCY']->value['id']);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('CURRENCY_PARAMS', $_smarty_tpl->tpl_vars['FIELD']->value->getCurrencyParam($_smarty_tpl->tpl_vars['CURRENCIES']->value));
} else {
$_smarty_tpl->_assignInScope('CURRENCY_PARAMS', $_smarty_tpl->tpl_vars['FIELD']->value->getCurrencyParam($_smarty_tpl->tpl_vars['CURRENCIES']->value,$_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['currencyparam']));
}?><input name="currencyparam" type="hidden" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value));?>
" class="currencyparam" /><select class="select2" data-minimum-results-for-search="-1" data-old-value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getColumnName();?>
"title="<?php echo \App\Language::translate('LBL_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?>><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CURRENCIES']->value, 'CURRENCY', false, 'count');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['count']->value => $_smarty_tpl->tpl_vars['CURRENCY']->value) {
$_smarty_tpl->_assignInScope('CURRENCY_PARAM', $_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value[$_smarty_tpl->tpl_vars['CURRENCY']->value['id']]);
?><option value="<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['id'];?>
" class="textShadowNone" data-conversion-rate="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value['conversion'];?>
" data-conversion-date="<?php echo $_smarty_tpl->tpl_vars['CURRENCY_PARAM']->value['date'];?>
"data-conversion-symbol="<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];?>
" data-base-currency="<?php if ($_smarty_tpl->tpl_vars['CURRENCY']->value['defaultid'] < 0) {?>1<?php } else { ?>0<?php }?>"<?php if ($_smarty_tpl->tpl_vars['SELECTED_CURRENCY']->value == $_smarty_tpl->tpl_vars['CURRENCY']->value['id']) {?>selected<?php }?>><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CURRENCY']->value['currency_name'],$_smarty_tpl->tpl_vars['MODULE']->value);?>
 (<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value['currency_symbol'];?>
)</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="modelContainer modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header contentsBackground"><h5 class="modal-title"><span class="fas fa-euro-sign mr-1"></span><?php echo \App\Language::translate('LBL_CHANGE_CURRENCY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value == false) {?><div class="alert alert-warning" role="alert"><?php echo \App\Language::translate('LBL_NO_EXCHANGE_RATES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><?php } else { ?><div class="alert alert-warning" role="alert"><?php echo \App\Language::translate('LBL_CHANGE_CURRENCY_INFO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div><?php echo \App\Language::translate('Currency Name',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <strong class="currencyName"></strong></div><div><?php echo \App\Language::translate('LBL_EXCHANGE_DATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
: <strong class="currencyDate"></strong></div><div><div class="input-group"><span class="input-group-prepend"><span class="input-group-text"><?php echo \App\Language::translate('LBL_EXCHANGE_RATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</span></span><input type="text" class="form-control currencyRate" value="" aria-label="<?php echo \App\Language::translate('LBL_EXCHANGE_RATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"<?php if ($_smarty_tpl->tpl_vars['FIELD_PARAMS']->value['type'] == '1') {?>readonly="readonly"<?php }?>><span class="input-group-append"><span class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</span></span></div></div><?php }?><div class="modal-footer"><?php if ($_smarty_tpl->tpl_vars['CURRENCY_PARAMS']->value != false) {?><button class="btn btn-success" type="submit"><strong><span class="fas fa-check mr-1"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><?php }?><button class="btn btn-danger" type="reset" data-dismiss="modal"><strong><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CANCEL',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button></div></div></div></div>
<?php }
}
