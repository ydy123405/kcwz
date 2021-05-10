<?php
//include_once 'php/db_mysql/conn.php';
/*
global $db_conn;
$db_conn = new opmysql();
$sql = "SELECT `content` FROM `article` WHERE (`column` = '课程简介' AND `plat` = '首页');";
$rst = $db_conn->getRowsRst($sql);
$rst = implode("", $rst);
echo $rst;
*/
//根据栏目名称在数据库中获取首页相关数据
function get_Content_in_Index_by_Column($column) {
    $sql = "SELECT `content` FROM `article` WHERE (`column` = '".$column."' AND `plat` = '首页');";
    $rst = $GLOBALS['db_conn']->getRowsRst($sql);
    $rst = implode("", $rst);
    return $rst;
}

//获取问题与答疑中的问题与答案内容
function get_Qa() {
    $sql = "SELECT `title`, `content` FROM `article` WHERE (`plat` = '问题与答疑');";
    $rst = $GLOBALS['db_conn']->getRowsArray($sql);
    //$rst = implode("", $rst);
    return $rst;
}