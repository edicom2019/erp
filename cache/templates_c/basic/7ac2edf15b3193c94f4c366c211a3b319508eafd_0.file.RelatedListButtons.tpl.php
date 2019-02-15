<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:35
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedListButtons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d84fdc77b0_45533911',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ac2edf15b3193c94f4c366c211a3b319508eafd' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedListButtons.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d84fdc77b0_45533911 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="col-md-12"><div class="related px-0 ml-0"><div class=""><ul class="nav nav-pills js-tabdrop"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWTAB'], 'RELATED_LINK', false, 'ITERATION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITERATION']->value => $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
?><li class="c-tab--small c-tab--hover nav-item baseLink mainNav<?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel() == $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value || ($_smarty_tpl->tpl_vars['ITERATION']->value === 0 && $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value === 'LBL_RECORD_PREVIEW')) {?> active<?php }?>" data-iteration="<?php echo $_smarty_tpl->tpl_vars['ITERATION']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-link-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('linkKey');?>
"  data-reference='<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('related');?>
' <?php if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated')) {?>data-count="<?php echo intval($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated'));?>
"<?php }?>><a href="javascript:void(0);" class="nav-link u-text-ellipsis w-auto" title="<?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable1=ob_get_clean();
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_prefixVariable1);?>
"><?php ob_start();
echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;
$_prefixVariable2=ob_get_clean();
echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_prefixVariable2);
if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('countRelated')) {?><span class="count badge badge-danger c-badge--md c-badge--top-right <?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->get('badgeClass');?>
"></span><?php }?></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<li class="spaceRelatedList d-none"><li><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DETAILVIEW_LINKS']->value['DETAILVIEWRELATED'], 'RELATED_LINK', false, 'ITERATION');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ITERATION']->value => $_smarty_tpl->tpl_vars['RELATED_LINK']->value) {
$_smarty_tpl->_assignInScope('DETAILVIEWRELATEDLINKLBL', \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel(),$_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName()));
?><li <?php if (!AppConfig::relation('SHOW_RELATED_MODULE_NAME')) {?>data-content="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
" data-placement="top"<?php }?> class="c-tab--small c-tab--hover c-tab--gray nav-item baseLink d-none float-left relatedNav <?php if (!AppConfig::relation('SHOW_RELATED_MODULE_NAME')) {?>js-popover-tooltip<?php }
if ($_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel() == $_smarty_tpl->tpl_vars['SELECTED_TAB_LABEL']->value) {?> active<?php }?>" data-js="popover" data-iteration="<?php echo $_smarty_tpl->tpl_vars['ITERATION']->value;?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getUrl();?>
&tab_label=<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-label-key="<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getLabel();?>
" data-reference='<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName();?>
' data-count="<?php echo AppConfig::relation('SHOW_RECORDS_COUNT');?>
"><a href="javascript:void(0);" class="nav-link u-text-ellipsis" title="<?php echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;?>
"><?php if (AppConfig::relation('SHOW_RELATED_ICON')) {?><span class="iconModule userIcon-<?php echo $_smarty_tpl->tpl_vars['RELATED_LINK']->value->getRelatedModuleName();?>
">&nbsp;</span><?php }
if (AppConfig::relation('SHOW_RELATED_MODULE_NAME')) {
echo $_smarty_tpl->tpl_vars['DETAILVIEWRELATEDLINKLBL']->value;
}
if (AppConfig::relation('SHOW_RECORDS_COUNT')) {?><span class="count badge badge-danger c-badge--md c-badge--top-right"></span><?php }?></a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div></div>
<?php }
}
