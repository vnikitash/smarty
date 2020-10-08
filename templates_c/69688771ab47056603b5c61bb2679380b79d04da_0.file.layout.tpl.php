<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 19:59:02
  from '/laravel/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f4556a76089_06981205',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69688771ab47056603b5c61bb2679380b79d04da' => 
    array (
      0 => '/laravel/templates/layout.tpl',
      1 => 1602176341,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f4556a76089_06981205 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<html>
<head>
    <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14414651705f7f4556874192_20778649', "title");
?>
</title>
    <?php echo '<script'; ?>
 src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"><?php echo '</script'; ?>
>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <?php echo '<script'; ?>
 src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"><?php echo '</script'; ?>
>
</head>

<body>

<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <?php if ((isset($_SESSION['user'])) && $_SESSION['user']['is_admin'] === 1) {?>
            <ul class="nav navbar-nav navbar-left">
                <li><a href="/?action=adminUsers">[A] Users</a></li>
                <li><a href="/?action=adminCategories">[A] Categories</a></li>
                <li><a href="/?action=adminProducts">[A] Products</a></li>
                <li><a href="/?action=adminOrders">[A] Orders</a></li>
            </ul>
            <?php }?>
            <ul class="nav navbar-nav navbar-right">

                    <?php if (!(isset($_SESSION['user']))) {?>
                    <li><a href="/?action=login">Login</a></li>
                    <li><a href="/?action=register">Register</a></li>
                    <?php }?>
                    <li><a href="/?action=cart">Cart (<?php echo $_smarty_tpl->tpl_vars['cartItemsCount']->value;?>
)</a></li>

                <?php if ((isset($_SESSION['user']))) {?>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php ob_start();
echo $_SESSION['user']['email'];
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="/?action=orders">Orders</a></li>
                        <li><a href="/?action=cart">Cart (<?php echo $_smarty_tpl->tpl_vars['cartItemsCount']->value;?>
)</a></li>
                        <li><a href="/?action=logout">Logout</a></li>
                    </ul>
                </li>
                <?php }?>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

    <div class="container">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18957762565f7f4556a74482_26732193', 'body');
?>

    </div>

</body>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12536403225f7f4556a75573_68288052', "script");
?>

</html><?php }
/* {block "title"} */
class Block_14414651705f7f4556874192_20778649 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'title' => 
  array (
    0 => 'Block_14414651705f7f4556874192_20778649',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "title"} */
/* {block 'body'} */
class Block_18957762565f7f4556a74482_26732193 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_18957762565f7f4556a74482_26732193',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'body'} */
/* {block "script"} */
class Block_12536403225f7f4556a75573_68288052 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'script' => 
  array (
    0 => 'Block_12536403225f7f4556a75573_68288052',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "script"} */
}
