<?php
/* Smarty version 3.1.48, created on 2024-07-11 10:09:13
  from 'C:\wamp64\www\akimmakako\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668faf4975bb38_91995577',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '999ea0a988fff18e9382a7505a9f1194f829ce1f' => 
    array (
      0 => 'C:\\wamp64\\www\\akimmakako\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1720448850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668faf4975bb38_91995577 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\akimmakako\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\99\\9e\\a0\\999ea0a988fff18e9382a7505a9f1194f829ce1f_2.file.helpers.tpl.php',
    'uid' => '999ea0a988fff18e9382a7505a9f1194f829ce1f',
    'call_name' => 'smarty_template_function_renderLogo_123082269668faf4972a319_31262783',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_123082269668faf4972a319_31262783 */
if (!function_exists('smarty_template_function_renderLogo_123082269668faf4972a319_31262783')) {
function smarty_template_function_renderLogo_123082269668faf4972a319_31262783(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_123082269668faf4972a319_31262783 */
}
