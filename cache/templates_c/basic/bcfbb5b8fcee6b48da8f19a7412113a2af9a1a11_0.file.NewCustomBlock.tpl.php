<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:33:36
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/NewCustomBlock.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ac02262e6_28776060',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bcfbb5b8fcee6b48da8f19a7412113a2af9a1a11' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/NewCustomBlock.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ac02262e6_28776060 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="newCustomBlockCopy d-none mb-2 border1px <?php if ($_smarty_tpl->tpl_vars['IS_BLOCK_SORTABLE']->value) {?>blockSortable <?php }?>" data-block-id="" data-sequence="" style="border-radius: 4px; background: white;"><div class="row layoutBlockHeader m-0"><div class="col-md-6 blockLabel p-2"><img class="alignMiddle" src="<?php echo \App\Layout::getImagePath('drag.png');?>
" alt="" />&nbsp;&nbsp;</div><div class="col-md-6 ml-0"><div class="float-right btn-toolbar blockActions m-1"><div class="btn-group"><button class="btn btn-success addCustomField d-none" type="button"><span class="fa fa-plus u-mr-5px"></span><strong><?php echo App\Language::translate('LBL_ADD_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></button></div><div class="btn-group"><button class="btn btn-info dropdown-toggle" data-toggle="dropdown"><strong><?php echo App\Language::translate('LBL_ACTIONS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>&nbsp;&nbsp;<span class="caret"></span></button><ul class="dropdown-menu float-right"><li class="blockVisibility" data-visible="1" data-block-id=""><a class="dropdown-item" href="javascript:void(0)"><span class="fas fa-check"></span>&nbsp;<?php echo App\Language::translate('LBL_ALWAYS_SHOW',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="inActiveFields"><a class="dropdown-item" href="javascript:void(0)"><?php echo App\Language::translate('LBL_INACTIVE_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li><li class="deleteCustomBlock"><a class="dropdown-item" href="javascript:void(0)"><?php echo App\Language::translate('LBL_DELETE_CUSTOM_BLOCK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</a></li></ul></div></div></div></div><div class="blockFieldsList row blockFieldsSortable m-0 p-1" style="min-height: 27px;"><ul class="connectedSortable col-md-6 ui-sortable p-1" style="list-style-type: none; float: left;min-height:1px;" name="sortable1"></ul><ul class="connectedSortable col-md-6 ui-sortable m-0 p-1" style="list-style-type: none; float: left;min-height:1px;" name="sortable2"></ul></div></div>
<?php }
}
