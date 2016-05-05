<?php
	$conn = mysql_connect('localhost','root','');
	$db = mysql_select_db('stu',$conn);
	if(!$db)
		{
			echo "Not Connected";
		}

?>