<?php
/*
Template Name: login
*/
session_start();
if ($_SESSION['s_username']){
      header("Location:index.php");
      exit(0);
}

if (isset($_POST['username']) and isset($_POST['password'])) {
      $username = addslashes(trim($_POST['username']));
      $password = md5($_POST['password']);
}else{
      exit(0);
}

$conn=mysql_connect('localhost','root','root');
mysql_query('set names utf8');
$re=mysql_select_db('user',$conn);
$sql="select * from users where username = '$username' or email = '$username' and password = '$password' ";
$result=mysql_query($sql);
$rows=mysql_fetch_assoc($result);

if ($rows){
      $_SESSION['s_username'] = $username;
      header("Location:index.php");
      //unset($_SESSION['s_username']); 
}else{
      echo"<script>alert('对不起，您输入的用户名或密码错误');history.go(-1);</script>";
      exit(0);
}


?>