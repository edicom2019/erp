<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:02:34
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\OperationNotPermitted.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cb4acdd409_89995004',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db87ff4efb1cc95c5e7b10c79603b613c966d190' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\OperationNotPermitted.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cb4acdd409_89995004 (Smarty_Internal_Template $_smarty_tpl) {
?>

<!DOCTYPE html>
<html><head><title>Yetiforce: <?php echo \App\Language::translate('LBL_ERROR');?>
</title><meta name="viewport" content="width=device-width, initial-scale=1.0"><link rel="SHORTCUT ICON" href="<?php echo \App\Layout::getImagePath('favicon.ico');?>
"><meta http-equiv="Content-Type" content="text/html; charset=UTF-8"><link rel="stylesheet" href="<?php echo \App\Layout::getPublicUrl('libraries/bootstrap/dist/css/bootstrap.css');?>
" type="text/css" media="screen"><?php echo '<script'; ?>
 type="text/javascript" src="<?php echo \App\Layout::getPublicUrl('libraries/jquery/dist/jquery.min.js');?>
"><?php echo '</script'; ?>
></head><body><div class="mt-3 alert alert-danger shadow"><div class="position-relative"><div><h2 class="alert-heading"><?php echo \App\Language::translate('LBL_ERROR');?>
</h2><p><?php echo \App\Purifier::encodeHtml($_smarty_tpl->tpl_vars['MESSAGE']->value);?>
</p><p class="Buttons"><a class="btn btn-warning" role="button" href="javascript:window.history.back();"><?php echo \App\Language::translate('LBL_GO_BACK');?>
</a><a class="btn btn-info" role="button" href="index.php"><?php echo \App\Language::translate('LBL_MAIN_PAGE');?>
</a></p></div></div></div></body></html>
<?php }
}
