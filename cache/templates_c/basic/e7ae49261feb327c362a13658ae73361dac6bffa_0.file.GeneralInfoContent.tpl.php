<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/GeneralInfoContent.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fe2e922_81136732',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e7ae49261feb327c362a13658ae73361dac6bffa' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/Detail/Widget/GeneralInfoContent.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fe2e922_81136732 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-GeneralInfoContent  c-detail-widget__content"><div class="table-responsive-sm"><table class="c-detail-widget__table"><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value['SUMMARY_FIELDS'], 'FIELD_MODEL', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() != 'modifiedtime' && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() != 'createdtime') {?><tr class="c-table__row--hover"><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><label class="font-weight-bold"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);
$_smarty_tpl->_assignInScope('HELPINFO', explode(',',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo')));
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', (($_smarty_tpl->tpl_vars['MODULE_NAME']->value).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
if (in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['HELPINFO']->value) && \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo') != $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info pl-1" title="" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo');?>
" data-original-title='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
'><span class="fas fa-info-circle"></span></a><?php }?></label></td><td class="fieldValue <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
"><div class="row"><div class="value col-10" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '21') {?>style="word-wrap: break-word;white-space:pre-wrap;"<?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getDetailViewTemplateName()), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value,'RECORD'=>$_smarty_tpl->tpl_vars['RECORD']->value), 0, true);
?>
</div><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isEditable() == 'true' && ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() != Vtiger_Field_Model::REFERENCE_TYPE) && $_smarty_tpl->tpl_vars['IS_AJAX_ENABLED']->value && $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isAjaxEditable() == 'true') {?><div class="d-none edit col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['FIELD_MODEL']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'boolean' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'picklist') {?><input type="hidden" class="fieldname" data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'));?>
' /><?php } else {
$_smarty_tpl->_assignInScope('FIELD_VALUE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value));
if (is_array($_smarty_tpl->tpl_vars['FIELD_VALUE']->value)) {
$_smarty_tpl->_assignInScope('FIELD_VALUE', \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_VALUE']->value));
}?><input type="hidden" class="fieldname" value='<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
' data-type="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType();?>
" data-prev-value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['FIELD_VALUE']->value);?>
' /><?php }?></div><div class="c-table__action--hover js-detail-quick-edit col-2 u-cursor-pointer" data-js="click"><div class="float-right"><span class="fas fa-edit" title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
"></span></div></div><?php }?></div></td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></div><hr><div class="d-flex flex-wrap justify-content-between"><div class="toggleViewByMode"><?php if (!$_smarty_tpl->tpl_vars['IS_READ_ONLY']->value) {
$_smarty_tpl->_assignInScope('CURRENT_VIEW', "full");
ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable3=ob_get_clean();
ob_start();
echo \App\Language::translate('LBL_COMPLETE_DETAILS',$_prefixVariable3);
$_prefixVariable4=ob_get_clean();
$_smarty_tpl->_assignInScope('CURRENT_MODE_LABEL', $_prefixVariable4);
?><button type="button" class="btn btn-outline-secondary btn-block changeDetailViewMode u-cursor-pointer"><strong><?php echo \App\Language::translate('LBL_SHOW_FULL_DETAILS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</strong></button><?php ob_start();
echo ($_smarty_tpl->tpl_vars['RECORD']->value->getDetailViewUrl()).('&mode=showDetailViewByMode&requestMode=full');
$_prefixVariable5=ob_get_clean();
$_smarty_tpl->_assignInScope('FULL_MODE_URL', $_prefixVariable5);
?><input type="hidden" name="viewMode" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_VIEW']->value;?>
" data-nextviewname="full" data-currentviewlabel="<?php echo $_smarty_tpl->tpl_vars['CURRENT_MODE_LABEL']->value;?>
" data-full-url="<?php echo $_smarty_tpl->tpl_vars['FULL_MODE_URL']->value;?>
" /><?php }?></div><div><p><small><?php echo \App\Language::translate('LBL_CREATED_ON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Fields\DateTime::formatToDay($_smarty_tpl->tpl_vars['RECORD']->value->get('createdtime'));?>
</small><br /><small><?php echo \App\Language::translate('LBL_MODIFIED_ON',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo \App\Fields\DateTime::formatToDay($_smarty_tpl->tpl_vars['RECORD']->value->get('modifiedtime'));?>
</small></p></div></div></div>
<?php }
}
