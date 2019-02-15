<?php
/* Smarty version 3.1.31, created on 2019-02-13 14:33:50
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/EditField.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c642ace83d1d2_51013719',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ee9c442349083fa922eb2f17c09f0d2310a7cb5' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Settings/LayoutEditor/EditField.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c642ace83d1d2_51013719 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="tpl-Settings-LayoutEditor-EditField"><div class="modal-header"><h5 class="modal-title"><?php echo App\Language::translate('LBL_EDIT_CUSTOM_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><div class="modal-body row"><div class="col-md-12"><form class="form-horizontal fieldDetailsForm sendByAjax validateForm" method="POST"><input type="hidden" name="module" value="LayoutEditor"/><input type="hidden" name="parent" value="Settings"/><input type="hidden" name="action" value="Field"/><input type="hidden" name="mode" value="save"/><input type="hidden" name="fieldid" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getId();?>
"/><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value;?>
"/><?php $_smarty_tpl->_assignInScope('IS_MANDATORY', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory());
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
?><strong><?php echo App\Language::translate('LBL_LABEL_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong><?php echo App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
<br/><strong><?php echo App\Language::translate('LBL_FIELD_NAME',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
: </strong><?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
<hr class="marginTop10"><div class="checkbox"><input type="hidden" name="mandatory" value="O"/><input type="checkbox" name="mandatory" id="mandatory" <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> checked <?php }?> <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatoryOptionDisabled()) {?> readonly="readonly" <?php }?>value="M"/><label for="mandatory" class="ml-1"><?php echo App\Language::translate('LBL_MANDATORY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</label></div><div class="checkbox"><input type="hidden" name="presence" value="1"/><input type="checkbox" name="presence" id="presence" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveField()) {?> checked <?php }?>  
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isActiveOptionDisabled()) {?> readonly="readonly" class="optionDisabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> readonly="readonly" <?php }?>
							   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('presence');?>
"/>
						<label for="presence">
							<?php echo App\Language::translate('LBL_ACTIVE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
					</div>

					<div class="checkbox">
						<input type="hidden" name="quickcreate" value="1"/>
						<input type="checkbox"
							   name="quickcreate"
							   id="quickcreate" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateEnabled()) {?> checked <?php }?> 
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isQuickCreateOptionDisabled()) {?> readonly="readonly" class="optionDisabled"<?php }?> <?php if ($_smarty_tpl->tpl_vars['IS_MANDATORY']->value) {?> readonly="readonly" <?php }?>
							   value="2"/>
						<label for="quickcreate">
							<?php echo App\Language::translate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
					</div>
					<div class="checkbox">
						<input type="hidden" name="summaryfield" value="0"/>
						<input type="checkbox"
							   name="summaryfield"
							   id="summaryfield" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryField()) {?> checked <?php }?> 
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isSummaryFieldOptionDisabled()) {?> readonly="readonly" class="optionDisabled"<?php }?>
							   value="1"/>
						<label for="summaryfield">
							<?php echo App\Language::translate('LBL_SUMMARY_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
					</div>
					<div class="checkbox">
						<input type="hidden" name="header_field" value="0"/>
						<input type="checkbox" name="header_field"
							   id="header_field" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isHeaderField()) {?> checked <?php }?>
							   value="btn-default"/>
						<label for="header_field">
							<?php echo App\Language::translate('LBL_HEADER_FIELD',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
					</div>
					<div class="checkbox">
						<input type="hidden" name="masseditable" value="2"/>
						<input type="checkbox"
							   name="masseditable"
							   id="masseditable" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditable()) {?> checked <?php }?>  
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMassEditOptionDisabled()) {?> readonly="readonly" <?php }?> value="1"/>
						<label for="masseditable">
							<?php echo App\Language::translate('LBL_MASS_EDIT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
					</div>

					<div class="checkbox">
						<input type="hidden" name="defaultvalue" value=""/>
						<input type="checkbox"
							   name="defaultvalue"
							   id="defaultvalue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> checked <?php }?>  
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isDefaultValueOptionDisabled()) {?> readonly="readonly" <?php }?> value=""/>
						<label for="defaultvalue">
							<?php echo App\Language::translate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

						</label>
						<div class="defaultValueUi <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> zeroOpacity <?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isDefaultValueOptionDisabled() != "true") {?>
								<label for="fieldDefaultValue"
									   class="sr-only"><?php echo App\Language::translate('LBL_DEFAULT_VALUE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

								</label>
								<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "picklist") {?>
									<?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
?>
									<select class="col-md-2 select2"
											name="fieldDefaultValue"
											id="fieldDefaultValue" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
											data-fieldinfo='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
'>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE', false, 'PICKLIST_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value => $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?>
											<option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_NAME']->value);?>
" <?php if (App\Purifier::decodeHtml($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')) == $_smarty_tpl->tpl_vars['PICKLIST_NAME']->value) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</select>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "multipicklist") {?>
									<?php $_smarty_tpl->_assignInScope('PICKLIST_VALUES', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getPicklistValues());
?>
									<?php $_smarty_tpl->_assignInScope('FIELD_VALUE_LIST', explode(' |##| ',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
?>
									<select multiple class="col-md-2 select2"
											data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											name="fieldDefaultValue" id="fieldDefaultValue"
											data-fieldinfo='<?php echo \App\Purifier::encodeHtml(\App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value));?>
'>
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['PICKLIST_VALUES']->value, 'PICKLIST_VALUE');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value) {
?>
											<option value="<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value);?>
" <?php if (in_array(\App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value),$_smarty_tpl->tpl_vars['FIELD_VALUE_LIST']->value)) {?> selected <?php }?>><?php echo App\Language::translate($_smarty_tpl->tpl_vars['PICKLIST_VALUE']->value,$_smarty_tpl->tpl_vars['SELECTED_MODULE_NAME']->value);?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</select>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "boolean") {?>
									<div class="checkbox">
										<input type="hidden" name="fieldDefaultValue" id="fieldDefaultValue" value=""/>
										<input type="checkbox" name="fieldDefaultValue" id="fieldDefaultValue"
											   value="1" 
												<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue') == 1) {?> checked <?php }?>
											   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
'/>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "time") {?>
									<div class="input-group time">
										<input type="text" class="form-control-sm form-control clockPicker"
											   data-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('hour_format');?>
"
											   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											   data-toregister="time" value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');?>
"
											   name="fieldDefaultValue" id="fieldDefaultValue"
											   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
'/>
										<div class="input-group-append">
										<span class="input-group-text u-cursor-pointer js-clock__btn" data-js="click">
											<span class="far fa-clock"></span>
										</span>
										</div>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "date") {?>
									<?php $_smarty_tpl->_assignInScope('IS_CUSTOM_DEFAULT_VALUE', \App\TextParser::isVaribleToParse($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue')));
?>
									<div class="input-group date <?php if ($_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> d-none<?php }?>">
										<?php $_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getName());
?>
										<input type="text" class="form-control dateField"
											   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue() || $_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> disabled="" <?php }?>
											   name="fieldDefaultValue" id="fieldDefaultValue" data-toregister="date"
											   data-date-format="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('date_format');?>
"
											   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' 
											   value="<?php if (!$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue'));
}?>"/>
										<div class=" input-group-append">
										<span class="input-group-text u-cursor-pointer js-date__btn" data-js="click">
											<span class="fas fa-calendar-alt"></span>
										</span>
										</div>
										<span class="input-group-btn"
											  title="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_CUSTOM_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
">
										<button class="btn btn-light configButton" type="button"><span
													class="fas fa-cog"></span></button>
									</span>
									</div>
									<div class="input-group <?php if (!$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> d-none<?php }?>">
										<input type="text" class="form-control"
											   name="fieldDefaultValue"
											   id="fieldDefaultValue" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue() || !$_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {?> disabled<?php }?>
											   value="<?php if ($_smarty_tpl->tpl_vars['IS_CUSTOM_DEFAULT_VALUE']->value) {
echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');
}?>"
											   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
											   data-fieldinfo="<?php echo \App\Purifier::encodeHtml('{"type":"textParser"}');?>
"/>
										<span class="input-group-btn">
										<button class="btn btn-light varibleToParsers" type="button"><span
													class="fas fa-edit"></span></button>
										<button class="btn btn-light active configButton" type="button"
												title="<?php echo \App\Purifier::encodeHtml(App\Language::translate('LBL_CUSTOM_CONFIGURATION',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value));?>
"><span
													class="fas fa-cog"></span></button>
									</span>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "percentage") {?>
									<div class="input-group">
										<input type="number"
											   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											   class="form-control" name="fieldDefaultValue"
											   id="fieldDefaultValue"  
											   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');?>
"
											   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
' step="any"/>
										<span class="input-group-addon">%</span>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType() == "currency") {?>
									<div class="input-group">
										<span class="input-group-addon"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_symbol');?>
</span>
										<input type="text"
											   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											   class="form-control" name="fieldDefaultValue"
											   id="fieldDefaultValue"  
											   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
'
											   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue'));?>
"
											   data-decimal-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_decimal_separator');?>
'
											   data-group-separator='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('currency_grouping_separator');?>
'/>
									</div>
								<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == 19) {?>
									<textarea class="input-medium"
											  data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
											  name="fieldDefaultValue" id="fieldDefaultValue"
											  value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');?>
"
											  data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
'></textarea>
								<?php } else { ?>
									<input type="text" class="input-medium form-control"
										   data-validation-engine="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" <?php if (!$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->hasDefaultValue()) {?> disabled="" <?php }?>
										   name="fieldDefaultValue" id="fieldDefaultValue"
										   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('defaultvalue');?>
"
										   data-fieldinfo='<?php echo \App\Json::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value);?>
'/>
								<?php }?>
							<?php }?>
						</div>
					</div>
					<?php if (in_array($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldDataType(),array('string','phone','currency','url','integer','double'))) {?>
					<div>
						<div class="form-group">
							<label for="fieldMask"><strong><?php echo App\Language::translate('LBL_FIELD_MASK',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label>
							<div class=" input-group">
								<input type="text" class="form-control" id="fieldMask" name="fieldMask"
									   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldparams');?>
"/>
								<div class="input-group-append">
								<span class="input-group-text js-popover-tooltip u-cursor-pointer" data-js="popover"
									  data-placement="top"
									  data-content="<?php echo App\Language::translate('LBL_FIELD_MASK_INFO',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
">
									<span class="fas fa-info-circle"></span>
								</span>
								</div>
							</div>
						</div>
						<?php }?>
						<div class="form-group">
							<label for="maxlengthtext"><strong><?php echo App\Language::translate('LBL_MAX_LENGTH_TEXT',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label>
							<input type="text" class="form-control" id="maxlengthtext" name="maxlengthtext"
								   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maxlengthtext');?>
"/>
						</div>
						<div class="form-group">
							<label for="maxwidthcolumn"><strong><?php echo App\Language::translate('LBL_MAX_WIDTH_COLUMN',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong></label>
							<input type="text" class="form-control" id="maxwidthcolumn" name="maxwidthcolumn"
								   value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('maxwidthcolumn');?>
"/>
						</div>
						<?php if (AppConfig::developer('CHANGE_GENERATEDTYPE')) {?>
							<div class="checkbox">
								<input type="checkbox" name="generatedtype" id="generatedtype"
									   value="1" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('generatedtype') == 1) {?> checked <?php }?> />
								<label for="generatedtype">
									<?php echo App\Language::translate('LBL_GENERATED_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>

								</label>
							</div>
						<?php }?>
						<?php if (AppConfig::developer('CHANGE_VISIBILITY')) {?>
							<div class="form-group">
								<label for="displaytype">
									<strong><?php echo App\Language::translate('LBL_DISPLAY_TYPE',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</strong>
									<?php $_smarty_tpl->_assignInScope('DISPLAY_TYPE', Vtiger_Field_Model::showDisplayTypeList());
?>
								</label>
								<div class="defaultValueUi">
									<select name="displaytype" class="form-control select2" id="displaytype">
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['DISPLAY_TYPE']->value, 'DISPLAY_TYPE_VALUE', false, 'DISPLAY_TYPE_KEY');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value => $_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->value) {
?>
											<option value="<?php echo $_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['DISPLAY_TYPE_KEY']->value == $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('displaytype')) {?> selected <?php }?> ><?php echo App\Language::translate($_smarty_tpl->tpl_vars['DISPLAY_TYPE_VALUE']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value);?>
</option>
										<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

									</select>
								</div>
							</div>
						<?php }?>
						<?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('Modals/Footer.tpl',$_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BTN_SUCCESS'=>'LBL_SAVE','BTN_DANGER'=>'LBL_CANCEL'), 0, true);
?>

				</form>
			</div>
		</div>
	</div>

<?php }
}
