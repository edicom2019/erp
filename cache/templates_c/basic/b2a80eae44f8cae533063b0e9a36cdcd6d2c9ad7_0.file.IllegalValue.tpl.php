<?php
/* Smarty version 3.1.31, created on 2019-02-15 07:22:17
  from "/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/IllegalValue.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c6668a9a57df4_82236565',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b2a80eae44f8cae533063b0e9a36cdcd6d2c9ad7' => 
    array (
      0 => '/var/www/html/ERP/erp-equipe/erp/layouts/basic/modules/Vtiger/IllegalValue.tpl',
      1 => 1549880376,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c6668a9a57df4_82236565 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html><html><head><title>Yetiforce: <?php echo \App\Language::translate('LBL_BAD_REQUEST');?>
</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="SHORTCUT ICON" href="<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/bootstrap/dist/css/bootstrap.css');?>
" type="text/css" media="screen"></head><body style="background: #ddecf0;"><div class="container"><div style="margin-top: 70px;" class="alert alert-warning shadow"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><h2 class="alert-heading"><?php echo \App\Language::translate('LBL_BAD_REQUEST');?>
</h2><p><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</p><p class="Buttons"><a class="btn btn-info" role="button" href="index.php"><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></p></div></div></body></html>
<?php }
}
