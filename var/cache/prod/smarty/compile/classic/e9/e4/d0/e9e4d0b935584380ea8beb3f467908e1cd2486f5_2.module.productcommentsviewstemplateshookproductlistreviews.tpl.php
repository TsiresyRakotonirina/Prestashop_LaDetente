<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:05
  from 'module:productcommentsviewstemplateshookproductlistreviews.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d181b2c9_12003183',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9e4d0b935584380ea8beb3f467908e1cd2486f5' => 
    array (
      0 => 'module:productcommentsviewstemplateshookproductlistreviews.tpl',
      1 => 1713957024,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d181b2c9_12003183 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="product-list-reviews" data-id="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['product']->value['id']), ENT_QUOTES, 'UTF-8');?>
" data-url="<?php echo $_smarty_tpl->tpl_vars['product_comment_grade_url']->value;?>
">
  <div class="grade-stars small-stars"></div>
  <div class="comments-nb"></div>
</div>
<?php }
}
