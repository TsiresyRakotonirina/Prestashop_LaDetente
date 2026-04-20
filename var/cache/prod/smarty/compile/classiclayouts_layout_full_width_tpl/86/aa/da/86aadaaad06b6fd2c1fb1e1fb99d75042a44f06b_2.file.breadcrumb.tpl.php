<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:09
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\_partials\breadcrumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d545c5b3_25382966',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '86aadaaad06b6fd2c1fb1e1fb99d75042a44f06b' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\_partials\\breadcrumb.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d545c5b3_25382966 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<nav data-depth="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['breadcrumb']->value['count']), ENT_QUOTES, 'UTF-8');?>
" class="breadcrumb">
  <ol>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_98800317669e4a8d5387e62_75495096', 'breadcrumb');
?>

  </ol>
</nav>
<?php }
/* {block 'breadcrumb_item'} */
class Block_4209251569e4a8d5391d29_01865183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <li>
            <?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>
              <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['url']), ENT_QUOTES, 'UTF-8');?>
"><span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['title']), ENT_QUOTES, 'UTF-8');?>
</span></a>
            <?php } else { ?>
              <span><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['path']->value['title']), ENT_QUOTES, 'UTF-8');?>
</span>
            <?php }?>
          </li>
        <?php
}
}
/* {/block 'breadcrumb_item'} */
/* {block 'breadcrumb'} */
class Block_98800317669e4a8d5387e62_75495096 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'breadcrumb' => 
  array (
    0 => 'Block_98800317669e4a8d5387e62_75495096',
  ),
  'breadcrumb_item' => 
  array (
    0 => 'Block_4209251569e4a8d5391d29_01865183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'last' => true,
  'iteration' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4209251569e4a8d5391d29_01865183', 'breadcrumb_item', $this->tplIndex);
?>

      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    <?php
}
}
/* {/block 'breadcrumb'} */
}
