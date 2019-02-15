<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:32:50
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/EditHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642a92a6a692_40275851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3c7d487f549227f87f7567379678199518f90984' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/MappedFields/EditHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642a92a6a692_40275851 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="widget_header row"><div class="col-12"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><div class="editContainer col-md-12 paddingLRZero"><div id="breadcrumb"><ul class="crumbs marginLeftZero"><li class="first step zIndex8" id="step1"><a><span class="stepNum">1</span><span class="stepText"><?php echo \App\Language::translate('LBL_MF_SETTINGS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex7" id="step2"><a><span class="stepNum">2</span><span class="stepText"><?php echo \App\Language::translate('LBL_MAPPING_LIST',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex3" id="step3"><a><span class="stepNum">3</span><span class="stepText"><?php echo \App\Language::translate('LBL_EXCEPTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li><li class="step zIndex2" id="step4"><a><span class="stepNum">4</span><span class="stepText"><?php echo \App\Language::translate('LBL_PERMISSIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</span></a></li></ul></div><div class="clearfix"></div></div>
<?php }
}
