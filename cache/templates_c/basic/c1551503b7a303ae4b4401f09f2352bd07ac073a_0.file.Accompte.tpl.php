<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:14:15
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Reglements\Accompte.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73ce07c43805_65604040',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c1551503b7a303ae4b4401f09f2352bd07ac073a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Reglements\\Accompte.tpl',
      1 => 1550848014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73ce07c43805_65604040 (Smarty_Internal_Template $_smarty_tpl) {
?>

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

<?php if ($_smarty_tpl->tpl_vars['REGLEMENT']->value) {?>
    <?php echo '<script'; ?>
 type='text/javascript'>
        $(document).ready(function () {
            $("#OrderDetails").one('click');
        });
    <?php echo '</script'; ?>
>
    <input type="hidden" name="generateReglement" value="1">
<?php }?>
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ORDERDETAILS']->value, 'ORDERDETAIL', false, NULL, 'listview', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ORDERDETAIL']->value) {
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>
                        N° ordre</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="Reglements_editView_fieldName_libelleformError parentFormEditView formError" style="opacity: 0.87; position: absolute; top: 0px; left: 4px; right: initial; margin-top: -36px; display: block;" >
                            <div class="formErrorArrow">
                                
                                
                            </div>
                        </div>
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text" name="num_ord" id="num_ord" value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["num_ordre"];?>
" >

                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Date ordre</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["date_ordre"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Edition</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["edition"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Edition</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["edition"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Courtier</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["commercial"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Nom & prénom courtier</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"  value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["nom_commercial"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Firme</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"   value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["firme"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Raison sociale</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input class="tpl-Edit-Field-Base form-control nameField" type="text"   value="<?php echo $_smarty_tpl->tpl_vars['ORDERDETAIL']->value["raison_sociale"];?>
" disabled >
                    </div>
                </div>

                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">
                        <span class="redColor"></span>Montant HT</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <div class="tpl-Edit-Field-Currency"><div class="input-group">
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['ORDERDETAIL']->value["sum_total"]);?>
" disabled="">
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
                                <input id="Reglements_editView_fieldName_montant" type="numeric" title="Montant" class="currencyField form-control  textAlignRight " value="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['ORDERDETAIL']->value["sum_gross"]);?>
" disabled>
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

                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['facture_number']->value, 'NUMBER', false, NULL, 'listview', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['NUMBER']->value) {
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


                <div class="col-sm-4 fieldRow row form-group align-items-center my-1">
                    <label class="my-0 col-lg-12 col-xl-3 fieldLabel text-lg-left text-xl-right u-text-small-bold">Facture</label>
                    <div class="medium w-100  col-lg-12 col-xl-9  fieldValue">
                        <input name="facture" id="Reglements_editView_fieldName_facture" title="Facture" type="text" class="tpl-Edit-Field-Number form-control" value="<?php echo $_smarty_tpl->tpl_vars['NUMBER']->value["number"];?>
" disabled>
                    </div>
                </div>

            </div>
        </div>
    </div>

    
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
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['reglements']->value, 'reglement', false, NULL, 'listview', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['reglement']->value) {
?>

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
                                            <a role="button" class="btn btn-sm btn-default  js-popover-tooltip  Reglements_listViewBasic_action_LBL_EDIT" data-js="popover" data-placement="top" data-content="Editer" data-target="focus hover" href="index.php?module=Reglements&amp;view=Edit&amp;record=<?php echo $_smarty_tpl->tpl_vars['reglement']->value["reglementsid"];?>
" data-original-title="" title="">
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


                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["impaye"];?>
"><?php echo $_smarty_tpl->tpl_vars['reglement']->value["impaye"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["date_reg"];?>
"><?php echo $_smarty_tpl->tpl_vars['reglement']->value["date_reg"];?>

                        </td>

                        <td class="listViewEntryValue noWrap medium" data-field-type="date" data-raw-value="2019-02-26"><?php echo $_smarty_tpl->tpl_vars['reglement']->value["bordereau"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["mode_reg"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['reglement']->value["mode_reg"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["type"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['reglement']->value["type"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["date_valeur"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['reglement']->value["date_valeur"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["libelle"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['reglement']->value["libelle"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["facture"];?>
">
                            <?php echo $_smarty_tpl->tpl_vars['reglement']->value["facture"];?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['reglement']->value["montant"]);?>
">
                            <?php echo sprintf("%.2f",$_smarty_tpl->tpl_vars['reglement']->value["montant"]);?>

                        </td>
                        <td class="listViewEntryValue noWrap medium" data-field-type="picklist" data-raw-value="<?php echo $_smarty_tpl->tpl_vars['reglement']->value["etat_impaye"];?>
"><?php echo $_smarty_tpl->tpl_vars['reglement']->value["etat_impaye"];?>


                        </td>



                    </tr>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>




                </tbody>

            </table>
        </div>
    </div>
    
    <br><br><br><br>

    <?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions4.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


</form>
</body>
<?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="text/javascript">
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

<?php echo '</script'; ?>
>
</html>




<?php }
}
