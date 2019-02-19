{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
* Contributor(s): YetiForce.com
********************************************************************************/
-->*}
{strip}
<div class='verticalScroll'>
	<div class='editViewContainer'>
		<form class="form-horizontal recordEditView" id="EditView" name="EditView" method="post" action="index.php"
			  enctype="multipart/form-data">
			{assign var=WIDTHTYPE value=$USER_MODEL->get('rowheight')}
			{if !empty($PICKIST_DEPENDENCY_DATASOURCE)}
				<input type="hidden" name="picklistDependency"
					   value='{\App\Purifier::encodeHtml($PICKIST_DEPENDENCY_DATASOURCE)}'/>
			{/if}
			{if !empty($MAPPING_RELATED_FIELD)}
				<input type="hidden" name="mappingRelatedField"
					   value='{\App\Purifier::encodeHtml($MAPPING_RELATED_FIELD)}'/>
			{/if}
			{assign var=QUALIFIED_MODULE_NAME value={$QUALIFIED_MODULE}}
			{assign var=IS_PARENT_EXISTS value=strpos($MODULE,":")}
			{if $PARENT_MODULE neq ''}
				<input type="hidden" name="module" value="{$MODULE}"/>
				<input type="hidden" name="parent" value="{$PARENT_MODULE}"/>
				<input type="hidden" value="{$VIEW}" name="view"/>
			{else}
				<input type="hidden" name="module" value="{$MODULE}"/>
			{/if}
			<input type="hidden" name="action" value="Save"/>
			<input type="hidden" name="record" id="recordId" value="{$RECORD_ID}"/>
			<input type="hidden" name="defaultCallDuration" value="{$USER_MODEL->get('callduration')}"/>
			<input type="hidden" name="defaultOtherEventDuration" value="{$USER_MODEL->get('othereventduration')}"/>
			{if $MODE === 'duplicate'}
				<input type="hidden" name="_isDuplicateRecord" value="true"/>
				<input type="hidden" name="_duplicateRecord" value="{\App\Request::_get('record')}"/>
			{/if}
			{if $IS_RELATION_OPERATION }
				<input type="hidden" name="sourceModule" value="{$SOURCE_MODULE}"/>
				<input type="hidden" name="sourceRecord" value="{$SOURCE_RECORD}"/>
				<input type="hidden" name="relationOperation" value="{$IS_RELATION_OPERATION}"/>
			{/if}
			{foreach from=$RECORD->getModule()->getFieldsByDisplayType(9) item=FIELD key=FIELD_NAME}
				<input type="hidden" name="{$FIELD_NAME}"
					   value="{$FIELD->getEditViewDisplayValue($RECORD->get($FIELD_NAME),$RECORD)}"/>
			{/foreach}
			<div class='widget_header row mb-3'>
				<div class="col-md-8">
					{include file=\App\Layout::getTemplatePath('BreadCrumbs.tpl', $MODULE)}
				</div>
			</div>
			{foreach key=BLOCK_LABEL item=BLOCK_FIELDS from=$RECORD_STRUCTURE name="EditViewBlockLevelLoop"}
				{if $BLOCK_FIELDS|@count lte 0}{continue}{/if}
				{assign var=BLOCK value=$BLOCK_LIST[$BLOCK_LABEL]}
				{assign var=BLOCKS_HIDE value=$BLOCK->isHideBlock($RECORD,$VIEW)}
				{assign var=IS_HIDDEN value=$BLOCK->isHidden()}
				{if $BLOCKS_HIDE}
					<div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click"
						 data-label="{$BLOCK_LABEL}">
						<div class="blockHeader c-panel__header align-items-center">
							{if $BLOCK_LABEL eq 'LBL_ADDRESS_INFORMATION' || $BLOCK_LABEL eq 'LBL_ADDRESS_MAILING_INFORMATION' || $BLOCK_LABEL eq 'LBL_ADDRESS_DELIVERY_INFORMATION'}
								{assign var=SEARCH_ADDRESS value=TRUE}
							{else}
								{assign var=SEARCH_ADDRESS value=FALSE}
							{/if}
							<span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 {if !($IS_HIDDEN)}d-none{/if}"
								  data-js="click" data-mode="hide"
								  data-id={$BLOCK_LIST[$BLOCK_LABEL]->get('id')}></span>
							<span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 {if ($IS_HIDDEN)}d-none{/if}"
								  data-js="click" data-mode="show"
								  data-id={$BLOCK_LIST[$BLOCK_LABEL]->get('id')}></span>
							<h5 class="m-0">{\App\Language::translate($BLOCK_LABEL, $QUALIFIED_MODULE_NAME)}</h5>
						</div>
						<div class="c-panel__body c-panel__body--edit blockContent js-block-content {if $IS_HIDDEN}d-none{/if}"
							 data-js="display">
							{if $BLOCK_LABEL eq 'LBL_ADDRESS_INFORMATION' || $BLOCK_LABEL eq 'LBL_ADDRESS_MAILING_INFORMATION' || $BLOCK_LABEL eq 'LBL_ADDRESS_DELIVERY_INFORMATION'}
									<div class="{if !$SEARCH_ADDRESS} {/if} adressAction row py-2 justify-content-center">
										{include file=\App\Layout::getTemplatePath('BlockHeader.tpl', $MODULE)}
									</div>
							{/if}
							<div class="row">
								{assign var=COUNTER value=0}
								{foreach key=FIELD_NAME item=FIELD_MODEL from=$BLOCK_FIELDS name=blockfields}
								{if $FIELD_MODEL->getUIType() eq '20' || $FIELD_MODEL->getUIType() eq '19' || $FIELD_MODEL->getUIType() eq '300'}
								{if $COUNTER eq '1'}
								{assign var=COUNTER value=0}
								{/if}
								{/if}
								{if $COUNTER eq 2}
								{assign var=COUNTER value=1}
								{else}
								{assign var=COUNTER value=$COUNTER+1}
								{/if}
								<div class="{if $FIELD_MODEL->get('label') eq "FL_REAPEAT"} col-sm-3
								{elseif $FIELD_MODEL->get('label') eq "FL_RECURRENCE"} col-sm-9
								{elseif $FIELD_MODEL->getUIType() neq "300"}col-sm-4
								{else} col-md-12 m-auto{/if} fieldRow row form-group align-items-center my-1">
									{assign var=HELPINFO value=explode(',',$FIELD_MODEL->get('helpinfo'))}
									{assign var=HELPINFO_LABEL value=$MODULE|cat:'|'|cat:$FIELD_MODEL->getFieldLabel()}
									<label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
										{if $FIELD_MODEL->isMandatory() eq true}<span class="redColor">*</span>{/if}
										{if in_array($VIEW,$HELPINFO) && \App\Language::translate($HELPINFO_LABEL, 'HelpInfo') neq $HELPINFO_LABEL}
											<a href="#" class="js-help-info float-right" title="" data-placement="top" data-content="{\App\Language::translate($HELPINFO_LABEL, 'HelpInfo')}" data-original-title="{\App\Language::translate($FIELD_MODEL->getFieldLabel(), $MODULE)}"><span class="fas fa-info-circle"></span></a>
										{/if}
										{\App\Language::translate($FIELD_MODEL->getFieldLabel(), $QUALIFIED_MODULE_NAME)}
									</label>
									<div class="{$WIDTHTYPE} w-100 {if $FIELD_MODEL->getUIType() neq "300"} col-lg-12 col-xl-9 {/if} fieldValue" {if $FIELD_MODEL->getUIType() eq '19' or $FIELD_MODEL->getUIType() eq '20'} colspan="3" {assign var=COUNTER value=$COUNTER+1}{elseif $FIELD_MODEL->getUIType() eq '300'} colspan="4" {assign var=COUNTER value=$COUNTER+1} {/if}>
										{if $FIELD_MODEL->getUIType() eq "300"}
											<label class="u-text-small-bold">{if $FIELD_MODEL->isMandatory() eq true}
													<span class="redColor">*</span>
												{/if}{\App\Language::translate($FIELD_MODEL->getFieldLabel(), $MODULE)}
											</label>
										{/if}
										{include file=\App\Layout::getTemplatePath($FIELD_MODEL->getUITypeModel()->getTemplateName(), $MODULE) BLOCK_FIELDS=$BLOCK_FIELDS}
									</div>
								</div>
								{/foreach}
							</div>
						</div>
					</div>
				{/if}
			{/foreach}
			{/strip}
			<script type="text/javascript">
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

			</script>