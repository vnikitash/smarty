<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-08 21:17:57
  from '/laravel/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f7f57d5cc13b8_84584287',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '69ea7a5cd70c3e1b1718e3df20c0f2283c06141e' => 
    array (
      0 => '/laravel/templates/index.tpl',
      1 => 1602181072,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f7f57d5cc13b8_84584287 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_788964065f7f57d597d893_95246937', "body");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "body"} */
class Block_788964065f7f57d597d893_95246937 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'body' => 
  array (
    0 => 'Block_788964065f7f57d597d893_95246937',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="row">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked nav-pills-stacked-example">
                <li role="presentation" class="active"><a href="/">All</a></li>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['categories']->value, 'category');
$_smarty_tpl->tpl_vars['category']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->do_else = false;
?>
                    <li role="presentation"><a href="/?categoryId=<?php echo $_smarty_tpl->tpl_vars['category']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['category']->value['name'];?>
</a></li>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php if ($_smarty_tpl->tpl_vars['product']->value['image']) {
echo $_smarty_tpl->tpl_vars['product']->value['image'];
} else { ?>1.png<?php }?>" width="100">
                            <div class="caption">
                                <h3><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</h3>
                                <p>Category: <b><?php echo $_smarty_tpl->tpl_vars['product']->value['category_name'];?>
</b></p>
                                <p><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
 $</p>
                                <p>
                                    <form action="/?action=addToCart" method="POST">
                                        <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['id'];?>
">
                                    <input type="submit" class="btn btn-success" role="button" value="Add to cart!">
                                    </form>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </div>
            <div class="row" style="text-align: center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php if (((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)) != 1) {?>
                        <li class="page-item"><a class="page-link" href="?per_page=<?php echo (($tmp = @$_GET['per_page'])===null||$tmp==='' ? 9 : $tmp);?>
&page=<?php echo ((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)-1);?>
">Previous</a></li>
                        <?php }?>
                        <?php
$_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(null, $_smarty_tpl->isRenderingCache);
$_smarty_tpl->tpl_vars['i']->value = 1;
if ($_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['pages']->value) {
for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value <= $_smarty_tpl->tpl_vars['pages']->value; $_smarty_tpl->tpl_vars['i']->value++) {
?>
                            <li class="page-item <?php if (((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)) == $_smarty_tpl->tpl_vars['i']->value) {?>active<?php }?>" ><a class="page-link" href="?per_page=<?php echo (($tmp = @$_GET['per_page'])===null||$tmp==='' ? 9 : $tmp);?>
&page=<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
                        <?php }
}
?>
                        <?php if (((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)) != $_smarty_tpl->tpl_vars['pages']->value) {?>
                            <li class="page-item"><a class="page-link" href="?per_page=<?php echo (($tmp = @$_GET['per_page'])===null||$tmp==='' ? 9 : $tmp);?>
&page=<?php echo ((($tmp = @$_GET['page'])===null||$tmp==='' ? 1 : $tmp)+1);?>
">Next</a></li>
                        <?php }?>

                    </ul>
                </nav>
            </div>
    </div>
<?php
}
}
/* {/block "body"} */
}
