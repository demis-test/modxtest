<?php /* Smarty version 3.1.27, created on 2017-02-25 09:26:19
         compiled from "/var/www/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:10069613658b14dbb123468_61175746%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a7c2199779712046d258f07f74a0c4d359515172' => 
    array (
      0 => '/var/www/manager/templates/default/welcome.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '10069613658b14dbb123468_61175746',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58b14dbb123cd0_59506506',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58b14dbb123cd0_59506506')) {
function content_58b14dbb123cd0_59506506 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '10069613658b14dbb123468_61175746';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>