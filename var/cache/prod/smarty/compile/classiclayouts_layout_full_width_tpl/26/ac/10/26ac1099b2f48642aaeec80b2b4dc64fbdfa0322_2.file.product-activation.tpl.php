<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:05:08
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\catalog\_partials\product-activation.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a8d47a24e1_00612398',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26ac1099b2f48642aaeec80b2b4dc64fbdfa0322' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\catalog\\_partials\\product-activation.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a8d47a24e1_00612398 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['page']->value['admin_notifications']) {?>
  <div class="alert alert-warning row" role="alert">
    <div class="container">
      <div class="row">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['page']->value['admin_notifications'], 'notif');
$_smarty_tpl->tpl_vars['notif']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->do_else = false;
?>
          <div class="col-sm-12">
            <i class="material-icons float-xs-left">&#xE001;</i>
            <p class="alert-text"><?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['notif']->value['message']), ENT_QUOTES, 'UTF-8');?>
</p>
          </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      </div>
    </div>
  </div>
<?php }
}
}
