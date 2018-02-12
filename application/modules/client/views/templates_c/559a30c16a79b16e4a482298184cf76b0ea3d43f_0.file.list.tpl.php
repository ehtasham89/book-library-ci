<?php
/* Smarty version 3.1.30, created on 2018-02-12 02:38:47
  from "D:\xampp7\htdocs\book-library-ci\application\modules\client\views\templates\books\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80f02788d876_51081871',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '559a30c16a79b16e4a482298184cf76b0ea3d43f' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\client\\views\\templates\\books\\list.tpl',
      1 => 1518399284,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a80f02788d876_51081871 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 class="title"> -: All Books in Rack:- </h2>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Author</th>
      <th scope="col">Published Year</th>
      <th scope="col">Rack</th>
    </tr>
  </thead>
  <tbody>
    <?php
$__section_book_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_book']) ? $_smarty_tpl->tpl_vars['__smarty_section_book'] : false;
$__section_book_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value['data']) ? count($_loop) : max(0, (int) $_loop));
$__section_book_0_total = $__section_book_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_book'] = new Smarty_Variable(array());
if ($__section_book_0_total != 0) {
for ($__section_book_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index'] = 0; $__section_book_0_iteration <= $__section_book_0_total; $__section_book_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_book']->value['rownum'] = $__section_book_0_iteration;
?>
        <tr>
            <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_book']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_book']->value['rownum'] : null);?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index'] : null)]['title'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index'] : null)]['author'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index'] : null)]['published_year'];?>
</td>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_book']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_book']->value['index'] : null)]['rack_name'];?>
</td>
        </tr>
    <?php }} else {
 ?>
        <tr>
            <td colspan='3'>No data found.</td>
        </tr>
    <?php
}
if ($__section_book_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_book'] = $__section_book_0_saved;
}
?>
    
  </tbody>
</table>

<nav aria-label="Page navigation example">
    <?php echo paginateLinks($_smarty_tpl->tpl_vars['data']->value['current_page'],$_smarty_tpl->tpl_vars['data']->value['last_page'],$_smarty_tpl->tpl_vars['data']->value['per_page']);?>

</nav>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<?php }
}
