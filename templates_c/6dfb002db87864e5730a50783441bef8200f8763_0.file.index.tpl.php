<?php
/* Smarty version 3.1.36, created on 2020-10-29 18:31:53
  from '/laravel/Views/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_5f9b0a99170732_12335350',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6dfb002db87864e5730a50783441bef8200f8763' => 
    array (
      0 => '/laravel/Views/index.tpl',
      1 => 1603996311,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9b0a99170732_12335350 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1582617885f9b0a990e0f13_68499505', 'body');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block 'body'} */
class Block_1582617885f9b0a990e0f13_68499505 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_1582617885f9b0a990e0f13_68499505',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    Time: <?php ob_start();
echo $_smarty_tpl->tpl_vars['time']->value;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
<br>

    <form action="/user/create" method="POST" class="form-group">
        <input class="form-control" type="email" name="email" placeholder="example@email.com">
        <input class="form-control" type="password" name="password" placeholder="Password">
        <input type="submit" class="btn btn-success" value="Create">
    </form>

    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Registered At</th>
            <th>Delete</th>
        </tr>
        </thead>
        <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
                <tr>
                    <td><a href="/user/info/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</a></td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['email'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value['created_at'];?>
</td>
                    <td><a href="/user/delete/<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
" class="btn btn-danger">Remove</a></td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </tbody>
    </table>
<?php
}
}
/* {/block 'body'} */
}
