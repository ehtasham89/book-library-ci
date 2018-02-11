<?php
/* Smarty version 3.1.30, created on 2018-02-12 00:18:12
  from "D:\xampp7\htdocs\book-library-ci\application\modules\admin\views\templates\racks\list.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80cf34a82236_50666344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f41f9907e4d4357d21ba5be402ab22111a2194d5' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\admin\\views\\templates\\racks\\list.tpl',
      1 => 1518391015,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5a80cf34a82236_50666344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:../header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


<h2 class="title"> -: All Racks :- </h2>
<a href="<?php echo base_url();?>
admin/racks/add">Add New Rack</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <?php
$__section_rack_0_saved = isset($_smarty_tpl->tpl_vars['__smarty_section_rack']) ? $_smarty_tpl->tpl_vars['__smarty_section_rack'] : false;
$__section_rack_0_loop = (is_array(@$_loop=$_smarty_tpl->tpl_vars['data']->value['data']) ? count($_loop) : max(0, (int) $_loop));
$__section_rack_0_total = $__section_rack_0_loop;
$_smarty_tpl->tpl_vars['__smarty_section_rack'] = new Smarty_Variable(array());
if ($__section_rack_0_total != 0) {
for ($__section_rack_0_iteration = 1, $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index'] = 0; $__section_rack_0_iteration <= $__section_rack_0_total; $__section_rack_0_iteration++, $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index']++){
$_smarty_tpl->tpl_vars['__smarty_section_rack']->value['rownum'] = $__section_rack_0_iteration;
?>
        <tr>
            <th scope="row"><?php echo (isset($_smarty_tpl->tpl_vars['__smarty_section_rack']->value['rownum']) ? $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['rownum'] : null);?>
</th>
            <td><?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index'] : null)]['name'];?>
</td>
            <td>
                <a href="<?php echo base_url();?>
admin/racks/edit/<?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index'] : null)]['id'];?>
">Edit</a> | 
                <a href="<?php echo base_url();?>
admin/racks/delete/<?php echo $_smarty_tpl->tpl_vars['data']->value['data'][(isset($_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_section_rack']->value['index'] : null)]['id'];?>
">Delete</a></td>
        </tr>
    <?php }} else {
 ?>
        <tr>
            <td colspan='3'>No data found.</td>
        </tr>
    <?php
}
if ($__section_rack_0_saved) {
$_smarty_tpl->tpl_vars['__smarty_section_rack'] = $__section_rack_0_saved;
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
