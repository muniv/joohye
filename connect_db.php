<?php
	$host = "localhost";
	$user = "root";
	$passwd = "111111";

	$connect = mysql_connect($localhost,$user,$passwd) or die ("mysql server Connection Error");
	mysql_select_db('hisedu',$connect) or die("DB Connection Error");
	 mysql_query(" set names euckr ");
?>