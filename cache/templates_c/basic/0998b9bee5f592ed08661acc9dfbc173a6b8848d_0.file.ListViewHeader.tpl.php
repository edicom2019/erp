<?php
/* Smarty version 3.1.31, created on 2019-02-12 12:50:05
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ListViewHeader.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62c0fd275834_05993458',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0998b9bee5f592ed08661acc9dfbc173a6b8848d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/ListViewHeader.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62c0fd275834_05993458 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="listViewPageDiv"><div class="listViewTopMenuDiv noprint mb-2"><div class="listViewActionsDiv row"><div class="col-12 d-inline-flex flex-wrap"><div class="c-list__buttons d-flex flex-wrap flex-sm-nowrap u-w-sm-down-100"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['QUICK_LINKS']->value['SIDEBARLINK'],'CLASS'=>'buttonTextHolder mr-sm-1 mb-1 mb-sm-0 c-btn-block-sm-down'), 0, true);
$_smarty_tpl->_assignInScope('LINKS', array());
if ($_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value) {
$_smarty_tpl->_assignInScope('LINKS', $_smarty_tpl->tpl_vars['LISTVIEW_MASSACTIONS']->value);
}
if (isset($_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW'])) {
$_smarty_tpl->_assignInScope('LINKS', array_merge($_smarty_tpl->tpl_vars['LINKS']->value,$_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEW']));
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonViewLinks.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('LINKS'=>$_smarty_tpl->tpl_vars['LINKS']->value,'TEXT_HOLDER'=>'LBL_ACTIONS','BTN_ICON'=>'fa fa-list','CLASS'=>'listViewMassActions mr-sm-1 mb-1 mb-sm-0 c-btn-block-sm-down'), 0, true);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['LISTVIEW_LINKS']->value['LISTVIEWBASIC'], 'LINK');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['LINK']->value) {
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ButtonLink.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BUTTON_VIEW'=>'listView','CLASS'=>'mr-sm-1 mb-1 c-btn-block-sm-down'), 0, true);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div><div class="customFilterMainSpan ml-auto mx-xl-auto"><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?><select id="customFilter" class="form-control" title="<?php echo \App\Language::translate('LBL_CUSTOM_FILTER');?>
"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
?><optgroup label='<?php echo \App\Language::translate(('LBL_CV_GROUP_').(strtoupper($_smarty_tpl->tpl_vars['GROUP_LABEL']->value)));?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
?><option data-orderby="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getSortOrderBy('orderBy');?>
"data-sortorder="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getSortOrderBy('sortOrder');?>
"data-editurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getEditUrl();?>
"data-deleteurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDeleteUrl();?>
"data-approveurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getApproveUrl();?>
"data-denyurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDenyUrl();?>
"data-duplicateurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getDuplicateUrl();?>
" <?php echo ' ';?>
data-editable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isEditable();?>
"data-deletable="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->privilegeToDelete();?>
" <?php echo ' ';?>
data-pending="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPending();?>
" <?php echo ' ';?>
data-public="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isPublic() && $_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser();?>
"id="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php echo ' ';?>
value="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php echo ' ';?>
data-id="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
" <?php if ($_smarty_tpl->tpl_vars['VIEWID']->value != '' && $_smarty_tpl->tpl_vars['VIEWID']->value != '0' && $_smarty_tpl->tpl_vars['VIEWID']->value == $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId()) {?> selected="selected" <?php } elseif (($_smarty_tpl->tpl_vars['VIEWID']->value == '' || $_smarty_tpl->tpl_vars['VIEWID']->value == '0') && $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isDefault() == 'true') {?> selected="selected" <?php }?>class="filterOptionId_<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('cvid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);
if ($_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'Mine' && $_smarty_tpl->tpl_vars['GROUP_LABEL']->value != 'System') {?> [ <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getOwnerName();?>
 ]  <?php }?></option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if (isset($_smarty_tpl->tpl_vars['FOLDERS']->value)) {?><optgroup id="foldersBlock" label='<?php echo \App\Language::translate('LBL_FOLDERS',$_smarty_tpl->tpl_vars['MODULE']->value);?>
'><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FOLDERS']->value, 'FOLDER');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FOLDER']->value) {
?><option data-foldername="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->getName();?>
" <?php if (App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['FOLDER']->value->getName()) == $_smarty_tpl->tpl_vars['FOLDER_NAME']->value) {?> selected=""<?php }?>data-folderid="<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
"data-deletable="<?php echo !($_smarty_tpl->tpl_vars['FOLDER']->value->hasDocuments());?>
"class="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
 folderOption<?php if ($_smarty_tpl->tpl_vars['FOLDER']->value->getName() == 'Default') {?> defaultFolder <?php }?>"id="filterOptionId_folder<?php echo $_smarty_tpl->tpl_vars['FOLDER']->value->get('folderid');?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['DEFAULT_CUSTOM_FILTER_ID']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FOLDER']->value->getName(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</optgroup><?php }?></select><?php if (\App\Privilege::isPermitted($_smarty_tpl->tpl_vars['MODULE']->value,'CreateCustomFilter')) {?><div class="filterActionsDiv d-none"><hr><ul class="filterActions list-unstyled m-2"><li id="createFilter" data-value="create" data-createurl="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getCreateUrl();?>
"><a href="#"><span class="fas fa-plus-circle"></span> <?php echo \App\Language::translate('LBL_CREATE_NEW_FILTER');?>
</a></li></ul></div><?php }?><span class="fas fa-filter filterImage mr-2" style="display:none;"></span><?php } else { ?><input type="hidden" value="0" id="customFilter"/><?php }?></div><div class="c-list__right-container d-flex flex-nowrap"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewActions.tpl'), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><span class="d-none filterActionImages float-right"><span title="<?php echo \App\Language::translate('LBL_DENY',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="deny" class="fas fa-exclamation-circle alignMiddle denyFilter filterActionImage float-right"></span><span title="<?php echo \App\Language::translate('LBL_APPROVE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="approve" class="fas fa-check alignMiddle approveFilter filterActionImage float-right"></span><span title="<?php echo \App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="delete" class="fas fa-trash-alt alignMiddle deleteFilter filterActionImage float-right"></span><span title="<?php echo \App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="edit" class="fas fa-pencil-alt alignMiddle editFilter filterActionImage float-right"></span><span title="<?php echo \App\Language::translate('LBL_DUPLICATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" data-value="duplicate" class="fas fa-retweet alignMiddle duplicateFilter filterActionImage float-right"></span></span></div><?php if (count($_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value) > 0) {?><ul class="nav nav-tabs pt-2" role="tablist"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'GROUP_CUSTOM_VIEWS', false, 'GROUP_LABEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['GROUP_LABEL']->value => $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['GROUP_CUSTOM_VIEWS']->value, 'CUSTOM_VIEW');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value) {
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->isFeatured()) {?><li class="nav-item featuredLabel c-tab--small font-weight-bold" data-cvid="<?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->getId();?>
"><a class="nav-link" href="#"<?php if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color')) {?>style="color: <?php echo $_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('color');?>
;"<?php }?>data-toggle="tab" role="tab" aria-selected="false"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('viewname'),$_smarty_tpl->tpl_vars['MODULE']->value);
if ($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description')) {?>&nbsp;<span class="js-popover-tooltip fas fa-info-circle" data-js="popover" data-placement="auto right" data-content="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['CUSTOM_VIEW']->value->get('description'));?>
"></span><?php }?></a></li><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php }?></div><div class="listViewContentDiv" id="listViewContents">
<?php }
}
