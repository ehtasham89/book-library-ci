<?php
/* Smarty version 3.1.30, created on 2018-02-11 20:43:44
  from "D:\xampp7\htdocs\book-library-ci\application\modules\client\views\templates\racks\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a809cf0493ba1_01717241',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9882e3862be45eb16115aff14f152eef2eb41b5f' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\client\\views\\templates\\racks\\list.tpl',
      1 => 1518378201,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a809cf0493ba1_01717241 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<h2 class="title"> list racks in clients </h2>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
