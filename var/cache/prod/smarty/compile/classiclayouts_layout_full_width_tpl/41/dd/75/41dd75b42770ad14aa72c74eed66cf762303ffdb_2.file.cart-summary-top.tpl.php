<?php
/* Smarty version 3.1.48, created on 2023-09-09 13:54:32
  from 'C:\laragon\www\prestashop\themes\classic\templates\checkout\_partials\cart-summary-top.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_64fc5cf839d681_16195839',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '41dd75b42770ad14aa72c74eed66cf762303ffdb' => 
    array (
      0 => 'C:\\laragon\\www\\prestashop\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-top.tpl',
      1 => 1694101828,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_64fc5cf839d681_16195839 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="cart-summary-top js-cart-summary-top">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCheckoutSummaryTop'),$_smarty_tpl ) );?>

</div>
<?php }
}
