<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:33:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/Inventory.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ac02ff025_04314288',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6be1668a4937c703665bb8db5a0635299d7097ee' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/Inventory.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ac02ff025_04314288 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php $_smarty_tpl->_assignInScope('INVENTORY_BLOKS', $_smarty_tpl->tpl_vars['INVENTORY_MODEL']->value->getFields(1,array(),'Settings'));
?><div class="tpl-Settings-LayoutEditor-Inventory"><div class="moduleBlocks inventoryBlock" data-block-id="0"><div class="editFieldsTable block card card-default mb-2"><div class="card-header py-1 px-2"><div class="float-right"><button class="btn btn-sm btn-success pr-1 saveFieldSequence invisible inventorySequence" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_HEADLINE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[0], 'FIELD_MODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><li><div class="opacity editFields border mb-1 u-cursor-grab" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
" data-column="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('columnname');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><div class="float-right actions"><a href="#" class="editInventoryField mr-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></div></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div></div><div class="moduleBlocks inventoryBlock" data-block-id="1"><div class="editFieldsTable block card card-default mb-2"><div class="card-header py-1 px-2"><div class="float-right"><button class="btn btn-sm btn-success saveFieldSequence invisible inventorySequence" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_BASIC_VERSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[1], 'FIELD_MODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><li><div class="opacity editFields border mb-1" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-column="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('columnname');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div></div><div class="moduleBlocks inventoryBlock" data-block-id="2"><div class="editFieldsTable block card card-default mb-2"><div class="card-header py-1 px-2"><div class="float-right"><button class="btn btn-sm btn-success saveFieldSequence invisible inventorySequence" type="button"><strong><?php echo App\Language::translate('LBL_SAVE_FIELD_SEQUENCE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button><button class="btn btn-sm btn-success addInventoryField" type="button"><strong><span class="fas fa-plus fa-fw"></span><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><?php echo App\Language::translate('LBL_ADDITIONAL_VERSE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</div><div class="blockFieldsList card-body"><ul name="sortable1" class="connectedSortable m-0 list-unstyled"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['INVENTORY_BLOKS']->value[2], 'FIELD_MODEL', false, 'NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?><li><div class="opacity editFields border mb-1" data-id="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('id');?>
"data-column="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('columnname');?>
"data-sequence="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('sequence');?>
"data-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
"><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="fieldLabel"><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label'),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul></div></div></div><li class="d-none newLiElement"><div class="opacity editFields border mb-1" data-column="" data-id="" data-sequence="" data-name=""><a><img class="mb-1" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" border="0"title="<?php echo App\Language::translate('LBL_DRAG',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"/></a>&nbsp;&nbsp;<span class="fieldLabel"></span><span class="btn-group float-right actions"><a href="#" class="editInventoryField mr-1"><span class="fas fa-edit" title="<?php echo App\Language::translate('LBL_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"></span></a><a class="deleteInventoryField mr-1" href="#"><span title="<?php echo App\Language::translate('LBL_DELETE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
"class="fas fa-trash-alt"></span></a></span></div></li></div><?php }
}
