<?php
/* Smarty version 3.1.34-dev-7, created on 2020-11-28 19:36:52
  from 'F:\Programy i Uczelnia\XAMPP\htdocs\php_01_credit\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5fc298c4ab5af9_19166983',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd3e767f6309151b3ead45786b89e881a54817c4' => 
    array (
      0 => 'F:\\Programy i Uczelnia\\XAMPP\\htdocs\\php_01_credit\\app\\calc.html',
      1 => 1606588611,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5fc298c4ab5af9_19166983 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12993309855fc298c4aaa993_56437980', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'content'} */
class Block_12993309855fc298c4aaa993_56437980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12993309855fc298c4aaa993_56437980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h2 class="content-head is-center">Kalkulator kredytowy</h2>
        <div class="pure-g">
            <div class="l-box-lrg pure-u-1 pure-u-med-2-5">
<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc_credit.php" method="post">
	<legend>Kalkulator</legend>
	<fieldset>
	<label for="id_x">Kwota kredytu: </label>
	<input id="id_x" type="number" min="0" name="x" value="<?php echo '<?php ';?>
if(isset($x)) print($x); <?php echo '?>';?>
"  placeholder="10000" />
	<label for="id_y">Na ile lat: </label>
	<input id="id_y" type="number" min="0" name="y" value="<?php echo '<?php ';?>
if(isset($y)) print($y); <?php echo '?>';?>
"  placeholder='5' />
	<label for="id_z">Oprocentowanie: </label>
    <input id="id_z" type="number" min="0" step="0.01" name="z" value="<?php echo '<?php ';?>
if(isset($percent)) print($percent); <?php echo '?>';?>
"  placeholder='3.3' />
	</fieldset>
	<input type="submit" value="Oblicz" class="pure-button" />
</form>
            </div>

            <div class="l-box-lrg pure-u-1 pure-u-med-3-5">

                                        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
                    <?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?>
                    <h4>Wystąpiły błędy: </h4>
                    <ol class="err" >
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg', false, 'key');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
                        <li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </ol>
                    <?php }?>
                    <?php }?>



                <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
                <h4>Wynik</h4>
                <p class="res">
                    Miesięczna rata będzie wynosić: <?php echo $_smarty_tpl->tpl_vars['result']->value;?>
 zł
                </p>
                <?php }?>

        </div>
            </div>

<?php
}
}
/* {/block 'content'} */
}
