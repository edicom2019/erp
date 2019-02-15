<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:30:11
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/EditViewBlocks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d873ea08d0_95522241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8b55ee221de038e3d2f3f4fb363d8a7cb40f6286' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Atribution/EditViewBlocks.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d873ea08d0_95522241 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class='verticalScroll'><div class='editViewContainer'><form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php" enctype="multipart/form-data"><?php $_smarty_tpl->_assignInScope('WIDTHTYPE', $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('rowheight'));
if (!empty($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value)) {?><input type="hidden" name="picklistDependency" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['PICKIST_DEPENDENCY_DATASOURCE']->value);?>
'/><?php }
if (!empty($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value)) {?><input type="hidden" name="mappingRelatedField" value='<?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MAPPING_RELATED_FIELD']->value);?>
'/><?php }
ob_start();
echo $_smarty_tpl->tpl_vars['QUALIFIED_MODULE']->value;
$_prefixVariable1=ob_get_clean();
$_smarty_tpl->_assignInScope('QUALIFIED_MODULE_NAME', $_prefixVariable1);
$_smarty_tpl->_assignInScope('IS_PARENT_EXISTS', strpos($_smarty_tpl->tpl_vars['MODULE']->value,":"));
if ($_smarty_tpl->tpl_vars['PARENT_MODULE']->value != '') {?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><input type="hidden" name="parent" value="<?php echo $_smarty_tpl->tpl_vars['PARENT_MODULE']->value;?>
"/><input type="hidden" value="<?php echo $_smarty_tpl->tpl_vars['VIEW']->value;?>
" name="view"/><?php } else { ?><input type="hidden" name="module" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
"/><?php }?><input type="hidden" name="action" value="Save"/><input type="hidden" name="record" id="recordId" value="<?php echo $_smarty_tpl->tpl_vars['RECORD_ID']->value;?>
"/><input type="hidden" name="defaultCallDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('callduration');?>
"/><input type="hidden" name="defaultOtherEventDuration" value="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('othereventduration');?>
"/><?php if ($_smarty_tpl->tpl_vars['MODE']->value === 'duplicate') {?><input type="hidden" name="_isDuplicateRecord" value="true"/><input type="hidden" name="_duplicateRecord" value="<?php echo \App\Request::_get('record');?>
"/><?php }
if ($_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value) {?><input type="hidden" name="sourceModule" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_MODULE']->value;?>
"/><input type="hidden" name="sourceRecord" value="<?php echo $_smarty_tpl->tpl_vars['SOURCE_RECORD']->value;?>
"/><input type="hidden" name="relationOperation" value="<?php echo $_smarty_tpl->tpl_vars['IS_RELATION_OPERATION']->value;?>
"/><?php }
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD']->value->getModule()->getFieldsByDisplayType(9), 'FIELD', false, 'FIELD_NAME');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD']->value) {
?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD']->value->getEditViewDisplayValue($_smarty_tpl->tpl_vars['RECORD']->value->get($_smarty_tpl->tpl_vars['FIELD_NAME']->value),$_smarty_tpl->tpl_vars['RECORD']->value);?>
"/><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
<div class='widget_header row mb-3'><div class="col-md-8"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BreadCrumbs.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div></div><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value, 'BLOCK_FIELDS', false, 'BLOCK_LABEL', 'EditViewBlockLevelLoop', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value => $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) {
if (count($_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value) <= 0) {
continue 1;
}
$_smarty_tpl->_assignInScope('BLOCK', $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]);
$_smarty_tpl->_assignInScope('BLOCKS_HIDE', $_smarty_tpl->tpl_vars['BLOCK']->value->isHideBlock($_smarty_tpl->tpl_vars['RECORD']->value,$_smarty_tpl->tpl_vars['VIEW']->value));
$_smarty_tpl->_assignInScope('IS_HIDDEN', $_smarty_tpl->tpl_vars['BLOCK']->value->isHidden());
if ($_smarty_tpl->tpl_vars['BLOCKS_HIDE']->value && ($_smarty_tpl->tpl_vars['RECORD_ID']->value || !$_smarty_tpl->tpl_vars['RECORD_ID']->value && $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == "Afféctation")) {?><div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
"><div class="blockHeader c-panel__header align-items-center"><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_MAILING_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_DELIVERY_INFORMATION') {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', TRUE);
} else {
$_smarty_tpl->_assignInScope('SEARCH_ADDRESS', FALSE);
}?><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="hide"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="show"data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><h5 class="m-0"><?php echo \App\Language::translate($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value,$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</h5></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>"data-js="display"><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_MAILING_INFORMATION' || $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == 'LBL_ADDRESS_DELIVERY_INFORMATION') {?><div class="<?php if (!$_smarty_tpl->tpl_vars['SEARCH_ADDRESS']->value) {?> <?php }?> adressAction row py-2 justify-content-center"><?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('BlockHeader.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
</div><?php }?><div class="row"><?php $_smarty_tpl->_assignInScope('COUNTER', 0);
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value, 'FIELD_MODEL', false, 'FIELD_NAME', 'blockfields', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['FIELD_NAME']->value => $_smarty_tpl->tpl_vars['FIELD_MODEL']->value) {
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {
if ($_smarty_tpl->tpl_vars['COUNTER']->value == '1') {
$_smarty_tpl->_assignInScope('COUNTER', 0);
}
}
if ($_smarty_tpl->tpl_vars['COUNTER']->value == 2) {
$_smarty_tpl->_assignInScope('COUNTER', 1);
} else {
$_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
}?><div class="<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_REAPEAT") {?> col-sm-3<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('label') == "FL_RECURRENCE") {?> col-sm-9<?php } elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?>col-sm-4<?php } else { ?> col-md-12 m-auto<?php }?> fieldRow row form-group align-items-center my-1"><?php $_smarty_tpl->_assignInScope('HELPINFO', explode(',',$_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('helpinfo')));
$_smarty_tpl->_assignInScope('HELPINFO_LABEL', (($_smarty_tpl->tpl_vars['MODULE']->value).('|')).($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel()));
?><label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
if (in_array($_smarty_tpl->tpl_vars['VIEW']->value,$_smarty_tpl->tpl_vars['HELPINFO']->value) && \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo') != $_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value) {?><a href="#" class="js-help-info float-right" title="" data-placement="top" data-content="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['HELPINFO_LABEL']->value,'HelpInfo');?>
" data-original-title="<?php echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><span class="fas fa-info-circle"></span></a><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['QUALIFIED_MODULE_NAME']->value);?>
</label><div class="<?php echo $_smarty_tpl->tpl_vars['WIDTHTYPE']->value;?>
 w-100 <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() != "300") {?> col-lg-12 col-xl-9 <?php }?> fieldValue" <?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '19' || $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '20') {?> colspan="3" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
} elseif ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == '300') {?> colspan="4" <?php $_smarty_tpl->_assignInScope('COUNTER', $_smarty_tpl->tpl_vars['COUNTER']->value+1);
?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "rubriques") {?><select class="col-xl-12" id="rubriquesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "prestations") {?><select class="col-xl-12" id="prestationsSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "villes") {?><select class="col-xl-12" id="villesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "regions") {?><select class="col-xl-12" id="regionsSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "prof_lib_specialites") {?><select class="col-xl-12" id="prof_lib_specialitesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "prof_lib_services") {?><select class="col-xl-12" id="prof_lib_servicesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "prof_lib_reseaux_sociaux") {?><select class="col-xl-12" id="prof_lib_reseaux_sociauxSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "vignette_thematique_rubriques") {?><select class="col-xl-12" id="vignette_thematique_rubriquesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "vignette_localite_villes") {?><select class="col-xl-12" id="vignette_localite_villesSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_NAME']->value == "vignette_regions_regions") {?><select class="col-xl-12" id="vignette_regions_regionsSelect2" multiple="multiple"></select><?php }
if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "300") {?><label class="u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0, true);
?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><?php if ($_smarty_tpl->tpl_vars['BLOCK_LABEL']->value == "Afféctation") {?><div id="productsDiv" class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="Block"><div class="blockHeader c-panel__header align-items-center"><span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 <?php if (!($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>"data-js="click" data-mode="hide" data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 <?php if (($_smarty_tpl->tpl_vars['IS_HIDDEN']->value)) {?>d-none<?php }?>" data-js="click" data-mode="show" data-id=<?php echo $_smarty_tpl->tpl_vars['BLOCK_LIST']->value[$_smarty_tpl->tpl_vars['BLOCK_LABEL']->value]->get('id');?>
></span><h5 class="m-0">Produits</h5></div><div class="c-panel__body c-panel__body--edit blockContent js-block-content <?php if ($_smarty_tpl->tpl_vars['IS_HIDDEN']->value) {?>d-none<?php }?>" data-js="display"><div class="row"><div class="col-xl-12"><span id="produitsOrdre"></span></div></div></div></div><?php }
}
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			
<?php echo '<script'; ?>
 type="text/javascript">

let blocks = {
	C: $('[data-label="elements_fabrication_catalogue"]'),
	ML: $('[data-label="elements_fabrication_module_logo"]'),
	VB: $('[data-label="elements_fabrication_video"]'),
	PDJ: $('[data-label="elements_fabrication_professionnel_du_jour"]'),
	EP: $('[data-label="elements_fabrication_espace_promo"]'),
	PL: $('[data-label="elements_fabrication_profession_lib"]'),
	VG: $('[data-label="elements_fabrication_video_graphique"]'),
	VT: $('[data-label="elements_fabrication_vignette_thematique"]'),
	VL: $('[data-label="elements_fabrication_vignette_localite"]'),
	VR: $('[data-label="elements_fabrication_vignette_regions"]'),
}
let select2Fields = {
	1: 'rubriques',
	2: 'villes',
	3: 'regions',
	4: 'prestations',
	5: 'prof_lib_specialites',
	6: 'prof_lib_services',
	7: 'prof_lib_reseaux_sociaux',
	8: 'vignette_thematique_rubriques',
	9: 'vignette_localite_villes',
	10: 'vignette_regions_regions',
};
let blockMandatoryFields = {
	elements_fabrication_catalogue: ['photos'],
	elements_fabrication_module_logo: ['description', 'logo', 'rubriques', 'prestations', 'villes', 'regions'],
	elements_fabrication_video: ['video','video2'],
	elements_fabrication_professionnel_du_jour: ['professionnel_description', 'professionnel_image', 'professionnel_lien'],
	elements_fabrication_espace_promo: ['espace_promo_titre', 'espace_promo_description', 'espace_promo_image1', 'espace_promo_image2'],
	elements_fabrication_profession_lib: ['prof_lib_specialites', 'prof_lib_parcours', 'prof_lib_services', 'prof_lib_video', 'prof_lib_images', 'prof_lib_reseaux_sociaux'],
	elements_fabrication_video_graphique: ['video_graphique1', 'video_graphique2'],
	elements_fabrication_vignette_thematique: ['vignette_thematique_rubriques'],
	elements_fabrication_vignette_localite: ['vignette_localite_villes'],
	elements_fabrication_vignette_regions: ['vignette_regions_regions'],
}

let imageInputs = ['photos', 'logo', 'professionnel_image', 'espace_promo_image1', 'espace_promo_image2', 'prof_lib_images'];

let recordId = getQueryVariable('record');
let ordreId = getQueryVariable('ordreId');
let numOrdre = getQueryVariable('numOrdre');
let format = $('#Atribution_editView_fieldName_format').val();

if(recordId){
	$('#productsDiv').hide();
	$('#Atribution_editView_fieldName_operateur_clear').parent().hide();
	$('#Atribution_editView_fieldName_operateur_select').parent().hide();

	$('#Atribution_editView_fieldName_ordre_clear').parent().hide();
	$('#Atribution_editView_fieldName_ordre_select').parent().hide();

	for (let key in select2Fields) {
		let fieldName = select2Fields[key];
		$('#Atribution_editView_fieldName_'+fieldName).hide();
	}

	for (let key in blocks) {
		blocks[key].hide();
	}
	blocks[format].show();
}
else
	$('#Atribution_editView_fieldName_statut').parent().parent().hide();

if(ordreId){
	$('#Atribution_editView_fieldName_ordre_clear').parent().hide();
	$('#Atribution_editView_fieldName_ordre_select').parent().hide();
	$('[name="ordre"]').val(ordreId);
	$('[name="ordre_display"]').val(numOrdre);
	$('[name="ordre_display"]').prop("readonly", true);
}
$(document).ready(function() {

	/*$('#mySelect2').select2({
	  ajax: {
	    url: 'index.php?action=Edicom&record=' + recordId + '&method=getRubriques',
	    data: function (params) {
	      let query = {
	        search: params.term,
	        type: 'public'
	      }

	      // Query parameters will be ?search=[term]&type=public
	      return query;
	    }
	  }
	});*/
	for (let key in select2Fields) {
		let fieldName = select2Fields[key];
		$('#'+fieldName+'Select2').select2({
		    tags: true,
		    tokenSeparators: [],
		    createTag: function (params) {
		    	if(fieldName == 'prestations'){
		    		let rubriquesLength = $('#rubriquesSelect2').select2('data').length;
			    	let prestationsLength = $('#prestationsSelect2').select2('data').length;
				    if(rubriquesLength*3 <= prestationsLength)
				    	return null;
		    	}
			    if(params.term.trim() == '')
			    	return null;
			    return {
					id: params.term,
					text: params.term
			    }
			}
		});
		$('#'+fieldName+'Select2').on('change.select2', function(){
			let data = $('#'+fieldName+'Select2').select2('data');
			let html = '';
			for (let key in data) {
				let text = data[key].text;
				html += text + '\n';
			}
			html = html.slice(0, -1);
			$('#Atribution_editView_fieldName_'+fieldName).val(html);
		});
	}

	if(recordId){
		for (let key in select2Fields) {
			let fieldName = select2Fields[key];
			let fieldValues = $('#Atribution_editView_fieldName_'+fieldName).val().split('\n');
			for (let key in fieldValues) {
				let fieldValue = fieldValues[key];
				if(fieldValue !=  '')
					$('#'+fieldName+'Select2').append(new Option(fieldValue, fieldValue, false, true)).trigger('change');
			}
		}
		let url = "index.php?action=Edicom&record=" + getQueryVariable('record') + "&method=getStatutBat";
		AppConnector.request(url).done(function (data) {
			let statut = data.result == null? 'BAT non envoyé' : data.result.statut;
			$('#Atribution_editView_fieldName_statut').val(statut);
		}).fail(function (error) {
			console.log(error);
		});
	}

	if(ordreId){
		getProducts(ordreId);
	}

	$('#Atribution_editView_fieldName_valide').change(function(){
		if($(this).prop('checked')){
			if(checkMandatoryFields()){
				let url = "index.php?action=Edicom&record=" + getQueryVariable('record') + "&method=getUser";
				AppConnector.request(url).done(function (data) {
					$('#Atribution_editView_fieldName_valide_par').val(data.result.first_name + ' ' + data.result.last_name);
					$('#Atribution_editView_fieldName_date_validation').val(new Date().toLocaleString().slice(0, 10));
				}).fail(function (error) {
					console.log(error);
				});
			}
			else{
				$(this).prop('checked', false);
				Vtiger_Helper_Js.showPnotify("Veuillez remplir tous les éléments de fabrication");
			}						
		}
		else{
			$('#Atribution_editView_fieldName_valide_par').val("");
			$('#Atribution_editView_fieldName_date_validation').val("");
		}
	});

	$('#Atribution_editView_fieldName_realise').change(function(){
		if($(this).prop('checked')){
			if(checkMandatoryFields()){
				$('#Atribution_editView_fieldName_date_realisation').val(new Date().toLocaleString().slice(0, 10));
			}
			else{
				$(this).prop('checked', false);
				Vtiger_Helper_Js.showPnotify("Veuillez remplir tous les éléments de fabrication");
			}						
		}
		else
			$('#Atribution_editView_fieldName_date_realisation').val("");
	});

	$(document).on('change', '#productCheckAll', function(){
		$('.product-checkbox').prop('checked', $(this).prop('checked'));
	});

	$('#Atribution_editView_fieldName_mis_en_ligne').change(function(){
		if($(this).prop('checked')){
			let url = "index.php?action=Edicom&record=" + getQueryVariable('record') + "&method=checkBat";
			AppConnector.request(url).done(function (data) {
				if(data.result.count < 1){
					$('#Atribution_editView_fieldName_mis_en_ligne').prop('checked', false);
					Vtiger_Helper_Js.showPnotify("Aucun BAT envoyé!");
				}
				else{
					let url2 = "index.php?action=Edicom&record=" + getQueryVariable('record') + "&method=getUser";
					AppConnector.request(url2).done(function (data) {
						$('#Atribution_editView_fieldName_mis_en_ligne_par').val(data.result.first_name + ' ' + data.result.last_name);
						let nombre = $('#Atribution_editView_fieldName_nombre_affichage').val();
						let duree = Number($('#Atribution_editView_fieldName_duree_affichage').val().split(" ")[0]);
						let type = $('#Atribution_editView_fieldName_duree_affichage').val().split(" ")[1];
						let debut = new Date();
						let fin = debut;
						if(nombre == 0){
							console.log(type + ' ' + duree);
							if (type == 'Jours')
								fin = new Date(new Date(debut).setDate(debut.getDate()+duree));
							else if (type == 'Mois')
								fin = new Date(new Date(debut).setMonth(debut.getMonth()+duree));
						}
						$('#Atribution_editView_fieldName_debut_mise_en_ligne').val(debut.toLocaleString().slice(0, 10));
						$('#Atribution_editView_fieldName_fin_mise_en_ligne').val(fin.toLocaleString().slice(0, 10));
					}).fail(function (error) {
						console.log(error);
					});
				}
			}).fail(function (error) {
				console.log(error);
			});			
		}
		else{
			$('#Atribution_editView_fieldName_mis_en_ligne_par').val("");
			$('#Atribution_editView_fieldName_debut_mise_en_ligne').val("");
			$('#Atribution_editView_fieldName_fin_mise_en_ligne').val("");
		}
	});

	$('#sauvgarderAffectations').click(function() {
		document.progressLoader = $.progressIndicator({
			'message': app.vtranslate('JS_SAVE_LOADER_INFO'),
			'position': 'html',
			'blockInfo': {
				'enabled': true
			}
		});
		ordre = $('[name="ordre"]').val();
		operateur = $('[name="operateur"]').val();
		if($('#ordre_display').val() != '' && $('#operateur_display').val() != ''){
			let produits = [];
			$('.product-checkbox').each(function( index ) {
				if($(this).prop('checked'))
					produits.push($('#produit-'+index).html());
			});
			produits = produits.toString();
			let url = "index.php?action=Edicom&record=" + ordre + "&method=saveAttributions&produits=" + produits + "&operateur=" + operateur;
			AppConnector.request(url).done(function (data) {
				document.progressLoader.progressIndicator({ 'mode': 'hide'});
				window.location.href="index.php?module=Atribution&view=List";
			}).fail(function (error) {
				console.log(error);
				document.progressLoader.progressIndicator({ 'mode': 'hide'});
				Vtiger_Helper_Js.showPnotify("Sélectionnez au moins un produit!");
			});
		}
		else{
			document.progressLoader.progressIndicator({ 'mode': 'hide'});
			Vtiger_Helper_Js.showPnotify("L'ordre et l'opérateur sont obligatoires!");
		}
	});
});

function getQueryVariable(variable)
{
	let query = window.location.search.substring(1);
	let vars = query.split("&");
	for (let i=0;i<vars.length;i++) {
        let pair = vars[i].split("=");
        if(pair[0] == variable)
       		return pair[1];
	}
	return null;
}

function checkMandatoryFields(){
	let block = blocks[format].attr('data-label');
	let fields = blockMandatoryFields[block];
	for (let key in fields) {
		let fieldName = fields[key];
		let fieldValue = $('#Atribution_editView_fieldName_'+fieldName).val();
		if((fieldValue && !imageInputs.includes(fieldName) || (fieldValue && imageInputs.includes(fieldName) && fieldValue.length > 2))){
		}
		else
			return false;	
	}
	return true;
}
<?php echo '</script'; ?>
><?php }
}
