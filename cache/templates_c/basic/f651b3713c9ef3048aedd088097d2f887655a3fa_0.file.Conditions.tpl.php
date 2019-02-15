<?php
/* Smarty version 3.1.31, created on 2019-02-14 14:14:06
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/HideBlocks/Conditions.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6577aeb34c84_72899311',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f651b3713c9ef3048aedd088097d2f887655a3fa' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/HideBlocks/Conditions.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6577aeb34c84_72899311 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-HideBlocks-Conditions targetFieldsTableContainer"><div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
echo \App\Language::translate('LBL_HIDEBLOCKS_DESCRIPTION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div></div><?php if ($_smarty_tpl->tpl_vars['MANDATORY_FIELDS']->value) {?><div class="alert alert-warning"><?php echo \App\Language::translate('LBL_MANDATORY_FIELDS_EXIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><br /><div class="float-right"><button class="btn btn-warning text-white" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-caret-left u-mr-5px"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="clearfix"></div><?php } else { ?><form method="post" action="index.php"><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
" /><input type="hidden" name="parent" value="Settings" /><input type="hidden" name="action" value="Save" /><input type="hidden" name="record" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
" /><input type="hidden" name="blockid" value="<?php echo $_smarty_tpl->tpl_vars['BLOCKID']->value;?>
" /><input type="hidden" name="enabled" value="<?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
" /><input type="hidden" name="views" value="<?php echo $_smarty_tpl->tpl_vars['VIEWS']->value;?>
" /><input type="hidden" name="conditions" class="advanced_filter" value="<?php echo $_smarty_tpl->tpl_vars['ENABLED']->value;?>
" /><div class="listViewEntriesDiv u-overflow-scroll-xs-down contents-bottomscroll" style="overflow-x: visible !important;"><div class="bottomscroll-div"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('AdvanceFilter.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value), 0, true);
?>
</div></div><br /><div class=""><div class="float-right"><button class="saveLink btn btn-success text-white" ><strong><span class="fa fa-check u-mr-5px"></span><?php echo \App\Language::translate('LBL_SAVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong></button><button class="cancelLink btn btn-warning text-white" type="reset" onclick="javascript:window.history.back();"><span class="fa fa-caret-left u-mr-5px"></span><?php echo \App\Language::translate('LBL_BACK',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</button></div><div class="clearfix"></div></div></form><?php }?></div>
<?php }
}
