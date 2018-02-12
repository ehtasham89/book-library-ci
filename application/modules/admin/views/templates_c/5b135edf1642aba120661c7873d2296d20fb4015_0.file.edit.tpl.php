<?php
/* Smarty version 3.1.30, created on 2018-02-12 01:08:28
  from "D:\xampp7\htdocs\book-library-ci\application\modules\admin\views\templates\books\edit.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80dafc253f02_59747218',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5b135edf1642aba120661c7873d2296d20fb4015' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\admin\\views\\templates\\books\\edit.tpl',
      1 => 1518393897,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a80dafc253f02_59747218 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_callable('smarty_function_ci_language')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_language.php';
if (!is_callable('smarty_function_ci_form_validation')) require_once 'D:\\xampp7\\htdocs\\book-library-ci\\application\\third_party\\smarty\\libs\\plugins\\function.ci_form_validation.php';
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 class="title"> -: Edit Book :- </h2>

<div class="col-sm-6 offset-sm-3">
    <form action="" method="post">
        <div class="form-group">
            <label for="title"><?php echo smarty_function_ci_language(array('line'=>"Title"),$_smarty_tpl);?>
</label>
            <input type="text" class="form-control" name="title" id="title" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['title'];?>
" placeholder="Enter Book Title">
            <?php echo smarty_function_ci_form_validation(array('field'=>'title','error'=>'true'),$_smarty_tpl);?>

        </div>
        <div class="form-group">
            <label for="author"><?php echo smarty_function_ci_language(array('line'=>"Author"),$_smarty_tpl);?>
</label>
            <input type="text" class="form-control" name="author" id="author" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['author'];?>
" placeholder="Enter Author Name">
            <?php echo smarty_function_ci_form_validation(array('field'=>'author','error'=>'true'),$_smarty_tpl);?>

        </div>
        <div class="form-group">
            <label for="published_year"><?php echo smarty_function_ci_language(array('line'=>"Published Year"),$_smarty_tpl);?>
</label>
            <input type="text" class="form-control" name="published_year" id="published_year" value="<?php echo $_smarty_tpl->tpl_vars['book']->value['published_year'];?>
" placeholder="Enter Published Year">
            <?php echo smarty_function_ci_form_validation(array('field'=>'published_year','error'=>'true'),$_smarty_tpl);?>

        </div>
        <div class="form-group">
            <label for="rack_id"><?php echo smarty_function_ci_language(array('line'=>"Rack"),$_smarty_tpl);?>
</label>
            <select name="rack_id" class="form-control">
                <option value="">Select</option>
                <?php
$__section_index_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index'] : false;
$__section_index_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['racks']->value) ? count($_loop) : max(0, (int) $_loop));
$__section_index_0_total = $__section_index_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_index'] = new Smarty_Variable(array());
if ($__section_index_0_total != 0) {
for ($__section_index_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] = 0; $__section_index_0_iteration <= $__section_index_0_total; $__section_index_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']++){
?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['racks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['book']->value['rack_id'] == $_smarty_tpl->tpl_vars['racks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['id']) {?> selected <?php }?>><?php echo $_smarty_tpl->tpl_vars['racks']->value[(isset($_smarty_tpl->tpl_vars['__smarty_section_index']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_index']->value['index'] : null)]['name'];?>
</option>
                <?php }} else {
 ?>
                    <option value="">No data found</option>
                <?php
}
if ($__section_index_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_index'] = $__section_index_0_saved;
}
?>
            </select>
            <?php echo smarty_function_ci_form_validation(array('field'=>'rack_id','error'=>'true'),$_smarty_tpl);?>

            
        </div>
        
        <input type="submit" name="action" class="btn btn-primary" value="Update">
    </form>
</div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
