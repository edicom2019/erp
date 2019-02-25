<?php
/* Smarty version 3.1.31, created on 2019-02-25 11:04:25
  from "C:\xampp\htdocs\erp_github\layouts\basic\modules\Vtiger\ListViewAlphabet.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c73cbb9c106b4_10300471',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c0c93c14eae84385291ddb0d2c1570da95a0b3c0' => 
    array (
      0 => 'C:\\xampp\\htdocs\\erp_github\\layouts\\basic\\modules\\Vtiger\\ListViewAlphabet.tpl',
      1 => 1551092132,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c73cbb9c106b4_10300471 (Smarty_Internal_Template $_smarty_tpl) {
?>

<input type="hidden" id="alphabetSearchKey" value= "<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getAlphabetSearchField();?>
" /><input type="hidden" id="Operator" value="<?php echo $_smarty_tpl->tpl_vars['OPERATOR']->value;?>
" /><input type="hidden" id="alphabetValue" value="<?php echo $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value;?>
" /><?php $_smarty_tpl->_assignInScope('ALPHABETS_LABEL', \App\Language::translate('LBL_ALPHABETS','Vtiger'));
$_smarty_tpl->_assignInScope('ALPHABETS', explode(',',$_smarty_tpl->tpl_vars['ALPHABETS_LABEL']->value));
?><div class="alphabetModal" tabindex="-1"><div class="modal fade"><div class="modal-dialog"><div class="modal-content"><div class="modal-header"><h5 class="modal-title"><?php echo \App\Language::translate('LBL_ALPHABETIC_FILTERING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</h5><button type="button" class="close" data-dismiss="modal" title="<?php echo \App\Language::translate('LBL_CLOSE');?>
"><span aria-hidden="true">&times;</span></button></div><?php $_smarty_tpl->_assignInScope('COUNT_ALPHABETS', count($_smarty_tpl->tpl_vars['ALPHABETS']->value));
?><div class="modal-body p-1"><div class="text-center noprint"><div class="p-0 m-auto alphabet_<?php echo $_smarty_tpl->tpl_vars['COUNT_ALPHABETS']->value;?>
 row "><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['ALPHABETS']->value, 'ALPHABET');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['ALPHABET']->value) {
?><div class="alphabetSearch u-cursor-pointer"><h5><a class="btn font-weight-bold <?php if (isset($_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value) && $_smarty_tpl->tpl_vars['ALPHABET_VALUE']->value == $_smarty_tpl->tpl_vars['ALPHABET']->value) {?>btn-primary<?php } else { ?>btn-light<?php }?>" role="button" id="<?php echo $_smarty_tpl->tpl_vars['ALPHABET']->value;?>
" href="#"><?php echo $_smarty_tpl->tpl_vars['ALPHABET']->value;?>
</a></h5></div><?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>
</div></div></div><div class="modal-footer"><button class="btn btn-danger removeAlfabetCondition" type="button" title="<?php echo \App\Language::translate('LBL_REMOVE_ALPH_SEARCH_INFO',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
" ><?php echo \App\Language::translate('LBL_REMOVE_FILTERING',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</button ></div></div></div></div></div>
<?php }
}
