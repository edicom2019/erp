
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
<div class="o-breadcrumb__container">
    <ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="http://localhost:8080/erp/"><span class="userIcon-Home" aria-hidden="true"></span><span class="sr-only">Ma page d'accueil</span></a></li><li class="breadcrumb-item"><a href="index.php?module=Reglements&view=Impayes">Saisie des inmpayés</a></li></ol></div>
<br>

{if $REGLEMENT }
    <script type='text/javascript'>
        $(document).ready(function () {
            $("#OrderDetails").one('click');
        });
    </script>
    <input type="hidden" name="generateReglement" value="1">
{/if}
<form class="form-horizontal createCustomFieldForm"  method="POST" >
    <input type="hidden" name="module" value="Reglements">
    <input type="hidden" name="view" value="Accompte">
    <input type="hidden" name="mode" value="OrderDetails"/>

    <div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="LBL_BASIC_INFORMATION">
        <div class="blockHeader c-panel__header align-items-center">
            <svg class="svg-inline--fa fa-angle-right fa-w-8 u-cursor-pointer js-block-toggle m-2 d-none" data-js="click" data-mode="hide" data-id="456" aria-hidden="true" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
            </svg><!-- <span class="u-cursor-pointer js-block-toggle fas fa-angle-right m-2 d-none" data-js="click" data-mode="hide" data-id="456"></span> -->
            <!-- <span class="u-cursor-pointer js-block-toggle fas fa-angle-down m-2 " data-js="click" data-mode="show" data-id="456"></span> -->
            <h5 class="m-0">Détails Order</h5>
        </div>
        <div class="c-panel__body c-panel__body--edit blockContent js-block-content " data-js="display">
            <div class="row">
                {foreach item=ORDERDETAIL from=$ORDERDETAILS name=listview}
                {/foreach}

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>
                        N° ordre</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="Reglements_editView_fieldName_libelleformError parentFormEditView formError" style="opacity: 0.87; position: absolute; top: 0px; left: 4px; right: initial; margin-top: -36px; display: block;" >
                            {*<div class="formErrorContent">* Ce champ est requis</div>*}<div class="formErrorArrow">
                                {* <div class="line10"><!-- --></div>*}
                                {*<div class="line9"><!-- --></div>
                                <div class="line8"><!-- --></div>
                                <div class="line7"><!-- --></div>
                                <div class="line6"><!-- --></div>
                                <div class="line5"><!-- --></div>
                                <div class="line4"><!-- --></div>
                                <div class="line3"><!-- --></div>
                                <div class="line2"><!-- --></div>
                                <div class="line1"><!-- --></div>*}
                            </div>
                        </div>
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text" name="num_ord" id="num_ord" value="{$ORDERDETAIL["num_ordre"]}" >

                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Date ordre</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="{$ORDERDETAIL["date_ordre"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Edition</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="{$ORDERDETAIL["edition"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Edition</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="{$ORDERDETAIL["edition"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Courtier</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="{$ORDERDETAIL["commercial"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Nom & prénom courtier</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="{$ORDERDETAIL["nom_commercial"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Firme</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"   value="{$ORDERDETAIL["firme"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Raison sociale</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"   value="{$ORDERDETAIL["raison_sociale"]}" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>Montant HT</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="{$ORDERDETAIL["sum_total"]|string_format:"%.2f"}" disabled="">
                                <span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> DH</span>
                                </span
                                ></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>Taux</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="20"  disabled="">
                                <span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> %</span>
                                </span
                                ></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>TVA</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="20" disabled>
                                <span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> DH</span>
                                </span
                                ></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>TTC</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="{$ORDERDETAIL["sum_gross"]|string_format:"%.2f"}" disabled>
                                <span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> DH</span>
                                </span
                                ></div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>Montant non taxé</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="" disabled>
                                <span class="input-group-append"><span class="input-group-text js-currency" data-js="text"> DH</span>
                                </span
                                ></div>
                        </div>
                    </div>
                </div>

                {foreach item=NUMBER from=$facture_number name=listview}
                {/foreach}

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Facture</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input name="facture" id="Reglements_editView_fieldName_facture" title="Facture" type="text" class="tpl-Edit-Field-Number form-control" value="{$NUMBER["number"]}" disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {*<-------------------------------------------------------------------------------------------------------------------->*}
    <br>
    <div class="js-toggle-panel c-panel c-panel--edit row  mx-1 mb-3" data-js="click" data-label="LBL_BASIC_INFORMATION">
        <div class="blockHeader c-panel__header align-items-center">
            <svg class="svg-inline--fa fa-angle-right fa-w-8 u-cursor-pointer js-block-toggle m-2 d-none" data-js="click" data-mode="hide" data-id="456" aria-hidden="true" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg="">
                <path fill="currentColor" d="M224.3 273l-136 136c-9.4 9.4-24.6 9.4-33.9 0l-22.6-22.6c-9.4-9.4-9.4-24.6 0-33.9l96.4-96.4-96.4-96.4c-9.4-9.4-9.4-24.6 0-33.9L54.3 103c9.4-9.4 24.6-9.4 33.9 0l136 136c9.5 9.4 9.5 24.6.1 34z"></path>
            </svg>
            <h5 class="m-0">Détails réglement</h5>
        </div>
        <div class="listViewEntriesDiv u-overflow-scroll-xs-down">
            <input type="hidden" value="" id="orderBy">
            <input type="hidden" value="ASC" id="sortOrder">
            <div class="listViewLoadingImageBlock d-none modal noprint" id="loadingListViewModal">
                <img class="listViewLoadingImage" src="public_html/layouts/basic/images/loading.gif" alt="no-image" title="Chargement">
                <p class="listViewLoadingMsg">Chargement, merci de patienter.........</p>
            </div>
            <table class="table tableBorderHeadBody listViewEntriesTable medium ">

                <thead>
                <tr class="listViewHeaders">


                    <th class="p-2">
                        <label class="sr-only" for="listViewEntriesMainCheckBox">Sélectionner tous
                        </label>
                        <input type="checkbox" id="listViewEntriesMainCheckBox" title="Sélectionner tous">
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="date_reg">Impayés&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="date_reg">Date règlement&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="date_reg">Bordereau&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="mode_reg">Mode règlement&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="type">Type réglement&nbsp;&nbsp;
                        </a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="date_valeur">Date Valeur&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="libelle">Libelle&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="libelle">N° facture&nbsp;&nbsp;</a>
                    </th>
                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="montant">Montant&nbsp;&nbsp;</a>
                    </th>


                    <th class="noWrap p-2 ">
                        <a href="javascript:void(0);" class="listViewHeaderValues float-left" data-nextsortorderval="ASC" data-columnname="date_reg">Impayés&nbsp;&nbsp;</a>
                    </th>

                </tr>
                </thead>

                <tbody>
                {foreach item=reglement from=$reglements name=listview}

                    <tr class="listViewEntries" data-id="468" data-recordurl="index.php?module=Reglements&amp;view=Detail&amp;record=468" id="Reglements_listView_row_1"><td class="medium noWrap leftRecordActions" style="border-left-color: #009405;">

                            <div>
                                <input type="checkbox" value="468" class="listViewEntriesCheckBox" title="Sélectionner une seule ligne">
                            </div>
                            <div class="actions"><div class="dropright u-remove-dropdown-icon">
                                    <button class="btn btn-sm btn-light toolsAction dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><svg class="svg-inline--fa fa-wrench fa-w-16" title="Actions" aria-labelledby="svg-inline--fa-title-24" data-prefix="fas" data-icon="wrench" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                                            <title id="svg-inline--fa-title-24">Actions
                                            </title>
                                            <path fill="currentColor" d="M507.73 109.1c-2.24-9.03-13.54-12.09-20.12-5.51l-74.36 74.36-67.88-11.31-11.31-67.88 74.36-74.36c6.62-6.62 3.43-17.9-5.66-20.16-47.38-11.74-99.55.91-136.58 37.93-39.64 39.64-50.55 97.1-34.05 147.2L18.74 402.76c-24.99 24.99-24.99 65.51 0 90.5 24.99 24.99 65.51 24.99 90.5 0l213.21-213.21c50.12 16.71 107.47 5.68 147.37-34.22 37.07-37.07 49.7-89.32 37.91-136.73zM64 472c-13.25 0-24-10.75-24-24 0-13.26 10.75-24 24-24s24 10.74 24 24c0 13.25-10.75 24-24 24z"></path>
                                        </svg><!-- <span class="fas fa-wrench" title="Actions"></span> -->
                                    </button>
                                    <div class="dropdown-menu" aria-label="Actions">


                                        <div class="tpl-ButtonLink c-btn-link btn-group ">
                                            <a role="button" class="btn btn-sm btn-default  js-popover-tooltip  Reglements_listViewBasic_action_LBL_EDIT" data-js="popover" data-placement="top" data-content="Editer" data-target="focus hover" href="index.php?module=Reglements&amp;view=Edit&amp;record={$reglement["reglementsid"]}" data-original-title="" title="">
                                                <svg class="svg-inline--fa fa-edit fa-w-18" title="Editer" aria-labelledby="svg-inline--fa-title-27" data-prefix="fas" data-icon="edit" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                                                    <title id="svg-inline--fa-title-27">Editer</title>
                                                    <path fill="currentColor" d="M402.6 83.2l90.2 90.2c3.8 3.8 3.8 10 0 13.8L274.4 405.6l-92.8 10.3c-12.4 1.4-22.9-9.1-21.5-21.5l10.3-92.8L388.8 83.2c3.8-3.8 10-3.8 13.8 0zm162-22.9l-48.8-48.8c-15.2-15.2-39.9-15.2-55.2 0l-35.4 35.4c-3.8 3.8-3.8 10 0 13.8l90.2 90.2c3.8 3.8 10 3.8 13.8 0l35.4-35.4c15.2-15.3 15.2-40 0-55.2zM384 346.2V448H64V128h229.8c3.2 0 6.2-1.3 8.5-3.5l40-40c7.6-7.6 2.2-20.5-8.5-20.5H48C21.5 64 0 85.5 0 112v352c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48V306.2c0-10.7-12.9-16-20.5-8.5l-40 40c-2.2 2.3-3.5 5.3-3.5 8.5z"></path>
                                                </svg><!-- <span class="fas fa-edit " title="Editer"></span> --></a>
                                        </div>
                                        <div class="tpl-ButtonLink c-btn-link btn-group ">
                                            <a role="button" class="btn btn-sm btn-default  js-popover-tooltip  Reglements_listViewBasic_action_LBL_EDIT" data-js="popover" data-placement="top" data-content="Nouveau" data-target="focus hover" href="index.php?module=Acomptes&view=Edit" data-original-title="" title="" target="_blank">
                                                <svg class="svg-inline--fa fa-plus fa-w-14 fa-fw" title="Création rapide" aria-labelledby="svg-inline--fa-title-8" data-prefix="fas" data-icon="plus" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                                                    <title id="svg-inline--fa-title-8">Nouveau</title>
                                                    <path fill="currentColor" d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z">

                                                    </path>
                                                </svg>
                                            </a>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div>

                            </div>
                        </td>


                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="{$reglement["impaye"]}">{$reglement["impaye"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="{$reglement["date_reg"]}">{$reglement["date_reg"]}
                        </td>

                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="2019-02-26">{$reglement["bordereau"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["mode_reg"]}">
                            {$reglement["mode_reg"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["type"]}">
                            {$reglement["type"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["date_valeur"]}">
                            {$reglement["date_valeur"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["libelle"]}">
                            {$reglement["libelle"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["facture"]}">
                            {$reglement["facture"]}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["montant"]|string_format:"%.2f"}">
                            {$reglement["montant"]|string_format:"%.2f"}
                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="{$reglement["etat_impaye"]}">{$reglement["etat_impaye"]}

                        </td>



                    </tr>
                {/foreach}



                </tbody>

            </table>
        </div>
    </div>
    {*<-------------------------------------------------------------------------------------------------------------------->*}
    <br><br><br><br>

    {include file=\App\Layout::getTemplatePath('EditViewActions4.tpl', $MODULE)}

</form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#accompte').click(function(){
            var num_ordre =$('#num_ordre').val();

            let url = "index.php?module=Reglements&view=Cheque&mode=getEncaissement&num_ordre="+num_ordre;
            AppConnector.request(url).done(function (data) {
                console.log(data);

            }).fail(function (error) {
                console.log(error);
            });
        });
    });

</script>
</html>




