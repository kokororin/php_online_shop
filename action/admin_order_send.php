<?php
session_start();
header("Content-type:text/html;charset=UTF-8");
include '../include/conn.php';
$order_id=$_GET['order_id'];
$sql="update order_list set o_status='2' where o_id='$order_id'";
        mysql_query($sql);
      
     if(mysql_error()){
        echo "<script>alert('发货失败!');history.go(-1);</script>";
     }
     else{
          echo "<script>alert('发货成功!');history.go(-1);</script>";
     }


?>