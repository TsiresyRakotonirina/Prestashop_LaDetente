<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:07
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d34f1ae5_94944058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd8eb460f12bdfa1b086d6bd78b0e0bc3d9a37e61' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\index.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d34f1ae5_94944058 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_49008767269e4a8d34e14c4_18314500', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_25549698269e4a8d34e4625_38338479 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_88549420969e4a8d34ea048_29582910 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_69350257869e4a8d34e7e04_21091656 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_88549420969e4a8d34ea048_29582910', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_49008767269e4a8d34e14c4_18314500 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_49008767269e4a8d34e14c4_18314500',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_25549698269e4a8d34e4625_38338479',
  ),
  'page_content' => 
  array (
    0 => 'Block_69350257869e4a8d34e7e04_21091656',
  ),
  'hook_home' => 
  array (
    0 => 'Block_88549420969e4a8d34ea048_29582910',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_25549698269e4a8d34e4625_38338479', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_69350257869e4a8d34e7e04_21091656', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
