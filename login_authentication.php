<?php
  extract($_POST);
  $db =mysqli_connect('localhost:3306','root','','kwyb');
  $stmt="SELECT * from userinfo WHERE username='$username';";
  $result=mysqli_query($db,$stmt);
  //print_r($result);
  if(!($result))
  {
    echo "ID not present Please Contact Administrator";
  }
  else
  {
    $arr=mysqli_fetch_assoc($result);
    if($arr['pass']!=$pass)
    {
      echo"<script>alert('Authentication Failed'); window.location.href='login.html';</script>";
    }
    else
    {
      echo"<script>alert('Login Successful'); window.location.href='home.html';</script>";
    }
  }
?>
