<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:03:14
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\dashboards\DashBoardButtons.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb72c0af01_60628650',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f0ea6b3033698802408a85028ac568c4cfc3a689' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\dashboards\\DashBoardButtons.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb72c0af01_60628650 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="dashboardHeading d-flex ml-auto mb-2 mt-sm-2 pr-sm-1 u-remove-dropdown-icon-down-lg u-w-xs-down-100"><input type="hidden" name="selectedModuleName" value="<?php echo $_smarty_tpl->tpl_vars['MODULE_NAME']->value;?>
"><?php $_smarty_tpl->_assignInScope('SPECIAL_WIDGETS', Settings_WidgetsManagement_Module_Model::getSpecialWidgets('Home'));
if (count($_smarty_tpl->tpl_vars['WIDGETS']->value) > 0) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addButton dropdown-toggle u-remove-dropdown-icon" data-toggle="dropdown"><span class="fas fa-plus  mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_WIDGET');?>
</span></button><ul class="dropdown-menu widgetsList addWidgetDropDown"><?php $_smarty_tpl->_assignInScope('WIDGET', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
?><li class="dropdown-item"><a class="pl-1" onclick="Vtiger_DashBoard_Js.addWidget(this, '<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
')"href="javascript:void(0);"data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('deleteFromList')) {?><button data-widget-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"class="removeWidgetFromList btn btn-danger btn-sm m-1 p-1"><span class='fas fa-trash-alt'></span></button><?php }?></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</ul><?php } elseif ($_smarty_tpl->tpl_vars['MODULE_PERMISSION']->value) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addButton dropdown-toggle" data-toggle="dropdown"><span class="fas fa-plus  mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_WIDGET');?>
</span></button><ul class="dropdown-menu widgetsList addWidgetDropDown"><?php $_smarty_tpl->_assignInScope('WIDGET', '');
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
?><li class="dropdown-item"><?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('deleteFromList')) {?><button data-widget-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"class="removeWidgetFromList btn btn-sm btn-danger"><span class='fas fa-trash-alt'></span></button><?php }?><a onclick="Vtiger_DashBoard_Js.addWidget(this, '<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
')"href="javascript:void(0);"data-linkid="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid');?>
" data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"data-width="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getWidth();?>
" data-height="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getHeight();?>
"data-id="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['WIDGET']->value->getTitle(),$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</a></li><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<li class="dropdown-item pl-1"><a href="#"><?php echo \App\Language::translate('LBL_NONE');?>
</a></li></ul><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addFilter ml-1" data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['Mini List']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4"><span class="fas fa-filter mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_FILTER');?>
</span></button><?php }
if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModuleActionPermission($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getId(),'CreateDashboardChartFilter')) {?><button class="btn btn-outline-secondary c-btn-block-xs-down addChartFilter ml-1" data-linkid="<?php echo $_smarty_tpl->tpl_vars['SPECIAL_WIDGETS']->value['ChartFilter']->get('linkid');?>
" data-block-id="0" data-width="4" data-height="4"><span class="fas fa-chart-pie mr-md-1"></span><span class="d-none d-md-inline"><?php echo \App\Language::translate('LBL_ADD_CHART_FILTER');?>
</span></button><?php }?></div>
<?php }
}
