<?php
/* Smarty version 3.1.48, created on 2024-07-11 10:09:14
  from 'module:blockwishlistviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668faf4a567034_08733936',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a6cf26c62a3d814aa3a70f19a62034bfdce54c8a' => 
    array (
      0 => 'module:blockwishlistviewstemplat',
      1 => 1720448848,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668faf4a567034_08733936 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div
    class="wishlist-toast"
    data-rename-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist name modified!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-added-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product added to wishlist!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-create-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist created!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-delete-wishlist-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Wishlist deleted!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-copy-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Share link copied!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
    data-delete-product-text="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product deleted!','d'=>'Modules.Blockwishlist.Shop'),$_smarty_tpl ) );?>
"
  ></div>
<?php }
}
