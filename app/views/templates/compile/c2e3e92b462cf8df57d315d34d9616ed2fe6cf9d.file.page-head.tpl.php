<?php /* Smarty version Smarty-3.0.8, created on 2017-03-04 12:56:26
         compiled from "app/views/templates\page-head.tpl" */ ?>
<?php /*%%SmartyHeaderCode:955558baab6a6fc9f5-97070338%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c2e3e92b462cf8df57d315d34d9616ed2fe6cf9d' => 
    array (
      0 => 'app/views/templates\\page-head.tpl',
      1 => 1488628582,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '955558baab6a6fc9f5-97070338',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<head lang="en">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

	<title><?php echo $_smarty_tpl->getVariable('title')->value;?>
</title>

	<!--<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>-->

	<?php if (isset($_smarty_tpl->getVariable('styles',null,true,false)->value)){?>
		<?php  $_smarty_tpl->tpl_vars['style'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('styles')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
if ($_smarty_tpl->_count($_from) > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['style']->key => $_smarty_tpl->tpl_vars['style']->value){
?>
			<link href="<?php echo $_smarty_tpl->getVariable('appURL')->value;?>
<?php echo $_smarty_tpl->tpl_vars['style']->value;?>
" rel="stylesheet">
		<?php }} ?>
	<?php }?>
</head>