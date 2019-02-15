<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:01
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/VariablePanel.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ed5742202_99879411',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c37a0ff95907bca4591d66a4cfdacbf532dd174' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/VariablePanel.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ed5742202_99879411 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (empty($_smarty_tpl->tpl_vars['TEXT_PARSER']->value)) {
$_smarty_tpl->_assignInScope('TEXT_PARSER', \App\TextParser::getInstance($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value));
}
if ($_smarty_tpl->tpl_vars['PARSER_TYPE']->value) {
$_smarty_tpl->_assignInScope('TEXT_PARSER', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->setType($_smarty_tpl->tpl_vars['PARSER_TYPE']->value));
}
if ($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value && App\Module::getEntityInfo($_smarty_tpl->tpl_vars['SELECTED_MODULE']->value)) {?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2 form-control" id="recordVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRecordVariable(), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['ITEM']->value['label'],$_smarty_tpl->tpl_vars['SELECTED_MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#recordVariable" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#recordVariable" data-copy-type="label" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php $_smarty_tpl->_assignInScope('RELATED_VARIABLE', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRelatedVariable());
if ($_smarty_tpl->tpl_vars['RELATED_VARIABLE']->value) {?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_DEPENDENT_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2 form-control" id="relatedVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_VARIABLE']->value, 'FIELDS');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELDS']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'RELATED_FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_NAME']->value;?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_FIELDS']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#relatedVariable" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#relatedVariable" data-copy-type="label" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
$_smarty_tpl->_assignInScope('SOURCE_VARIABLE', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getSourceVariable());
if ($_smarty_tpl->tpl_vars['SOURCE_VARIABLE']->value) {?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_SOURCE_MODULE_FIELDS','Other.TextParser');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2" id="sourceVariable" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_VARIABLE']->value, 'BLOCKS', false, 'SOURCE_MODULE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value => $_smarty_tpl->tpl_vars['BLOCKS']->value) {
if ($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value == 'LBL_ENTITY_VARIABLES') {?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,'Other.TextParser');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php } else {
$_smarty_tpl->_assignInScope('SOURCE_LABEL', \App\Language::translate(\App\Language::getSingularModuleName($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value),$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCKS']->value, 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo $_smarty_tpl->tpl_vars['SOURCE_LABEL']->value;?>
 - <?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'ITEM');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITEM']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_value'];?>
" data-label="<?php echo $_smarty_tpl->tpl_vars['ITEM']->value['var_label'];?>
"><?php echo $_smarty_tpl->tpl_vars['SOURCE_LABEL']->value;?>
: <?php echo $_smarty_tpl->tpl_vars['ITEM']->value['label'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#sourceVariable" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button><button type="button" class="btn btn-success clipboard" data-copy-target="#sourceVariable" data-copy-type="label" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
  - <?php echo \App\Language::translate('LBL_COPY_LABEL','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
$_smarty_tpl->_assignInScope('RELATED_LISTS', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getRelatedListVariable());
if ($_smarty_tpl->tpl_vars['RELATED_LISTS']->value) {?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_RELATED_RECORDS_LIST','Other.TextParser');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2 form-control" id="relatedLists" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_LISTS']->value, 'MODULE_LIST');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_LIST']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['label'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#relatedLists" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }
}
$_smarty_tpl->_assignInScope('BASE_LISTS', $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getBaseListVariable());
if ($_smarty_tpl->tpl_vars['BASE_LISTS']->value) {?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_RECORDS_LIST');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2" id="recordList" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BASE_LISTS']->value, 'MODULE_LIST');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MODULE_LIST']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['key'];?>
"><?php echo $_smarty_tpl->tpl_vars['MODULE_LIST']->value['label'];?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#recordList" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
 - <?php echo \App\Language::translate('LBL_COPY_VALUE','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div><?php }?><div class="col-sm-6 fieldRow row form-group align-items-center my-1"><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php echo \App\Language::translate('LBL_ADDITIONAL_VARIABLES','Other.TextParser');?>
</label><div class="medium w-100  col-lg-12 col-xl-9  fieldValue"><div class="input-group"><select class="select2 form-control" id="generalVariable" data-container-class-css="form-control" data-width="style"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['TEXT_PARSER']->value->getGeneralVariable(), 'FIELDS', false, 'BLOCK_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_NAME']->value => $_smarty_tpl->tpl_vars['FIELDS']->value) {
?><optgroup label="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_NAME']->value,'Other.TextParser');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELDS']->value, 'LABEL', false, 'VARIABLE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['VARIABLE']->value => $_smarty_tpl->tpl_vars['LABEL']->value) {
?><option value="<?php echo $_smarty_tpl->tpl_vars['VARIABLE']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LABEL']->value;?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</select><div class="input-group-append"><button type="button" class="btn btn-primary clipboard" data-copy-target="#generalVariable" title="<?php echo \App\Language::translate('LBL_COPY_TO_CLIPBOARD','Other.TextParser');?>
"><span class="fas fa-copy"></span></button></div></div></div></div>
<?php }
}
