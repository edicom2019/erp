<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:36:28
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/SSingleOrders/GenerateModal.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642b6c4fcc97_31806439',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b396d96e06cd08589634bd66cedb6fbcf42fc339' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/SSingleOrders/GenerateModal.tpl',
      1 => 1550057416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642b6c4fcc97_31806439 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal-header align-items-center"><h5 class="modal-title"><span class="fas fa-plus-circle mr-2"></span><?php echo \App\Language::translate('LBL_GENERATE_RECORD_FOR_MODULE',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" aria-label="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body"><?php if ($_smarty_tpl->tpl_vars['VIEW']->value == 'List') {?><input type="hidden" name="all_records" id="all_records" value="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['ALL_RECORDS']->value));?>
" /><div class="form-group form-row d-flex justify-content-center"><div class="radio-inline mr-3"><label><input type="radio" class="mr-1" name="method" id="optionsRadios1" value="0"><?php echo \App\Language::translate('LBL_AUTOGENERATE',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
&nbsp;</label><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_AUTOGENERATE_INFO',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div><div class="radio-inline"><label><input type="radio" class="mr-1" name="method" id="optionsRadios2" value="1" checked><?php echo \App\Language::translate('LBL_OPEN_NEW_WINDOWS',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
&nbsp;</label><span class="js-popover-tooltip delay0" data-js="popover" data-placement="top" data-content="<?php echo \App\Language::translate('LBL_OPEN_NEW_WINDOWS_INFO',$_smarty_tpl->tpl_vars['BASE_MODULE_NAME']->value);?>
"><span class="fas fa-info-circle"></span></span></div></div><?php }?><div class="btn-elements text-center"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEMPLATES']->value, 'TEMPLATE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['TEMPLATE']->value) {
$_smarty_tpl->_assignInScope('RELATED_MODEL', $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedModule());
?><button class="btn btn-light js-genetate-button border" data-js="click" data-id="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getName();?>
" data-url="<?php echo ($_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getCreateRecordUrl()).("&reference_id=".((string)$_smarty_tpl->tpl_vars['RECORD']->value));?>
"><span class="userIcon-<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName();?>
"></span>&nbsp;<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName(),$_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName());?>
</button><button class="btn btn-light js-genetate-button border" data-js="click" data-id="<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getId();?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getName();?>
" data-url="<?php echo ($_smarty_tpl->tpl_vars['RELATED_MODEL']->value->getCreateRecordUrl()).("&reference_id=".((string)$_smarty_tpl->tpl_vars['RECORD']->value));?>
&generateReglement=1"><span class="userIcon-<?php echo $_smarty_tpl->tpl_vars['TEMPLATE']->value->getRelatedName();?>
"></span>&nbsp;Generer Reglement</button><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div><div class="modal-footer"><div class="float-right"><button type="button" class="btn btn-warning dismiss" data-dismiss="modal"><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div>
<?php }
}
