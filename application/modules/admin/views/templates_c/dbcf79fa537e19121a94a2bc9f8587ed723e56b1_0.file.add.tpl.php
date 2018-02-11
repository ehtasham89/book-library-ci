<?php
/* Smarty version 3.1.30, created on 2018-02-11 23:35:14
  from "D:\xampp7\htdocs\book-library-ci\application\modules\admin\views\templates\racks\add.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80c522bfbb29_32985622',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dbcf79fa537e19121a94a2bc9f8587ed723e56b1' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\admin\\views\\templates\\racks\\add.tpl',
      1 => 1518388511,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a80c522bfbb29_32985622 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ci_language')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_language.php';
if (!is_callable('smarty_function_ci_form_validation')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_form_validation.php';
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 class="title"> -: Add New Rack :- </h2>

<div class="col-sm-6 offset-sm-3">
    <form action="" method="post">
    <div class="form-group">
            <label for="name"><?php echo smarty_function_ci_language(array('line'=>"Name"),$_smarty_tpl);?>
</label>
            <input type="text" class="form-control" name="name" id="name" value="<?php echo smarty_function_ci_form_validation(array('field'=>'name'),$_smarty_tpl);?>
" placeholder="Enter Rack Name">
            <?php echo smarty_function_ci_form_validation(array('field'=>'name','error'=>'true'),$_smarty_tpl);?>

        </div>
        
        <input type="submit" name="action" class="btn btn-primary" value="Save">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
