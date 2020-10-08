<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 17:55:09
  from '/laravel/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f284d6ab0f5_04693945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8cafeea2805cc0caf4170bd1516647d3ae616077' => 
    array (
      0 => '/laravel/templates/login.tpl',
      1 => 1602168880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f284d6ab0f5_04693945 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12108102125f7f284d683ee4_51640352', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_12108102125f7f284d683ee4_51640352 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_12108102125f7f284d683ee4_51640352',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>



    <h3>Login</h3>

    <?php if ((isset($_GET['error']))) {?>
        <div class="alert alert-danger" role="alert"><?php ob_start();
echo $_GET['error'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
</div>
    <?php }?>

    <form action="/?action=login" method="POST" style="width: 400px">
        <div class="form-group">
            <label for="cat_name">Email address</label>
            <input type="email" class="form-control" id="cat_name" aria-describedby="emailHelp" placeholder="Enter email" name="email">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
        </div>
        <button type="submit" class="btn btn-success">Login</button>
    </form>

    <div>
        Do not have an account? <a href="/?action=register">Register now!</a>
    </div>


<?php
}
}
/* {/block "body"} */
}
