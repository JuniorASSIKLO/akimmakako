<?php
/* Smarty version 3.1.48, created on 2024-07-11 10:09:13
  from 'C:\wamp64\www\akimmakako\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668faf4953b723_69613913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd0d2e4a3650a18fe089fd7e8ccbb6171b12377bf' => 
    array (
      0 => 'C:\\wamp64\\www\\akimmakako\\themes\\classic\\templates\\index.tpl',
      1 => 1720448850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668faf4953b723_69613913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1682828668668faf4951b0f9_77714413', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_872258129668faf4951c3f7_48606624 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_1290368619668faf49522b54_30668042 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_1968377438668faf4951f528_69658539 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1290368619668faf49522b54_30668042', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_1682828668668faf4951b0f9_77714413 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_1682828668668faf4951b0f9_77714413',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_872258129668faf4951c3f7_48606624',
  ),
  'page_content' => 
  array (
    0 => 'Block_1968377438668faf4951f528_69658539',
  ),
  'hook_home' => 
  array (
    0 => 'Block_1290368619668faf49522b54_30668042',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_872258129668faf4951c3f7_48606624', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1968377438668faf4951f528_69658539', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
