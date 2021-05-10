<?php
//开启session
if (!session_id()) session_start();

//设置导航栏session，将所在plat设置为active（设置导航栏标签高亮）
function set_Nav_session($plat) {
    $_SESSION['main_nav']['index']="";
    $_SESSION['main_nav']['build']="";
    $_SESSION['main_nav']['introduce']="";
    $_SESSION['main_nav']['resources']="";
    $_SESSION['main_nav']['team']="";
    $_SESSION['main_nav']['q_and_a']="";
    $_SESSION['main_nav']['study']="";
    $_SESSION['main_nav'][$plat]="main_nav_pre_active";
}

//根据plat输出视图
function display_Content($plat) {
    if ($plat=="index"||$plat=="") {require 'view/index.php';}
    else if ($plat=="build") {require 'view/build.php';}
    else if ($plat=="introduce") {require 'view/introduce2.php';}
    else if ($plat=="resources") {require 'view/resources.php';}
    else if ($plat=="team") {require 'view/maintain.php';}
    else if ($plat=="q_and_a") {require 'view/qanda.php';}
    else if ($plat=="study") {require 'view/maintain.php';}
    else {require 'view/empty.php';}
}

//根据颜色c设置css主题
function set_Theme_by_c($c) {
    //print_r($_SESSION);
    //print_r($c);
    if ($c=="r") {$_SESSION['theme']="css/index_red.css";}
    if ($c=="g") {$_SESSION['theme']="css/index_green.css";}
    if ($c=="b") {$_SESSION['theme']="css/index_blue.css";}
}

//将问题与答疑的答案内容转化为即将输出的html格式
function change_Content_to_Html_in_Qa($content) {
    $temp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$content;
    $temp = str_replace("\n", "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $temp);
    return $temp;
}

//将部分平台中栏目文章（如：课程简介中的文章内容）转化为即将输出的html格式
function change_Content_to_Html_in_Part($content) {
    $temp = "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$content;
    $temp = str_replace("\n", "<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;", $temp);
    $temp = str_replace("<c>", '<span class="main-course-introduce-p-theme-font">', $temp);
    $temp = str_replace("</c>", '</span>', $temp);
    $temp = str_replace("<b>", '<span class="main-course-introduce-p-blod-font">', $temp);
    $temp = str_replace("</b>", '</span>', $temp);
    return $temp;
}


//为js提供当前颜色
if (@$_GET['data']=="getcolor") {
    if (!$_SESSION['c']) {
        //红色
        //print_r($_SESSION);
        //echo "1";
        echo "#CF0000";
    }
    else if ($_SESSION['c']=='r'){
        echo "#CF0000";
    }
    else if ($_SESSION['c']=='g'){
        echo "#36A285";
    }
    else if ($_SESSION['c']=='b'){
        echo "#0E4D9F";
    }
}