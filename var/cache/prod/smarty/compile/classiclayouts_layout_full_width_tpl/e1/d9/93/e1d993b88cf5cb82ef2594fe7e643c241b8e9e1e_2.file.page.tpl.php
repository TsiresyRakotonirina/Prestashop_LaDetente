<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:07
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d3a36073_89317453',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1d993b88cf5cb82ef2594fe7e643c241b8e9e1e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\page.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d3a36073_89317453 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9583050069e4a8d3a09bd5_06209842', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_27306718869e4a8d3a111a2_84467851 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_3206762769e4a8d3a0c9a8_58170578 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_27306718869e4a8d3a111a2_84467851', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_67601275669e4a8d3a21cd7_73655148 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_28847372669e4a8d3a25fc8_86874367 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_55294049369e4a8d3a1ebc8_83797750 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <div id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_67601275669e4a8d3a21cd7_73655148', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_28847372669e4a8d3a25fc8_86874367', 'page_content', $this->tplIndex);
?>

      </div>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_211810713669e4a8d3a2f0c7_20947366 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12756641669e4a8d3a2c754_76265396 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_211810713669e4a8d3a2f0c7_20947366', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_9583050069e4a8d3a09bd5_06209842 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_9583050069e4a8d3a09bd5_06209842',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_3206762769e4a8d3a0c9a8_58170578',
  ),
  'page_title' => 
  array (
    0 => 'Block_27306718869e4a8d3a111a2_84467851',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_55294049369e4a8d3a1ebc8_83797750',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_67601275669e4a8d3a21cd7_73655148',
  ),
  'page_content' => 
  array (
    0 => 'Block_28847372669e4a8d3a25fc8_86874367',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12756641669e4a8d3a2c754_76265396',
  ),
  'page_footer' => 
  array (
    0 => 'Block_211810713669e4a8d3a2f0c7_20947366',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3206762769e4a8d3a0c9a8_58170578', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_55294049369e4a8d3a1ebc8_83797750', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12756641669e4a8d3a2c754_76265396', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
