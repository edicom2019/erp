<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:28
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\OSSEmployees\EditViewBlocks.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbbc4687d4_19314815',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '487127571e084abb8def0989a3b88a4c7605a50a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\OSSEmployees\\EditViewBlocks.tpl',
      1 => 1551092130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbbc4687d4_19314815 (Smarty_Internal_Template $_smarty_tpl) {
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
if ($_smarty_tpl->tpl_vars['BLOCKS_HIDE']->value) {?><div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="<?php echo $_smarty_tpl->tpl_vars['BLOCK_LABEL']->value;?>
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
?> <?php }?>><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUIType() == "300") {?><label class="u-text-small-bold"><?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->isMandatory() == true) {?><span class="redColor">*</span><?php }
echo \App\Language::translate($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldLabel(),$_smarty_tpl->tpl_vars['MODULE']->value);?>
</label><?php }
$_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getUITypeModel()->getTemplateName(),$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('BLOCK_FIELDS'=>$_smarty_tpl->tpl_vars['BLOCK_FIELDS']->value), 0, true);
?>
</div></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

			<?php echo '<script'; ?>
 type="text/javascript">
                $(document).ready(function() {
                	
                    $('#OSSEmployees_editView_fieldName_date_naissance').change(function(){
                        var birth_date =$('#OSSEmployees_editView_fieldName_date_naissance').val();
                        var today = moment(new Date, 'DD/MM/YYYY');
                        var birth_date = moment(birth_date, 'DD/MM/YYYY');
                        var age= today.diff(birth_date, 'years');
                        var retraite =60-age;
                        document.getElementById('OSSEmployees_editView_fieldName_age').value=age;
                        document.getElementById('OSSEmployees_editView_fieldName_retraite').value=retraite;
                    });
                    $('#OSSEmployees_editView_fieldName_date_embauche').change(function(){
                        var ate_embauche =$('#OSSEmployees_editView_fieldName_date_embauche').val();
                        var today = moment(new Date, 'DD/MM/YYYY');
                        var ate_embauche = moment(ate_embauche, 'DD/MM/YYYY');
                        var age= today.diff(ate_embauche, 'years');
                        document.getElementById('OSSEmployees_editView_fieldName_anciennete').value=age;
                    });
    
                         /////////change
                    $('select[name="type_emp"]').change(function(){
                    	//option[value="Freelancer"]
                    	var type=$('select[name="type_emp"]').find(':selected').text();
                    	if(type=='Freelancer'){
                          isFreelancer();
                    	}else if(type=='Employé'){
                         isEmployee();

                    	}

                 //alert("eee");
                    	
                        
                    });

    function isEmployee(){
    	var ice= $('#OSSEmployees_editView_fieldName_ice').parents().first();
            ice.parents().first().hide();
        var patente=$('#OSSEmployees_editView_fieldName_patente').parents().first();
            patente.parents().first().hide();

        var id_fiscal=$('#OSSEmployees_editView_fieldName_identifiat_fiscal').parents().first();
            id_fiscal.parents().first().hide();
        var statut_type_emp=$('select[name=statut_type_emp]').parents().first();
            statut_type_emp= statut_type_emp.parents().first().parents().first().hide();

        var contrat=$('select[name=contract]').parents().first().parents().first(); 
            contrat=contrat.parents().first().show();
            // rendre false si et déja true
            
            //rendre true pour employé
     
        //Contract
       //supprimer la class data-validation
       $('select[name=contract]').removeAttr('data-validation-engine');  
       var   contract ="validate[required,maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('select[name=contract]').attr('data-validation-engine',contract);


        //civilite
       //supprimer la class data-validation
       $('select[name=civilite]').removeAttr('data-validation-engine');  
       var   civilite ="validate[required,maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('select[name=civilite]').attr('data-validation-engine',civilite);

      //supprimer la class data-fieldinfo  
        $('select[name=civilite]').removeAttr('data-fieldinfo');
        var civilite1='"mandatory":true,"presence":true,"quickcreate":false,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"25","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"ice","label":"ICE"'
        var req =$('select[name=civilite]').attr('data-fieldinfo',civilite1);  

        //Adresse
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_adresse').removeAttr('data-validation-engine');  
       var   adresse ="validate[required,maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_adresse').attr('data-validation-engine',adresse);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_adresse').removeAttr('data-fieldinfo');
        var adresse1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"100","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"adresse","label":"Adresse"'
        $('#OSSEmployees_editView_fieldName_adresse').attr('data-fieldinfo',adresse1);
 
        //ville
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_ville').removeAttr('data-validation-engine');  
       var   ville ="validate[required,maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_ville').attr('data-validation-engine',ville);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_ville').removeAttr('data-fieldinfo');
        var ville1 ='"mandatory":false,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"30","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"ville","label":"Ville"'
        $('#OSSEmployees_editView_fieldName_ville').attr('data-fieldinfo',ville1);         

        //Cin
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_id_card').removeAttr('data-validation-engine');  
       var cin="validate[required,maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
           
        $('#OSSEmployees_editView_fieldName_id_card').attr('data-validation-engine',cin);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_id_card').removeAttr('data-fieldinfo');
        var cin1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":false,"header_field":false,"maxlengthtext":0,"maximumlength":"200","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"id_card","label":"Carte d&#039;identit\u00e9"'
        $('#OSSEmployees_editView_fieldName_id_card').attr('data-fieldinfo',cin1);         

        //date de naissance
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_date_naissance').removeAttr('data-validation-engine');  
       var   dateN ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_date_naissance').attr('data-validation-engine',dateN);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_date_naissance').removeAttr('data-fieldinfo');
        var dateN1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":null,"maxwidthcolumn":0,"defaultvalue":"","type":"date","name":"date_naissance","label":"Date de naissance ","date-format":"dd\/mm\/yyyy"';
        $('#OSSEmployees_editView_fieldName_date_naissance').attr('data-fieldinfo',dateN1);         

        //date d embauche
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_date_embauche').removeAttr('data-validation-engine');  
       var   d_embauche ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_date_embauche').attr('data-validation-engine',d_embauche);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_date_embauche').removeAttr('data-fieldinfo');
        var d_embauche1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":null,"maxwidthcolumn":0,"defaultvalue":"","type":"date","name":"date_embauche","label":"Date d embauche","date-format":"dd\/mm\/yyyy"';
        $('#OSSEmployees_editView_fieldName_date_embauche').attr('data-fieldinfo',d_embauche1); 


        //Situation familiale
       //supprimer la class data-validation
       $('select[name=situation_familiale]').removeAttr('data-validation-engine');  
       var   cf ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('select[name=situation_familiale]').attr('data-validation-engine',cf);



        //nbre Enfants
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_nbr_enfants').removeAttr('data-validation-engine');  
    var nbre_enf ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_nbr_enfants').attr('data-validation-engine',nbre_enf);

        //RIB
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_rib').removeAttr('data-validation-engine');  
    var rib ="validate[required,maxSize[200],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_rib').attr('data-validation-engine',rib);

        //Agence bancaire
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_agence_bancaire').removeAttr('data-validation-engine');  
    var agence_banc ="validate[required,maxSize[200],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_agence_bancaire').attr('data-validation-engine',agence_banc);


        //Direction d affectation
       //supprimer la class data-validation
       $('select[name=direction_affectation]').removeAttr('data-validation-engine');  
    var d_affectation ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('select[name=direction_affectation]').attr('data-validation-engine',d_affectation);

       
       //Service d affectation
       //supprimer la class data-validation
       $('select[name=service_affectation]').removeAttr('data-validation-engine');  
    var s_affectation ="validate[required,funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('select[name=service_affectation]').attr('data-validation-engine',s_affectation);

       //Fonction
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_fonction').removeAttr('data-validation-engine');  
    var fonction ="validate[required,maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_fonction').attr('data-validation-engine',fonction);

       //Email professionnel
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_email_pro').removeAttr('data-validation-engine');  
    var fonction ="validate[required,maxSize[100],funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_email_pro').attr('data-validation-engine',fonction);

       //N° Téléphone
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_telephone_').removeAttr('data-validation-engine');  
    var fonction ="validate[required,maxSize[14],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_telephone_').attr('data-validation-engine',fonction);

       //Horaire
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_horaire').removeAttr('data-validation-engine');  
    var fonction ="validate[required,maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_horaire').attr('data-validation-engine',fonction);

      //enlever required pour les champs obligatoire pour freelancer
      //patente
               $('#OSSEmployees_editView_fieldName_patente').removeAttr('data-validation-engine');  
       var   dv ="validate[maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_patente').attr('data-validation-engine',dv);
       //ICE
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_ice').removeAttr('data-validation-engine');  
       var   dv ="validate[maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_ice').attr('data-validation-engine',dv);

        //id fiscal
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_identifiat_fiscal').removeAttr('data-validation-engine');  
       var   dv ="validate[maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_identifiat_fiscal').attr('data-validation-engine',dv);

    }
    function  isFreelancer(){
    	
        var ice= $('#OSSEmployees_editView_fieldName_ice').parents().first();
            ice.parents().first().show();
        var patente=$('#OSSEmployees_editView_fieldName_patente').parents().first();
                               patente.parents().first().show();
           
        var id_fiscal=$('#OSSEmployees_editView_fieldName_identifiat_fiscal').parents().first();
            id_fiscal.parents().first().show();
        var statut_type_emp=$('select[name=statut_type_emp]').parents().first();
            statut_type_emp= statut_type_emp.parents().first().parents().first().show();
                              
        var contrat=$('select[name=contract]').parents().first().parents().first(); 
            contrat=contrat.parents().first().hide();
            // rendre obligatoire les champs patente, id fiscal, ice, type freelancer
            //$('#OSSEmployees_editView_fieldName_patente').prop('required',true);
         
        //ICE
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_ice').removeAttr('data-validation-engine');  
       var   dv ="validate[required,maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_ice').attr('data-validation-engine',dv);

        //patente
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_patente').removeAttr('data-validation-engine');  
       var   dv ="validate[required,maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_patente').attr('data-validation-engine',dv);

          
        //id fiscal
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_identifiat_fiscal').removeAttr('data-validation-engine');  
       var   dv ="validate[required,maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_identifiat_fiscal').attr('data-validation-engine',dv);

          
        //les info de employes rendre non obligatoire
       //Contract
       //supprimer la class data-validation
       $('select[name=contract]').removeAttr('data-validation-engine');  
       var   contract ="validate[maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('select[name=contract]').attr('data-validation-engine',contract);

        //civilite
       //supprimer la class data-validation
       $('select[name=civilite]').removeAttr('data-validation-engine');  
       var   civilite ="validate[maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('select[name=civilite]').attr('data-validation-engine',civilite);

      //supprimer la class data-fieldinfo  
        $('select[name=civilite]').removeAttr('data-fieldinfo');
        var civilite1='"mandatory":true,"presence":true,"quickcreate":false,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"25","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"ice","label":"ICE"'
        var req =$('select[name=civilite]').attr('data-fieldinfo',civilite1);  

        //Adresse
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_adresse').removeAttr('data-validation-engine');  
       var   adresse ="validate[maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_adresse').attr('data-validation-engine',adresse);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_adresse').removeAttr('data-fieldinfo');
        var adresse1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"100","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"adresse","label":"Adresse"'
        $('#OSSEmployees_editView_fieldName_adresse').attr('data-fieldinfo',adresse1);
 
        //ville
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_ville').removeAttr('data-validation-engine');  
       var   ville ="validate[maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_ville').attr('data-validation-engine',ville);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_ville').removeAttr('data-fieldinfo');
        var ville1 ='"mandatory":false,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":"30","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"ville","label":"Ville"'
        $('#OSSEmployees_editView_fieldName_ville').attr('data-fieldinfo',ville1);         

        //Cin
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_id_card').removeAttr('data-validation-engine');  
       var cin="validate[maxSize[25],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"    
           
        $('#OSSEmployees_editView_fieldName_id_card').attr('data-validation-engine',cin);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_id_card').removeAttr('data-fieldinfo');
        var cin1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":false,"header_field":false,"maxlengthtext":0,"maximumlength":"200","maxwidthcolumn":0,"defaultvalue":"","type":"string","name":"id_card","label":"Carte d&#039;identit\u00e9"'
        $('#OSSEmployees_editView_fieldName_id_card').attr('data-fieldinfo',cin1);         

        //date de naissance
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_date_naissance').removeAttr('data-validation-engine');  
       var   dateN ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_date_naissance').attr('data-validation-engine',dateN);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_date_naissance').removeAttr('data-fieldinfo');
        var dateN1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":null,"maxwidthcolumn":0,"defaultvalue":"","type":"date","name":"date_naissance","label":"Date de naissance ","date-format":"dd\/mm\/yyyy"';
        $('#OSSEmployees_editView_fieldName_date_naissance').attr('data-fieldinfo',dateN1);         

        //date d embauche
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_date_embauche').removeAttr('data-validation-engine');  
       var   d_embauche ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('#OSSEmployees_editView_fieldName_date_embauche').attr('data-validation-engine',d_embauche);

      //supprimer la class data-fieldinfo  
        $('#OSSEmployees_editView_fieldName_date_embauche').removeAttr('data-fieldinfo');
        var d_embauche1 ='"mandatory":true,"presence":true,"quickcreate":true,"masseditable":true,"header_field":false,"maxlengthtext":0,"maximumlength":null,"maxwidthcolumn":0,"defaultvalue":"","type":"date","name":"date_embauche","label":"Date d embauche","date-format":"dd\/mm\/yyyy"';
        $('#OSSEmployees_editView_fieldName_date_embauche').attr('data-fieldinfo',d_embauche1); 


        //Situation familiale
       //supprimer la class data-validation
       $('select[name=situation_familiale]').removeAttr('data-validation-engine');  
       var   cf ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"    
        $('select[name=situation_familiale]').attr('data-validation-engine',cf);



        //nbre Enfants
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_nbr_enfants').removeAttr('data-validation-engine');  
    var nbre_enf ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_nbr_enfants').attr('data-validation-engine',nbre_enf);

        //RIB
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_rib').removeAttr('data-validation-engine');  
    var rib ="validate[maxSize[200],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_rib').attr('data-validation-engine',rib);

        //Agence bancaire
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_agence_bancaire').removeAttr('data-validation-engine');  
    var agence_banc ="validate[maxSize[200],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_agence_bancaire').attr('data-validation-engine',agence_banc);


        //Direction d affectation
       //supprimer la class data-validation
       $('select[name=direction_affectation]').removeAttr('data-validation-engine');  
    var d_affectation ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('select[name=direction_affectation]').attr('data-validation-engine',d_affectation);

       
       //Service d affectation
       //supprimer la class data-validation
       $('select[name=service_affectation]').removeAttr('data-validation-engine');  
    var s_affectation ="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('select[name=service_affectation]').attr('data-validation-engine',s_affectation);

       //Fonction
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_fonction').removeAttr('data-validation-engine');  
    var fonction ="validate[maxSize[100],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_fonction').attr('data-validation-engine',fonction);

       //Email professionnel
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_email_pro').removeAttr('data-validation-engine');  
    var fonction ="validate[maxSize[100],funcCall[Vtiger_Base_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_email_pro').attr('data-validation-engine',fonction);

       //N° Téléphone
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_telephone_').removeAttr('data-validation-engine');  
    var fonction ="validate[maxSize[14],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_telephone_').attr('data-validation-engine',fonction);

       //Horaire
       //supprimer la class data-validation
       $('#OSSEmployees_editView_fieldName_horaire').removeAttr('data-validation-engine');  
    var fonction ="validate[maxSize[30],funcCall[Vtiger_InputMask_Validator_Js.invokeValidation]]"
              
        $('#OSSEmployees_editView_fieldName_horaire').attr('data-validation-engine',fonction);
        
                 }
                });

			<?php echo '</script'; ?>
><?php }
}
