<?php /* Smarty version Smarty-3.0.8, created on 2017-01-07 20:10:54
         compiled from "app/views/templates\page-footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:339758713d3e666151-85069541%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'be1c7f4a56b723d3b69ce734efcbb3b597d592e5' => 
    array (
      0 => 'app/views/templates\\page-footer.tpl',
      1 => 1483815542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '339758713d3e666151-85069541',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (isset($_smarty_tpl->getVariable('scripts',null,true,false)->value)){?>
	<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('scripts')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
?>
		<script src="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
	<?php }} ?>
<?php }?>
