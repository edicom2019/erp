<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:32:43
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Import.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642a8b540217_40021380',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60979cfc77f3c230fd45bf572f9ce7a2927d3f9f' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/Import.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642a8b540217_40021380 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="modal-header"><h5 class="modal-title"><span class="fas fa-download mr-1"></span><?php echo \App\Language::translate('LBL_IMPORT_VIEW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><form name="importTemplate" action="index.php" method="post" class="form-horizontal" enctype="multipart/form-data"><div class="modal-body"><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="module" value="MappedFields" /><input type="hidden" name="action" value="SaveAjax" /><input type="hidden" name="mode" value="import" /><div class="form-group"><label class="col-sm-3 col-form-label"><?php echo \App\Language::translate('LBL_TEMPLATE_XML',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label><div class="col-sm-8 controls"><input type="file" name="imported_xml" accept="text/xml" class="form-control" data-validation-engine='validate[required]' id="imported_xml" /></div></div></div><div class="modal-footer"><div class="float-right"><button class="btn btn-success mr-1" type="submit"><strong><span class="fas fa-download mr-1"></span><?php echo \App\Language::translate('LBL_UPLOAD_TEMPLATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button type="button" class="btn btn-danger dismiss" data-dismiss="modal"><span class="fas fa-times mr-1"></span><?php echo \App\Language::translate('LBL_CLOSE',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button></div></div></form>
<?php }
}
