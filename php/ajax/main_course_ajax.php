<?php
include '../db_mysql/conn.php';
include_once '../normal.php';
header('Content-Type:text/html; charset=utf8');
$plat="首页";
$column = "课程简介";
//echo $plat;
//echo $column;
if (@$_GET['column']) $column =$_GET['column'];
if (@$_GET['plat']) $plat =$_GET['plat'];
//获取首页的课程简介
function get_Content_in_Index_by_Column($plat,$column,$conn) {
    $sql = "SELECT `content` FROM `article` WHERE (`column` = '".$column."' AND `plat` = '".$plat."');";
    $rst = $conn->getRowsRst($sql);
    $rst = @implode("", $rst);
    $rst = change_Content_to_Html_in_Part($rst);
    //echo $sql;
    return $rst;
}
//get_Content_in_Index_by_Column($plat,$column,$db_conn);
//if (in_array($column,['课程简介','课程负责人'])) {
if ($column=='课程简介'||$column=='教学方法'||$column=="课程安排"||$column=="课程大纲"||$column=="课程理念与目标") {
    //echo 1;
    echo get_Content_in_Index_by_Column($plat,$column,$db_conn);
}




