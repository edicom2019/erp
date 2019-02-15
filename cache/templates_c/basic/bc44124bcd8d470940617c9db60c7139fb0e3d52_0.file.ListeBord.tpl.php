<?php
/* Smarty version 3.1.31, created on 2019-02-14 11:10:55
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/ListeBord.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c654cbfcc0227_47261817',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'bc44124bcd8d470940617c9db60c7139fb0e3d52' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/ListeBord.tpl',
      1 => 1550061603,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c654cbfcc0227_47261817 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .form-control {
        width: 20%!important;
    }
</style>
<div class="o-breadcrumb__container">
    <ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="http://localhost:8080/erp/"><span class="userIcon-Home" aria-hidden="true"></span><span class="sr-only">Ma page d'accueil</span></a></li><li class="breadcrumb-item"><a href="#">Remise des bordereaux</a></li><li class="breadcrumb-item"><a href="#">Changement bordereaux</a></li></small></ol></div>
<br>
<form class="form-horizontal createCustomFieldForm"  method="POST" >
    <input type="hidden" name="module" value="Reglements">
    <input type="hidden" name="view" value="ListeBord">
    <input type="hidden" name="mode" value="listeBordNonEnvoyePDF"/>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">date début</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="dated" id="dated" REQUIRED/>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Date fin</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="dateF"  id="dateF" REQUIRED/>
        </div>
    </div>

    <?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions2.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

</form>

<?php }
}
