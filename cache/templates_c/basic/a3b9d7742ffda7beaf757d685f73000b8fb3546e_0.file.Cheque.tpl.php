<?php
/* Smarty version 3.1.31, created on 2019-02-12 14:31:20
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/Cheque.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c62d8b8d85a94_05913846',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a3b9d7742ffda7beaf757d685f73000b8fb3546e' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Reglements/Cheque.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c62d8b8d85a94_05913846 (Smarty_Internal_Template $_smarty_tpl) {
?>
<style>
    .form-control {
        width: 20%!important;
    }
</style>

<div class="o-breadcrumb__container">
    <ol class="breadcrumb breadcrumbsContainer my-0 py-auto pl-2 pr-0"><li class="breadcrumb-item"><a href="http://localhost:8080/erp/"><span class="userIcon-Home" aria-hidden="true"></span><span class="sr-only">Ma page d'accueil</span></a></li><li class="breadcrumb-item"><a href="#">Encaissement</a></li><li class="breadcrumb-item"><a href="#">Chèques</a></li></small></ol></div>
<br>
<form class="form-horizontal createCustomFieldForm"  method="POST" >
    <input type="hidden" name="module" value="Reglements">
    <input type="hidden" name="view" value="Cheque">
    <input type="hidden" name="banque" value="<?php echo $_smarty_tpl->tpl_vars['BANQUE']->value;?>
">
    <input type="hidden" name="type" value="<?php echo $_smarty_tpl->tpl_vars['TYPE']->value;?>
">
    <input type="hidden" name="mode" value="updateBordereau"/>
    <div class="form-group row">
        <label for="staticEmail" class="col-sm-2 col-form-label u-text-small-bold">Date Echeance</label>
        <div class="col-sm-10">
            <input type="date" class=" form-control" name="date_echeance" id="date_echeance" value="<?php echo '<?php ';?>echo date('d/m/Y'); <?php echo '?>';?>" required>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputPassword" class="col-sm-2 col-form-label u-text-small-bold">Nombre de chèques</label>
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
            <input type="text" class=" form-control" name="bordereau" value="<?php echo $_smarty_tpl->tpl_vars['BORDERAU']->value;?>
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
            let url = "index.php?module=Reglements&view=Cheque&mode=getEncaissement&banque=<?php echo $_smarty_tpl->tpl_vars['BANQUE']->value;?>
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
    });
    $('#estimation').on('click keyup change',function(){
        var bordereau =$('#date_echeance').val();
        var date_echeance =$('#date_echeance').val();
        let url = "index.php?action=Effet&record=156&mode=updateBordereauEffets&bordereau="+bordereau+"&date_echeance="+date_echeance;
        AppConnector.request(url).done(function (data) {
            console.log(data.result);
        }).fail(function (error) {
            console.log(error);
        });
    });
<?php echo '</script'; ?>
><?php }
}
