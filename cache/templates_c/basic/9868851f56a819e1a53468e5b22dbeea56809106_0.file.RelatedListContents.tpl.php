<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:29:53
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedListContents.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8612652d9_82723577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9868851f56a819e1a53468e5b22dbeea56809106' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/RelatedListContents.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8612652d9_82723577 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_modifier_truncate')) require_once '/var/www/html/ERP/erp-equipe/erp/vendor/smarty/smarty/libs/plugins/modifier.truncate.php';
?>

<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('ListViewAlphabet.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE']->value), 0, true);
$_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
$_smarty_tpl->_assignInScope('IS_INVENTORY', ($_smarty_tpl->tpl_vars['RELATED_VIEW']->value === 'List' && $_smarty_tpl->tpl_vars['INVENTORY_MODULE']->value && !empty($_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value)));
?><div class="listViewEntriesDiv u-overflow-scroll-xs-down"><table class="table tableBorderHeadBody listViewEntriesTable <?php if ($_smarty_tpl->tpl_vars['VIEW_MODEL']->value && !$_smarty_tpl->tpl_vars['VIEW_MODEL']->value->isEmpty('entityState')) {?>listView<?php echo $_smarty_tpl->tpl_vars['VIEW_MODEL']->value->get('entityState');
}?>"><thead><tr class="listViewHeaders"><?php $_smarty_tpl->_assignInScope('COUNT', 0);
?><th class="noWrap"></th><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration == $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_3_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
if (!empty($_smarty_tpl->tpl_vars['COLUMNS']->value) && $_smarty_tpl->tpl_vars['COUNT']->value == $_smarty_tpl->tpl_vars['COLUMNS']->value) {
break 1;
}
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
?><th <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?> colspan="2"<?php }?> nowrap><?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName() == 'access_count' || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName() == 'idlists') {?><a href="javascript:void(0);" class="noSorting"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</a><?php } else { ?><a href="javascript:void(0);" class="relatedListHeaderValues" <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isListviewSortable()) {?>data-nextsortorderval="<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName()) {
echo $_smarty_tpl->tpl_vars['NEXT_SORT_ORDER']->value;
} else { ?>ASC<?php }?>"<?php }?> data-fieldname="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName();?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
&nbsp;&nbsp;<?php if ($_smarty_tpl->tpl_vars['COLUMN_NAME']->value == $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getColumnName()) {?><span class="<?php echo $_smarty_tpl->tpl_vars['SORT_IMAGE']->value;?>
"></span><?php }?></a><?php }?></th><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_3_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><th><?php echo \App\Language::translate('LBL_RELATION_CREATED_TIME',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><th><?php echo \App\Language::translate('LBL_RELATION_CREATED_USER',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><th><?php echo \App\Language::translate('LBL_RELATION_COMMENT',$_smarty_tpl->tpl_vars['RELATED_MODULE']->value->get('name'));?>
</th><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {?><th></th><?php }?></tr></thead><tbody><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {?><tr><td class="listViewSearchTd"><div class="flexWrapper"><a class="btn btn-light" role="button" data-trigger="listSearch" href="javascript:void(0);"><span class="fas fa-search" title="<?php echo \App\Language::translate('LBL_SEARCH');?>
"></span></a><button type="button" class="btn btn-light removeSearchConditions"><span class="fas fa-times" title="<?php echo \App\Language::translate('LBL_CLEAR_SEARCH');?>
"></span></button></div></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration == $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_4_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
?><td><?php $_smarty_tpl->_assignInScope('FIELD_UI_TYPE_MODEL', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUITypeModel());
$_prefixVariable3=$_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName()];
if (isset($_prefixVariable3)) {
$_smarty_tpl->_assignInScope('SEARCH_INFO', $_smarty_tpl->tpl_vars['SEARCH_DETAILS']->value[$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName()]);
} else {
$_smarty_tpl->_assignInScope('SEARCH_INFO', array());
}
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_UI_TYPE_MODEL']->value->getListSearchTemplateName(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('FIELD_MODEL'=>$_smarty_tpl->tpl_vars['HEADER_FIELD']->value,'SEARCH_INFO'=>$_smarty_tpl->tpl_vars['SEARCH_INFO']->value,'USER_MODEL'=>$_smarty_tpl->tpl_vars['USER_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE']->value,'MODULE'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), 0, true);
?>
</td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_4_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<td class="reducePadding"></td></tr><?php }
$_smarty_tpl->_assignInScope('RELATED_HEADER_COUNT', count($_smarty_tpl->tpl_vars['RELATED_HEADERS']->value));
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_RECORDS']->value, 'RELATED_RECORD');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['RELATED_RECORD']->value) {
$_smarty_tpl->_assignInScope('RECORD_COLORS', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewColor());
?><tr class="listViewEntries js-list__row" data-js="each" data-id='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getId();?>
'<?php if ($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?>data-recordUrl='<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
'<?php }?>><?php $_smarty_tpl->_assignInScope('COUNT', 0);
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 noWrap leftRecordActions" <?php if ($_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder']) {?>style="border-left-color: <?php echo $_smarty_tpl->tpl_vars['RECORD_COLORS']->value['leftBorder'];?>
;"<?php }?>><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('RelatedListLeftSide.tpl',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true, NULL, 'listHeaderForeach', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration == $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration']++;
$__foreach_HEADER_FIELD_6_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
if (!empty($_smarty_tpl->tpl_vars['COLUMNS']->value) && $_smarty_tpl->tpl_vars['COUNT']->value == $_smarty_tpl->tpl_vars['COLUMNS']->value) {
break 1;
}
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
$_smarty_tpl->_assignInScope('RELATED_HEADERNAME', $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldName());
?><td class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
" data-field-type="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldDataType();?>
" nowrap  <?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_listHeaderForeach']->value['iteration'] : null) == $_smarty_tpl->tpl_vars['RELATED_HEADER_COUNT']->value) {?>colspan="2"<?php }?>><?php if (($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isNameField() == true || $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getUIType() == '4') && $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->isViewable()) {?><a class="modCT_<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value;?>
 js-list__field" data-js="width" title="" href="<?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDetailViewUrl();?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value),50);?>
</a><?php } elseif ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('fromOutsideList') == true) {
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('isEditable')) {?><input name="<?php echo $_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value;?>
" class="form-control form-control-sm js-edit-<?php echo $_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->get('class');?>
"title="<?php echo App\Language::translate($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
"data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getFieldInfo()));?>
"value="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));?>
"data-js="change"/><?php } else {
echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getDisplayValue($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value));
}
} else {
echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getListViewDisplayValue($_smarty_tpl->tpl_vars['RELATED_HEADERNAME']->value);
}
if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?></td><?php }?></td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_6_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
if ($_smarty_tpl->tpl_vars['SHOW_CREATOR_DETAIL']->value) {?><td class="medium" data-field-type="rel_created_time" nowrap><?php echo App\Fields\DateTime::formatToDisplay($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_time'));?>
</td><td class="medium" data-field-type="rel_created_user" nowrap><?php echo \App\Fields\Owner::getLabel($_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_created_user'));?>
</td><?php }
if ($_smarty_tpl->tpl_vars['SHOW_COMMENT']->value) {?><td class="medium" data-field-type="rel_comment" nowrap><?php echo $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->get('rel_comment');?>
</td><?php }
if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
?><td class="medium" nowrap><button type="button" class="btn btn-sm btn-info js-popover-tooltip showInventoryRow" data-js="popover" data-placement="left" data-content="<?php echo \App\Language::translate('LBL_SHOW_INVENTORY_ROW');?>
"><span class="fas fa-arrows-alt-v"></span></button></td><?php }?></tr><?php if ($_smarty_tpl->tpl_vars['IS_INVENTORY']->value) {
$_smarty_tpl->_assignInScope('INVENTORY_DATA', $_smarty_tpl->tpl_vars['RELATED_RECORD']->value->getInventoryData());
?><tr class="listViewInventoryEntries d-none"><?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE']->value->isQuickSearchEnabled()) {
$_smarty_tpl->_assignInScope('COUNT', $_smarty_tpl->tpl_vars['COUNT']->value+1);
}?><td colspan="<?php echo $_smarty_tpl->tpl_vars['COUNT']->value+1;?>
" class="backgroundWhiteSmoke"><table class="table table-sm no-margin"><thead><tr><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
?><th class="medium" nowrap><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD']->value->get('label'),$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value);?>
</th><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></thead><tbody><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_DATA']->value, 'ROWDATA');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ROWDATA']->value) {
?><tr><?php if ($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']) {
$_smarty_tpl->_assignInScope('ROW_MODULE', \App\Record::getType($_smarty_tpl->tpl_vars['INVENTORY_ROW']->value['name']));
}
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_FIELDS']->value, 'FIELD', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
$_smarty_tpl->_assignInScope('FIELD_TPL_NAME', ("inventoryfields/").($_smarty_tpl->tpl_vars['FIELD']->value->getTemplateName('DetailView',$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value)));
?><td><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_TPL_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ITEM_VALUE'=>$_smarty_tpl->tpl_vars['ROWDATA']->value[$_smarty_tpl->tpl_vars['FIELD']->value->get('columnname')]), 0, true);
?>
</td><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody></table></td></tr><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tbody><tfoot class="listViewSummation"><tr><td></td><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_HEADERS']->value, 'HEADER_FIELD', true);
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration = 0;
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['HEADER_FIELD']->value) {
$_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration++;
$_smarty_tpl->tpl_vars['HEADER_FIELD']->last = $_smarty_tpl->tpl_vars['HEADER_FIELD']->iteration == $_smarty_tpl->tpl_vars['HEADER_FIELD']->total;
$__foreach_HEADER_FIELD_10_saved = $_smarty_tpl->tpl_vars['HEADER_FIELD'];
?><td <?php if ($_smarty_tpl->tpl_vars['HEADER_FIELD']->last) {?> colspan="2" <?php }?> class="noWrap <?php $_prefixVariable4=$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isCalculateField();
if (!empty($_prefixVariable4)) {?>border<?php }?>" ><?php $_prefixVariable5=$_smarty_tpl->tpl_vars['HEADER_FIELD']->value->isCalculateField();
if (!empty($_prefixVariable5)) {?><button class="btn btn-sm btn-light js-popover-tooltip" data-js="popover" type="button" data-operator="sum" data-field="<?php echo $_smarty_tpl->tpl_vars['HEADER_FIELD']->value->getName();?>
" data-content="<?php echo \App\Language::translate('LBL_CALCULATE_SUM_FOR_THIS_FIELD');?>
"><span class="fas fa-signal"></span></button><span class="calculateValue"></span><?php }?></td><?php
$_smarty_tpl->tpl_vars['HEADER_FIELD'] = $__foreach_HEADER_FIELD_10_saved;
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</tr></tfoot></table></div>
<?php }
}
