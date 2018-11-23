<?php
  extract($_POST);
  define('DB_SERVER', 'localhost:3306');
  define('DB_USERNAME', 'root');
  define('DB_PASSWORD', '');
  define('DB_DATABASE', 'kwyb');
  $db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
  $sqlw="insert into feedback values('$name','$srn','$year','$branch','$club')";
  $retval=mysqli_query($db,$sqlw);
  echo "<script> alert('Thanks for your Feedback!'); window.location.href='home.html'</script>";
?>
