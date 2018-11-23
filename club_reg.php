<?php
//	echo "$_SESSION['UNAME']";
	if(!isset($_SESSION['UNAME']))
		echo "PLEASE LOGIN FIRST";
	else
	{
		extract($_REQUEST);
		define('DB_SERVER', 'localhost:3306');
		define('DB_USERNAME', 'root');
		define('DB_PASSWORD', '');
		define('DB_DATABASE', 'kwyb');
		$db=mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
		$flag=TRUE;
		$sqlw="insert into clubs values('$name','$srn','$year','$branch','$club')";
		$sqlr="Select name, srn, year, branch, club FROM clubs";
		if(isset($db))
		{
			echo "connected";
			mysqli_select_db($db,'kwyb');
			$retval=mysqli_query($db,$sqlr);
			while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
			{
				if($row['name']==$name)
				{
					if($row['club']==$club)
					{
						echo "You have already been registered to this Club.";
						$flag=False;
						break;
					}
				}
			}
			if($flag)
			{
				$retval=mysqli_query($db,$sqlw);
				echo $sqlw;
				echo "Registration successful\n";
			}
			/*
			$sql="Select id, name FROM database1";
			mysqli_select_db($db,'database1');
			$retval=mysqli_query($db, $sql);
			if(!$retval)
			{
				die("Could not get data: ".mysqli_error());
			}
			while($row = mysqli_fetch_array($retval,MYSQLI_ASSOC))
			{
				echo "EMP ID :{$row['id']}<br>"."EMP NAME:{$row['name']}<br>";
			}*/
		}
	}
?>