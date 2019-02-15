<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:26:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewTax.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c64291415ee77_16516240',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41e14589e4dde19334794f024d959977b0d8175e' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/inventoryfields/EditViewTax.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c64291415ee77_16516240 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('VALUE', $_smarty_tpl->tpl_vars['FIELD']->value->getValue($_smarty_tpl->tpl_vars['ITEM_VALUE']->value));
?><div class="input-group input-group-sm"><input name="tax<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditValue($_smarty_tpl->tpl_vars['VALUE']->value);?>
" type="text" class="tax form-control form-control-sm js-tax" readonly="readonly" data-js="data-default-tax|value"/><?php if ($_smarty_tpl->tpl_vars['TAXS_CONFIG']->value['taxs'][0] != '') {?><input name="taxparam<?php echo $_smarty_tpl->tpl_vars['ROW_NO']->value;?>
" type="hidden" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxparam']);?>
" class="taxParam" <?php if ($_smarty_tpl->tpl_vars['FIELD']->value->get('displaytype') == 10) {?>readonly="readonly"<?php }?> /><span class="input-group-append u-cursor-pointer changeTax <?php if ($_smarty_tpl->tpl_vars['ITEM_DATA']->value['taxmode'] == 0) {?>d-none<?php }?>"><div class="input-group-text"><span class="fa-layers fa-fw"><i class="fas fa-circle" data-fa-transform="grow-6"></i><i class="fa-inverse fas fa-long-arrow-alt-up text-white" data-fa-transform="shrink-6  left-4"></i><i class="fa-inverse fas fa-percent text-white" data-fa-transform="shrink-8  right-3"></i></span></div></span><?php }?></div>
<?php }
}
