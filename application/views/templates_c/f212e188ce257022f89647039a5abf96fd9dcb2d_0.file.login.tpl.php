<?php
/* Smarty version 3.1.30, created on 2018-02-10 00:59:02
  from "D:\xampp7\htdocs\book-library-ci\application\views\templates\login.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a7e35c6200867_16805974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f212e188ce257022f89647039a5abf96fd9dcb2d' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\views\\templates\\login.tpl',
      1 => 1518220730,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a7e35c6200867_16805974 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ci_language')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_language.php';
if (!is_callable('smarty_function_ci_form_validation')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_form_validation.php';
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<h2 class="title"> -: Library System :- </h2>

<form action="" method="post">
    <div class="form-group">
        <label for="email"><?php echo smarty_function_ci_language(array('line'=>"Email"),$_smarty_tpl);?>
</label>
        <input type="text" class="form-control" name="email" id="email" value="<?php echo smarty_function_ci_form_validation(array('field'=>'email'),$_smarty_tpl);?>
" aria-describedby="emailHelp" placeholder="Enter email">
        <?php echo smarty_function_ci_form_validation(array('field'=>'email','error'=>'true'),$_smarty_tpl);?>

    </div>

    <div class="form-group">
        <label for="password"><?php echo smarty_function_ci_language(array('line'=>"Password"),$_smarty_tpl);?>
</label>
        <input type="password" name="password" id="password" class="form-control" placeholder="Password">
        <?php echo smarty_function_ci_form_validation(array('field'=>'password','error'=>'true'),$_smarty_tpl);?>

    </div>
    
	<input type="submit" name="action" class="btn btn-primary" value="Submit">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
