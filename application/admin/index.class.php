<?php
if(!defined("MVC")){
    die("非法入侵");
}

class index{
    function int(){
        $smarty=new Smarty();
        $smarty->setTemplateDir(TPL_PATH);
        $smarty->setCompileDir(COMPILE_PATH);
        $smarty->display("admin/login.html");
    }
    function login(){
       $user=$_POST["user"];//接收页面输入的信息
        $pass=$_POST["pass"];
        echo $user,$pass;
    }
}