<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:05
  from 'module:ps_bannerps_banner.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d1a04484_48075023',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '64034093fbda864710a2c0f526b37f921e53ee39' => 
    array (
      0 => 'module:ps_bannerps_banner.tpl',
      1 => 1761897630,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d1a04484_48075023 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '200798940369e4a8d19f3cd4_00000310';
?>
<a class="banner" href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_link']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
">
  <?php if ((isset($_smarty_tpl->tpl_vars['banner_img']->value))) {?>
    <img src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_img']->value), ENT_QUOTES, 'UTF-8');?>
" alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
" title="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" loading="lazy" width="1110" height="213">
  <?php } else { ?>
    <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['banner_desc']->value), ENT_QUOTES, 'UTF-8');?>
</span>
  <?php }?>
</a>
<?php }
}
