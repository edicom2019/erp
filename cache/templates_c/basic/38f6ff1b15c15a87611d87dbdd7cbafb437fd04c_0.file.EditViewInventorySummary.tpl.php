<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:06:43
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\EditViewInventorySummary.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cc43acd998_23933452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '38f6ff1b15c15a87611d87dbdd7cbafb437fd04c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\EditViewInventorySummary.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cc43acd998_23933452 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="row"><?php if (in_array("discount",$_smarty_tpl->tpl_vars['COLUMNS']->value) && in_array("discountmode",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryDiscounts"><div class="card-header"><div class="form-row"><div class="col-12 col-lg-9 mb-1 p-0 u-text-ellipsis"><span class="fa-layers fa-fw mr-2 "><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-long-arrow-alt-down text-white" data-fa-transform="shrink-6 left-4"></i><i class="fa-inverse fas fa-percent text-white" data-fa-transform="shrink-8 right-3"></i></span><strong><?php echo \App\Language::translate('LBL_DISCOUNTS_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div><div class="col-12 col-lg-3 p-0 groupDiscount changeDiscount  <?php if (isset($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]) && $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['discountmode'] == '1') {?>d-none<?php }?>"><button type="button" class="btn btn-primary btn-sm c-btn-block-md-down float-right"><?php echo \App\Language::translate('LBL_SET_GLOBAL_DISCOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div class="card-body js-panel__body m-0 p-0" data-js=”value”><div class="form-group p-1 m-0"><div class="input-group"><input type="text" class="form-control text-right" readonly="readonly"/><div class="input-group-append"><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol'];?>
</div><?php }?></div></div></div></div></div></div><?php }
if (in_array("tax",$_smarty_tpl->tpl_vars['COLUMNS']->value) && in_array("taxmode",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryTaxes"><div class="card-header"><div class="form-row"><div class="col-12 col-lg-9 mb-1 p-0 u-text-ellipsis"><span class="fa-layers fa-fw mr-2"><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-long-arrow-alt-up text-white" data-fa-transform="shrink-6 left-4"></i><i class="fa-inverse fas fa-percent text-white" data-fa-transform="shrink-8 right-3"></i></span><strong><?php echo \App\Language::translate('LBL_TAX_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div><div class="col-12 col-lg-3 p-0 groupTax changeTax <?php if (isset($_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]) && $_smarty_tpl->tpl_vars['INVENTORY_ROWS']->value[0]['taxmode'] == '1') {?>d-none<?php }?>"><button type="button" class="btn btn-primary btn-sm float-right c-btn-block-md-down"><?php echo \App\Language::translate('LBL_SET_GLOBAL_TAX',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div></div></div><div class="card-body js-panel__body p-0 m-0 js-default-tax" data-js="data-tax-default-value|value" data-tax-default-value="<?php echo $_smarty_tpl->tpl_vars['TAX_DEFAULT']->value['value'];?>
"></div><div class="card-footer js-panel__footer p-1 m-0 " data-js=”value”><div class="form-group m-0 p-0"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><input type="text" class="form-control text-right" readonly="readonly"/><div class="input-group-append"><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol'];?>
</div><?php }?></div></div></div></div><div class="d-none"><div class="form-group m-1"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"></div></div><input type="text" class="form-control text-right" readonly="readonly"/><div class="input-group-append"><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="input-group-text currencySymbol"><?php echo $_smarty_tpl->tpl_vars['CURRENCY_SYMBOLAND']->value['symbol'];?>
</div><?php }?></div></div></div></div></div></div><div class="col-md-4"><div class="card mb-3 mb-md-0 inventorySummaryContainer inventorySummaryCurrencies"><div class="card-header u-text-ellipsis"><span class="fa-layers fa-fw mr-2"><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-dollar-sign text-white" data-fa-transform="shrink-4"></i></span><strong><?php echo \App\Language::translate('LBL_CURRENCIES_SUMMARY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></div><div class="card-body js-panel__body p-0 m-0"></div><div class="card-footer js-panel__footer p-1" data-js=”value”><div class="form-group m-0 p-0"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"><?php echo \App\Language::translate('LBL_AMOUNT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div></div><input type="text" class="form-control text-right" readonly="readonly"/><div class="input-group-append"><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div><div class="d-none"><div class="form-group m-1"><div class="input-group"><div class="input-group-prepend"><div class="input-group-text percent u-w-85px d-flex justify-content-center"></div></div><input type="text" class="form-control text-right" readonly="readonly"/><div class="input-group-append"><?php if (in_array("currency",$_smarty_tpl->tpl_vars['COLUMNS']->value)) {?><div class="input-group-text"><?php echo $_smarty_tpl->tpl_vars['BASE_CURRENCY']->value['currency_symbol'];?>
</div><?php }?></div></div></div></div></div></div><?php }?></div>
<?php }
}
