<?php
/* Smarty version 3.1.31, created on 2019-02-13 15:04:06
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/QuickCreate.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6431e62fec49_08596926',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '51d577765c27b129048f93cdf505f73971ffc4c6' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/QuickCreate.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6431e62fec49_08596926 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SCRIPTS']->value, 'jsModel', false, 'index');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['index']->value => $_smarty_tpl->tpl_vars['jsModel']->value) {
echo '<script'; ?>
 type="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getType();?>
" src="<?php echo $_smarty_tpl->tpl_vars['jsModel']->value->getSrc();?>
"><?php echo '</script'; ?>
><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
?><div class="tpl-QuickCreate modelContainer modal quickCreateContainer" tabindex="-1" role="dialog"><div class="modal-dialog modal-lg modal-full" role="document"><div class="modal-content"><form class="form-horizontal recordEditView" name="QuickCreate" method="post" action="index.php"><div class="modal-header col-12 m-0 align-items-center form-row d-flex justify-content-between pb-1"><div class="col-xl-6 col-12"><h5 class="modal-title form-row text-center text-xl-left mb-2 mb-xl-0"><span class="col-12"><span class="fas fa-plus mr-1"></span><strong class="mr-1"><?php echo \App\Language::translate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
:</strong><strong class="text-uppercase"><span class="userIcon-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
 mx-1"></span><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SINGLE_MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></span></h5></div><div class="col-xl-6 col-12 text-center text-xl-right"><?php $_smarty_tpl->_assignInScope('EDIT_VIEW_URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getCreateRecordUrl());
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICKCREATE_LINKS']->value['QUICKCREATE_VIEW_HEADER'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'quickcreateViewHeader'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<button class="btn btn-outline-secondary mr-0 mr-md-1 mb-2 mb-md-0 col-12 col-md-4 u-text-ellipsis" id="goToFullForm" data-edit-view-url="<?php echo $_smarty_tpl->tpl_vars['EDIT_VIEW_URL']->value;?>
" type="button"><strong><?php echo \App\Language::translate('LBL_GO_TO_FULL_FORM',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="btn btn-success col-12 col-md-1 mb-2 mb-md-0" type="submit" title="<?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><strong><span class="fas fa-check"></span></strong></button><button class="cancelLink btn btn-danger col-12 col-md-1 ml-0 ml-md-1" aria-hidden="true" data-dismiss="modal" type="button" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span class="fas fa-times"></span></button></div></div><?php if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)) {?><input type="hidden" name="picklistDependency" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'/><?php }
if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
'/><?php }?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="action" value="SaveAjax"/><div class="quickCreateContent"><div class="modal-body m-0"><div class="massEditTable border-0 px-1 mx-auto m-0"><div class="px-0 m-0 form-row d-flex justify-content-center"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {?></div><div class="col-12 form-row d-flex justify-content-center px-0 m-0"><?php $_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="col-md-6 py-2 form-row d-flex justify-content-center px-0 m-0 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 "><div class="fieldLabel col-lg-12 col-xl-3 pl-0 text-lg-left text-xl-right u-text-ellipsis"><?php $_smarty_tpl->_assignInScope('HELPINFO', explode(',',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo')));
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', (($_smarty_tpl->tpl_vars['MODULE']->value).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
?><label class="text-right muted small font-weight-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if (in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['HELPINFO']->value) && \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo') != $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right" title="" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo');?>
" data-original-title='<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
'><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label></div><div class="fieldValue col-lg-12 col-xl-9 px-0 px-sm-1"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 1) {?><div class="col-md-6 form-row align-items-center p-1 <?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 px-0"></div><?php }?></div></div></div></div><?php if (!empty($_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value)) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['SOURCE_RELATED_FIELD']->value, 'RELATED_FIELD_MODEL', false, 'RELATED_FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value => $_smarty_tpl->tpl_vars['RELATED_FIELD_MODEL']->value) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['RELATED_FIELD_NAME']->value;?>
" value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['RELATED_FIELD_MODEL']->value->get('fieldvalue'));?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['RELATED_FIELD_MODEL']->value->getFieldDataType();?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?></form></div></div></div>
<?php }
}
