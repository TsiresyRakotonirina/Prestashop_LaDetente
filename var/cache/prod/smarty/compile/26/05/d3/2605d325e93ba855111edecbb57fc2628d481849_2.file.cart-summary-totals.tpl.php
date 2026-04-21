<?php
/* Smarty version 4.5.5, created on 2026-04-21 16:40:03
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\checkout\_partials\cart-summary-totals.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e78c43b1c5c3_41673368',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2605d325e93ba855111edecbb57fc2628d481849' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\checkout\\_partials\\cart-summary-totals.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e78c43b1c5c3_41673368 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div class="card-block cart-summary-totals js-cart-summary-totals">

  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_53115734969e78c43af40c1_98660390', 'cart_summary_total');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_202671510369e78c43b0d226_66234012', 'cart_summary_tax');
?>


</div>
<?php }
/* {block 'cart_summary_total'} */
class Block_53115734969e78c43af40c1_98660390 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_total' => 
  array (
    0 => 'Block_53115734969e78c43af40c1_98660390',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
      <div class="cart-summary-line">
        <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short']), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['label']), ENT_QUOTES, 'UTF-8');?>
</span>
        <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total_including_tax']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php } else { ?>
      <div class="cart-summary-line cart-total">
        <span class="label"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['label']), ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['display_taxes_label'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['labels']['tax_short']), ENT_QUOTES, 'UTF-8');
}?></span>
        <span class="value"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['totals']['total']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_total'} */
/* {block 'cart_summary_tax'} */
class Block_202671510369e78c43b0d226_66234012 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'cart_summary_tax' => 
  array (
    0 => 'Block_202671510369e78c43b0d226_66234012',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']) {?>
      <div class="cart-summary-line">
        <span class="label sub"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
        <span class="value sub"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['cart']->value['subtotals']['tax']['value']), ENT_QUOTES, 'UTF-8');?>
</span>
      </div>
    <?php }?>
  <?php
}
}
/* {/block 'cart_summary_tax'} */
}
