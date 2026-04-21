<?php
/* Smarty version 4.5.5, created on 2026-04-21 16:40:01
  from 'C:\wamp64\www\prestashop9\themes\classic\templates\_partials\helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e78c411b71b7_62821566',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef52d6996a53e5cb7255cea4f9cfbfca95f2c59e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\themes\\classic\\templates\\_partials\\helpers.tpl',
      1 => 1761897630,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e78c411b71b7_62821566 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => 'C:\\wamp64\\www\\prestashop9\\var\\cache\\prod\\smarty\\compile\\classiclayouts_layout_full_width_tpl\\ef\\52\\d6\\ef52d6996a53e5cb7255cea4f9cfbfca95f2c59e_2.file.helpers.tpl.php',
    'uid' => 'ef52d6996a53e5cb7255cea4f9cfbfca95f2c59e',
    'call_name' => 'smarty_template_function_renderLogo_94042935169e78c411963f3_79715010',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_94042935169e78c411963f3_79715010 */
if (!function_exists('smarty_template_function_renderLogo_94042935169e78c411963f3_79715010')) {
function smarty_template_function_renderLogo_94042935169e78c411963f3_79715010(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['urls']->value['pages']['index']), ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src']), ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['name']), ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width']), ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars((string) ($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height']), ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_94042935169e78c411963f3_79715010 */
}
