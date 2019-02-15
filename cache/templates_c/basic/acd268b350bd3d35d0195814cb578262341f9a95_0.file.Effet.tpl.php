<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:31:17
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/Effet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8b59c66a2_77110599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'acd268b350bd3d35d0195814cb578262341f9a95' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/Effet.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8b59c66a2_77110599 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .form-control {
        width: 20%!important;
    }
</style>

<div class="o-breadcrumb__container">
    <ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="http://localhost:8080/erp/"><span class="userIcon-Home" aria-hidden="true"></span><span class="sr-only">Ma page d'accueil</span></a></li><li class="breadcrumb-item"><a href="#">Encaissement</a></li><li class="breadcrumb-item"><a href="#">Effets</a></li></small></ol></div>
<br>
<form class="form-horizontal createCustomFieldForm"  method="POST" >
        <input type="hidden" name="module" value="Reglements">
        <input type="hidden" name="view" value="Effet">
        <input type="hidden" name="banque" value="<?php echo $_smarty_tpl->tpl_vars['BANQUE']->value;?>
">
        <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
">
        <div class="form-group row">
            <label for="staticEmail" class="col-sm-2 col-form-label u-text-small-bold">Date Echeance</label>
            <div class="col-sm-10">
                <input type="date" class=" form-control" name="date_echeance" id="date_echeance" value="<?php echo '<?php ';?>echo date('d/m/Y'); <?php echo '?>';?>" required>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Nombre d'effets</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nbr_effets" id="nbr_effets" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Nombre de bordereaux</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="nbr_bordereaux" id="nbr_bordereaux" readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Bordereau</label>
            <div class="col-sm-10">
                <input type="text" class=" form-control" name="bordereau" id="bordereau" value="<?php echo $_smarty_tpl->tpl_vars['BORDERAU']->value;?>
" required>
            </div>
        </div>
        <?php $_smarty_tpl->_subTemplateRender(\App\Layout::getTemplatePath('EditViewActions.tpl',$_smarty_tpl->tpl_vars['MODULE']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


        
</form>
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function() {
        $('#date_echeance').change(function(){
            var date_echeance =$('#date_echeance').val();
            /* var date_echeance = moment(date_echeance).format("YYYY-DD-MM");*/
            let url = "index.php?module=Reglements&view=Effet&mode=getEncaissement&banque=<?php echo $_smarty_tpl->tpl_vars['BANQUE']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
&date_echeance="+date_echeance;
            AppConnector.request(url).done(function (data) {
                console.log(data);
                $('#nbr_effets').val(data);
                $('#nbr_bordereaux').val(1);
            }).fail(function (error) {
                console.log(error);
            });
        });
         $('#update').click(function(){
            var date_echeance =$('#date_echeance').val();
            var bordereau =$('#bordereau').val();
             /*var date_echeance = moment(date_echeance).format("YYYY-DD-MM");*/
            let url = "index.php?module=Reglements&view=Effet&mode=updateBordereau&banque=<?php echo $_smarty_tpl->tpl_vars['BANQUE']->value;?>
&type=<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
&date_echeance="+date_echeance+"&bordereau="+bordereau;
            AppConnector.request(url).done(function (data) {
                console.log(data);
                let params = { text: "Bordereau modifié avec succès!", type: 'success'};
                Vtiger_Helper_Js.showPnotify(params);
            }).fail(function (error) {
                console.log(error);
                Vtiger_Helper_Js.showPnotify('Bordereau non modifié!');
            });
        });


    });

<?php echo '</script'; ?>
><?php }
}
