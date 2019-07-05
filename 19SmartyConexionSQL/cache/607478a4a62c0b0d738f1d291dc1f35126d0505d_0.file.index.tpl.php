<?php
/* Smarty version 3.1.30, created on 2017-09-29 21:03:22
  from "C:\xampp\htdocs\Programas[xampp]\PHP\19_Smarty-ConexionSQL\estilos\templates\public\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_59ce98fac24972_98146218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607478a4a62c0b0d738f1d291dc1f35126d0505d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Programas[xampp]\\PHP\\19_Smarty-ConexionSQL\\estilos\\templates\\public\\index.tpl',
      1 => 1506705593,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_59ce98fac24972_98146218 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
	<title>Proyecto</title>
</head>
<body>
<h1>Esto es index.tpl</h1>
	<?php
$_smarty_tpl->tpl_vars['x'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);$_smarty_tpl->tpl_vars['x']->step = 1;$_smarty_tpl->tpl_vars['x']->total = (int) ceil(($_smarty_tpl->tpl_vars['x']->step > 0 ? 19+1 - (0) : 0-(19)+1)/abs($_smarty_tpl->tpl_vars['x']->step));
if ($_smarty_tpl->tpl_vars['x']->total > 0) {
for ($_smarty_tpl->tpl_vars['x']->value = 0, $_smarty_tpl->tpl_vars['x']->iteration = 1;$_smarty_tpl->tpl_vars['x']->iteration <= $_smarty_tpl->tpl_vars['x']->total;$_smarty_tpl->tpl_vars['x']->value += $_smarty_tpl->tpl_vars['x']->step, $_smarty_tpl->tpl_vars['x']->iteration++) {
$_smarty_tpl->tpl_vars['x']->first = $_smarty_tpl->tpl_vars['x']->iteration == 1;$_smarty_tpl->tpl_vars['x']->last = $_smarty_tpl->tpl_vars['x']->iteration == $_smarty_tpl->tpl_vars['x']->total;?>
		<?php echo $_smarty_tpl->tpl_vars['variable']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['variable2']->value;?>
<br />
	<?php }
}
?>

</body>
</html><?php }
}
