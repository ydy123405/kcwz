<?php
if (!session_id()) session_start();
include_once 'php/db_mysql/conn.php';
include_once 'php/ajax/main_index_course.php';
include_once 'php/normal.php';
header('Content-Type:text/html; charset=utf8');

$_SESSION['main_nav'] = array();
$plat = "index";
if (@!$_SESSION['c']) {$_SESSION['c'] = "r";}
$action = "";
//print_r($_GET);
if (@$_GET['p']) {  //p:平台
    @$plat = $_GET['p'];
    if (@$_GET['a']) {  //a:p平台中的动作
        @$action = $_GET['a'];
    }
}
if (@$_GET['c']) {
    $_SESSION['c'] = @$_GET['c'];
}
//print_r($_GET);
//print_r($_SESSION['c']);
set_Theme_by_c($_SESSION['c']);
require 'view/head.php';
require 'view/top.php';
set_Nav_session($plat);
require 'view/main_nav.php';
display_Content($plat);
require 'view/footer.php';