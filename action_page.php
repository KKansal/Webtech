<?php
  extract($_POST);
  $db =mysqli_connect("localhost:3306","root","","kwyb");
  //echo "$eventname";
  $stmt="INSERT INTO `events` (`EventName`, `EventType`, `EventDate`, `Branch`, `club`, `filename`) VALUES ('$eventname', '$etype', '$edate', '$branch', '$club', '$eventimg');";
  $res=mysqli_query($db,$stmt);
  if(!$res)
  {
	  echo "<script>alert('Scheduling unsuccessful'); window.location.href='home.html'</script>";
  }
  else
  {
	echo "<script>alert('Successfully Scheduled'); window.location.href='home.html'</script>";
  }
?>