<?php
/* Smarty version 3.1.30, created on 2018-02-12 03:34:11
  from "D:\xampp7\htdocs\book-library-ci\application\modules\admin\views\templates\header.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a80fd23d88317_36077834',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '50b3d2126a42e0f43144e532e2da8a523dbe998b' => 
    array (
      0 => 'D:\\xampp7\\htdocs\\book-library-ci\\application\\modules\\admin\\views\\templates\\header.tpl',
      1 => 1518400811,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a80fd23d88317_36077834 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<!doctype html>
<html lang="en">
  <head>
	<title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
 - <?php echo $_smarty_tpl->tpl_vars['name']->value;?>
</title> 

	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<style>
		.container, .title{
			margin-top:20px;
		}
		.title, footer{
			text-align: center;
			margin-bottom: 20px;
		}
	</style>
</head> 
<body>
<div class="container">
<?php if ($_smarty_tpl->tpl_vars['error']->value != '') {?>
    <div class="alert alert-danger" role="alert">
        <?php echo $_smarty_tpl->tpl_vars['error']->value;?>

    </div>
<?php }?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Menu</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?php echo base_url();?>
admin/">Dashboard</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="<?php echo base_url();?>
admin/racks">Racks</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="<?php echo base_url();?>
admin/books">Books</a>
      </li>
      <li class="nav-item">
        <a class="nav-item nav-link" href="<?php echo base_url();?>
admin/logout">Logout</a>
      </li>
    </ul>
  </div>
</nav><?php }
}
