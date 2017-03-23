<?php /* Smarty version Smarty-3.0.8, created on 2017-03-04 12:58:09
         compiled from "app/views/templates\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3148658baabd1181c61-45119396%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0dd59c2536946ad1c1c4ce86879deb9a2604cac3' => 
    array (
      0 => 'app/views/templates\\index.tpl',
      1 => 1488628686,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3148658baabd1181c61-45119396',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<!DOCTYPE html>
<html>

<?php $_template = new Smarty_Internal_Template('page-head.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>

<body>

	<header></header>

	<main class="container">

		<h2>We have lift-off !</h2>

		<h3>Subheading</h3>

		<h4>Only if necessary</h4>

		<p>
		Lorem ipsum dolor sit amet.
		</p>
	</main>

	<?php $_template = new Smarty_Internal_Template('page-footer.tpl', $_smarty_tpl->smarty, $_smarty_tpl, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null);
 echo $_template->getRenderedTemplate(); $_template->rendered_content = null;?><?php unset($_template);?>
</body>

</html>