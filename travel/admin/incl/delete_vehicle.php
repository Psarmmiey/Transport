<?php
/**
 * Created by PhpStorm.
 * User: OLADIPUPO
 * Date: 24 Sep 2018
 * Time: 03:32
 */
include('connect.php');
if($_GET['id'])
{
    $id=$_GET['id'];
    $sql = "delete from vehicle where ID='$id'";
   // mysqli_query($dbcon, "delete from customer where id='$id'");
    mysqli_query($dbcon, $sql);
}
