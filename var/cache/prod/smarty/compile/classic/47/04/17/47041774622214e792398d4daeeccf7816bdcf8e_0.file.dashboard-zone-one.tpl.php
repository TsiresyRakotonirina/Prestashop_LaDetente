<?php
/* Smarty version 4.5.5, created on 2026-04-19 12:09:05
  from 'C:\wamp64\www\prestashop9\modules\ps_mbo\views\templates\hook\dashboard-zone-one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.5',
  'unifunc' => 'content_69e4a9c18c7438_92492336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47041774622214e792398d4daeeccf7816bdcf8e' => 
    array (
      0 => 'C:\\wamp64\\www\\prestashop9\\modules\\ps_mbo\\views\\templates\\hook\\dashboard-zone-one.tpl',
      1 => 1765876242,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69e4a9c18c7438_92492336 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_templating_url']->value;?>
"><?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['cdc_script_not_found']->value) {?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_error_url']->value;?>
"><?php echo '</script'; ?>
>
<?php } else { ?>
  <?php echo '<script'; ?>
 defer type="application/javascript" src="<?php echo $_smarty_tpl->tpl_vars['cdc_url']->value;?>
"><?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['urlAccountsCdn']->value))) {?>
  <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['urlAccountsCdn']->value;?>
" rel=preload><?php echo '</script'; ?>
>
  <?php echo '<script'; ?>
 defer>
    var psAccountLoaded = false;
    if (window?.psaccountsVue) {
      window?.psaccountsVue?.init();
      psAccountLoaded = true;
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php echo '<script'; ?>
>
  window.$(document).ready(function () {
    window.mboDashboardContext = null;
    if (typeof window.mboCdc == undefined || typeof window.mboCdc == "undefined") {
      if (typeof renderCdcError === 'function') {
        renderCdcError($('#cdc-tips-and-update-container'));
      }
    } else {
      const renderTipsAndUpdate = window.mboCdc.renderDashboardTipsAndUpdate

      window.mboDashboardContext = <?php echo $_smarty_tpl->tpl_vars['shop_context']->value;?>
;

      if (psAccountLoaded) {
        window.mboDashboardContext.accounts_component_loaded = true;
      }

      renderTipsAndUpdate(window.mboDashboardContext, '#cdc-tips-and-update-container')
    }
  });
<?php echo '</script'; ?>
>

<prestashop-accounts style="display: none;"></prestashop-accounts>

<section id="cdc-tips-and-update-container" class="cdc-container" data-error-path="<?php echo $_smarty_tpl->tpl_vars['cdcErrorUrl']->value;?>
"></section>
<?php }
}
