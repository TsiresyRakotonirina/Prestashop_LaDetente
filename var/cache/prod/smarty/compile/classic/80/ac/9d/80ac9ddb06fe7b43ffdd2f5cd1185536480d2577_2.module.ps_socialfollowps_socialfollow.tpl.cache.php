<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:09
  from 'module:ps_socialfollowps_socialfollow.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d55f33a0_90110809',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollowps_socialfollow.tpl',
      1 => 1761897630,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d55f33a0_90110809 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->compiled->nocache_hash = '73662935969e4a8d55c91e7_51817830';
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_128359295369e4a8d55d2c02_65006135', 'block_social');
?>

<?php }
/* {block 'block_social'} */
class Block_128359295369e4a8d55d2c02_65006135 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'block_social' => 
  array (
    0 => 'Block_128359295369e4a8d55d2c02_65006135',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['social_links']->value, 'social_link');
$_smarty_tpl->tpl_vars['social_link']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->do_else = false;
?>
        <li class="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['class']), ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['url']), ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noopener noreferrer"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['social_link']->value['label']), ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
  </div>
<?php
}
}
/* {/block 'block_social'} */
}
