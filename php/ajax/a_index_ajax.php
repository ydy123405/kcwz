<?php
include '../db_mysql/conn.php';
header('Content-Type:text/html; charset=utf8');
$column = "课程简介";
if (@$_GET['column']) $column =$_GET['column'];
//获取首页的课程简介
function get_Content_in_Index_by_Column($column,$conn) {
    $sql = "SELECT `content` FROM `article` WHERE (`column` = '".$column."' AND `plat` = '首页');";
    $rst = $conn->getRowsRst($sql);
    $rst = implode("", $rst);
    echo $rst;
}
//if (in_array($column,['课程简介','课程负责人'])) {
if ($column=='课程简介'||$column=='课程负责人') {
    get_Content_in_Index_by_Column($column,$db_conn);
}