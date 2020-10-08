<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 19:59:33
  from '/laravel/templates/orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f45756c8a62_53044192',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6df101df61231724ca5410bb9e41b76182c3eba2' => 
    array (
      0 => '/laravel/templates/orders.tpl',
      1 => 1602168880,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f45756c8a62_53044192 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14464238925f7f45756291b6_47300772', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_14464238925f7f45756291b6_47300772 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_14464238925f7f45756291b6_47300772',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <table class="table">
        <thead>
            <tr>
                <th rowspan="2">Order ID</th>
                <th colspan="4" style="text-align: center">Products</th>
            </tr>
            <tr>
                <th>NAME</th>
                <th>IMAGE</th>
                <th>PRICE</th>
                <th>COUNT</th>
            </tr>
        </thead>
        <tbody>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['orders']->value, 'order');
$_smarty_tpl->tpl_vars['order']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['order']->value) {
$_smarty_tpl->tpl_vars['order']->do_else = false;
?>
            <tr>
                <td rowspan="<?php echo count($_smarty_tpl->tpl_vars['order']->value['products']);?>
"><?php echo $_smarty_tpl->tpl_vars['order']->value['id'];?>
</td>


                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['order']->value['products'], 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</td>
                    <td>Image</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['product']->value['count'];?>
</td>
                    </tr>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </tbody>
    </table>
<?php
}
}
/* {/block "body"} */
}
