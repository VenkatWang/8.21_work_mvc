<?php
/* Smarty version 3.1.34-dev-7, created on 2020-08-21 16:08:53
  from 'D:\software\wampserver\www\server\mvc-test\application\template\admin\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f3ff195a5bc12_83097609',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f710702918f458b07ba08f4cb321cbb8f15f9f7' => 
    array (
      0 => 'D:\\software\\wampserver\\www\\server\\mvc-test\\application\\template\\admin\\login.html',
      1 => 1598026130,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3ff195a5bc12_83097609 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>后台首页</title>
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/bootstrap.css">
    <link rel="stylesheet" href="<?php echo CSS_ADD;?>
admin/login.css">
    <?php echo '<script'; ?>
 src="<?php echo JS_ADD;?>
admin.js"><?php echo '</script'; ?>
>
</head>
<body>
<form class="form-horizontal" action="admin/index/login" method="post">
    <h1>欢迎来到后台管理系统</h1>
    <div class="form-group">
        <lable for="inputEmail3" class="col-sm-2 control-label">用户名</lable>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="inputEmail3" placeholder="用户名" name="user">
        </div>
    </div>
    <div class="form-group">
        <lable for="inputEmail3" class="col-sm-2 control-label">密码</lable>
        <div class="col-sm-10">
             <input type="text" class="form-control" id="inputEmail3" placeholder="密码" name="pass">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <div class="checkbox">
                <label for="">
                    <input type="checkbox">记住密码
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10" >
            <button type="submit" class="btn btn-default">登录
            </button>
        </div>
    </div>
</form>
</body>
</html><?php }
}
