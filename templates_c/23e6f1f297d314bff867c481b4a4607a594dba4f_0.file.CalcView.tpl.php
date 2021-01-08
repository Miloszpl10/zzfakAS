<?php
/* Smarty version 3.1.30, created on 2021-01-08 17:21:42
  from "F:\Programy i Uczelnia\XAMPP\htdocs\php_01_credit\app\views\CalcView.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5ff88696a58ac0_44608129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23e6f1f297d314bff867c481b4a4607a594dba4f' => 
    array (
      0 => 'F:\\Programy i Uczelnia\\XAMPP\\htdocs\\php_01_credit\\app\\views\\CalcView.tpl',
      1 => 1610122901,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.tpl' => 1,
    'file:messages.tpl' => 1,
  ),
),false)) {
function content_5ff88696a58ac0_44608129 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18621991145ff88696a314b8_80694627', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15240825365ff88696a572d8_21975654', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_18621991145ff88696a314b8_80694627 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_15240825365ff88696a572d8_21975654 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<div class="pure-menu pure-menu-horizontal bottom-margin">
	<a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout"  class="pure-menu-heading pure-menu-link">wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->tpl_vars['user']->value->login;?>
, rola: <?php echo $_smarty_tpl->tpl_vars['user']->value->role;?>
</span>
</div>

<h2 class="content-head is-center">Kalkulator kredytowy</h2>

<div class="pure-g">
<div class="l-box-lrg pure-u-1 pure-u-med-2-5">
	<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
		<fieldset>

        <div class="pure-control-group">
			<label for="x">Kwota kredytu:</label>
			<input id="x" type="text" placeholder="10000" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
		</div>

        <div class="pure-control-group">
			<label for="y">Na ile lat:</label>
			<input id="y" type="text" placeholder="5" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
		</div>

        <div class="pure-control-group">
			<label for="percent">Oprocentowanie:</label>
			<input id="percent" type="text" placeholder="3.3" name="percent" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->percent;?>
">
		</div>

		<div class="pure-controls">
			<button type="submit" class="pure-button">Oblicz</button>
		</div>

		</fieldset>
	</form>
</div>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:messages.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
<div class="messages inf">
	Wynik: <?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

</div>
<?php }?>




<?php
}
}
/* {/block 'content'} */
}
