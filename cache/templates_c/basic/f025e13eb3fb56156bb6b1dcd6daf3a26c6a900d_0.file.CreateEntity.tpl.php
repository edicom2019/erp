<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:51:26
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/CreateEntity.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642eeed394a7_47314635',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f025e13eb3fb56156bb6b1dcd6daf3a26c6a900d' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/Workflows/CreateEntity.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642eeed394a7_47314635 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value || $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value) && $_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?>
	<h5 class="bg-success text-center menuPanel">
		<?php echo \App\Language::translate('LBL_OVERWRITTEN_FIELDS',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

	</h5>
<?php }?>
<input type="hidden" id="fieldValueMapping" name="field_value_mapping" value='<?php echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping;?>
' />
<input type="hidden" value="<?php if ($_smarty_tpl->tpl_vars['TASK_ID']->value) {
echo $_smarty_tpl->tpl_vars['TASK_OBJECT']->value->reference_field;
} else {
echo $_smarty_tpl->tpl_vars['REFERENCE_FIELD_NAME']->value;
}?>" name='reference_field' id='reference_field' />
<div class="js-conditions-container" id="save_fieldvaluemapping" data-js="container">
	<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value != '') {?>
		<div>
			<button type="button" class="btn btn-light" id="addFieldBtn"><?php echo \App\Language::translate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
		</div><br />
		<?php $_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->entity_type));
?>
		<?php $_smarty_tpl->_assignInScope('FIELD_VALUE_MAPPING', \App\Json::decode($_smarty_tpl->tpl_vars['TASK_OBJECT']->value->field_value_mapping));
?>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FIELD_VALUE_MAPPING']->value, 'FIELD_MAP');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MAP']->value) {
?>
			<div class="row js-conditions-row padding-bottom1per" data-js="container | clone">
				<div class="col-md-4">
					<?php $_smarty_tpl->_assignInScope('SELECTED_FIELD_MODEL', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getField($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname']));
?>
					<select name="fieldname" class="select2 form-control" <?php if ($_smarty_tpl->tpl_vars['SELECTED_FIELD_MODEL']->value->isMandatory() && !$_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?> disabled="" <?php }?> >
						<option value="none"></option>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?>
							<?php $_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?>
							<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'owner') {?>
								<?php ob_start();
echo \App\Language::translate('LBL_PARENT_OWNER');
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('SPECIAL_OPTION', array(\App\Language::translate('LBL_SPECIAL_OPTIONS')=>array('assigned_user_id'=>$_prefixVariable1)));
?>
								<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['FIELD_INFO']) ? $_smarty_tpl->tpl_vars['FIELD_INFO']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['picklistvalues'] = array_merge($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'],$_smarty_tpl->tpl_vars['SPECIAL_OPTION']->value);
$_smarty_tpl->_assignInScope('FIELD_INFO', $_tmp_array);
?>
							<?php }?>
							<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['fieldname'] == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName()) {?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {
$_smarty_tpl->_assignInScope('MANDATORY_FIELD', true);
?> <?php } else { ?> <?php $_smarty_tpl->_assignInScope('MANDATORY_FIELD', false);
?> <?php }
$_smarty_tpl->_assignInScope('FIELD_TYPE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType());
?> selected=""<?php }?> data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
" >
							<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value);
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory()) {?><span class="redColor">*</span><?php }?>
							</option>	
						<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

					</select>
				</div>
				<div class="col-md-3">
					<select name="modulename" class="select2 form-control" <?php if (($_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'multipicklist')) {?> disabled="" <?php }?>>
						<option <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['modulename'] == $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option>
						<option <?php if ($_smarty_tpl->tpl_vars['FIELD_MAP']->value['modulename'] == $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value,$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value);?>
</option>
					</select>
				</div>
				<div class="fieldUiHolder col-md-4">
					<input type="text" class="getPopupUi form-control" readonly="" name="fieldValue" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['value'];?>
" />
					<input type="hidden" name="valuetype" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MAP']->value['valuetype'];?>
" />
				</div>
				<?php if ($_smarty_tpl->tpl_vars['MANDATORY_FIELD']->value != true || $_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?>
					<div class="u-cursor-pointer btn span">
						<span class="alignMiddle deleteCondition fas fa-trash-alt"></span>
					</div>
				<?php }?>
			</div>
		<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

		<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RELATED_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'FIELD_EXPRESSIONS'=>$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value), 0, true);
?>

	<?php } else { ?>
		<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value) {?>
			<div>
				<button type="button" class="btn btn-light" id="addFieldBtn"><?php echo \App\Language::translate('LBL_ADD_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</button>
			</div><br />
			<?php if ($_smarty_tpl->tpl_vars['MAPPING_PANEL']->value) {?>
				<?php $_smarty_tpl->_assignInScope('MANDATORY_FIELD_MODELS', array());
?>
			<?php } else { ?>
				<?php $_smarty_tpl->_assignInScope('MANDATORY_FIELD_MODELS', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getMandatoryFieldModels());
?>
			<?php }?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODELS']->value, 'MANDATORY_FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value) {
?>
				<?php if (in_array($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->getReferenceList())) {?>
					<?php
continue 1;?>
				<?php }?>
				<div class="row js-conditions-container padding-bottom1per" data-js="container | clone">
					<span class="col-md-4">
						<select name="fieldname" class="select2 form-control" disabled="">
							<option value="none"></option>
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?>
								<?php $_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?>
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == 'owner') {?>
									<?php ob_start();
echo \App\Language::translate('LBL_PARENT_OWNER');
$_prefixVariable2=ob_get_clean();
$_smarty_tpl->_assignInScope('SPECIAL_OPTION', array(\App\Language::translate('LBL_SPECIAL_OPTIONS')=>array('assigned_user_id'=>$_prefixVariable2)));
?>
									<?php $_tmp_array = isset($_smarty_tpl->tpl_vars['FIELD_INFO']) ? $_smarty_tpl->tpl_vars['FIELD_INFO']->value : array();
if (!is_array($_tmp_array) || $_tmp_array instanceof ArrayAccess) {
settype($_tmp_array, 'array');
}
$_tmp_array['picklistvalues'] = array_merge($_smarty_tpl->tpl_vars['FIELD_INFO']->value['picklistvalues'],$_smarty_tpl->tpl_vars['SPECIAL_OPTION']->value);
$_smarty_tpl->_assignInScope('FIELD_INFO', $_tmp_array);
?>
								<?php }?>
								<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName() == $_smarty_tpl->tpl_vars['MANDATORY_FIELD_MODEL']->value->get('name')) {?> <?php $_smarty_tpl->_assignInScope('FIELD_TYPE', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType());
?> selected=""<?php }?> data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
" >
								<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getName());?>
<span class="redColor">*</span>
								</option>	
							<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

						</select>
					</span>
					<span class="col-md-3">
						<select name="modulename" class="select2 form-control" <?php if (($_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'multipicklist')) {?> disabled="" <?php }?>>
							<option value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option>
							<option <?php if (($_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'picklist' || $_smarty_tpl->tpl_vars['FIELD_TYPE']->value == 'multipicklist')) {?> selected="" <?php }?> value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name'));?>
</option>
						</select>
					</span>
					<span class="fieldUiHolder col-md-4">
						<input type="text" class="getPopupUi form-control" name="fieldValue" value="" />
						<input type="hidden" name="valuetype" value="rawtext" />
					</span>
				</div>
			<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('FieldExpressions.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RELATED_MODULE_MODEL'=>$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value,'MODULE_MODEL'=>$_smarty_tpl->tpl_vars['MODULE_MODEL']->value,'FIELD_EXPRESSIONS'=>$_smarty_tpl->tpl_vars['FIELD_EXPRESSIONS']->value), 0, true);
?>

		<?php }?>
	<?php }?>
</div><br />
<?php if ($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value) {?>
	<div class="row js-add-basic-field-container padding-bottom1per d-none">
		<div class="col-md-4">
			<?php $_smarty_tpl->_assignInScope('RELATED_MODULE_MODEL_NAME', $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name'));
?>
			<select name="fieldname" class="form-control">
				<option value="none"><?php echo \App\Language::translate('LBL_NONE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
				<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->getFields(), 'FIELD_MODEL');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
?>
					<?php $_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?>
					<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() != 'reference' && ($_smarty_tpl->tpl_vars['MAPPING_PANEL']->value || (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() && !$_smarty_tpl->tpl_vars['MAPPING_PANEL']->value))) {?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldtype="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldType();?>
"  data-field-name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName();?>
" data-fieldinfo="<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
" >
							<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL_NAME']->value);?>
 
						</option>
					<?php }?>
				<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			</select>
		</div>
		<div class="col-md-3">
			<select name="modulename" class="form-control">
				<option value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['SOURCE_MODULE']->value,$_smarty_tpl->tpl_vars['SOURCE_MODULE']->value);?>
</option>
				<option value="<?php echo $_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name');?>
"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name'),$_smarty_tpl->tpl_vars['RELATED_MODULE_MODEL']->value->get('name'));?>
</option>
			</select>
		</div>
		<div class="fieldUiHolder col-md-4">
			<input type="text" class="form-control" readonly="" name="fieldValue" value="" />
			<input type="hidden" name="valuetype" value="rawtext" />
		</div>
		<button class="btn btn-danger deleteCondition">
			<span class="fas fa-trash-alt"></span>
		</button>
	</div>
<?php }
}
}
