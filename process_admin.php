<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
if ($_POST['down']=='down')
	$down=1;
else
	$down=0;

if ($_POST['send_notice']=='send')
	$send_notice=1;
else
	$send_notice=0;

if ($_POST['send_update']=='send')
	$send_update=1;
else
	$send_update=0;


switch($_GET['mode']){
    case 'modify':
        mysql_query('UPDATE download SET down = "'.$down.'" ');
        echo $_POST['message_notice'];
   		mysql_query("INSERT INTO notice (message,alarm) VALUES ('".mysql_real_escape_string($_POST['message_notice'])."', '".mysql_real_escape_string($send_notice)."')");
    	mysql_query("INSERT INTO versionup (message,alarm,version) VALUES ('".mysql_real_escape_string($_POST['message_update'])."', '".mysql_real_escape_string($send_update)."', '".mysql_real_escape_string($_POST['version'])."')");
        mysql_query('DELETE FROM notice WHERE id = '.mysql_real_escape_string($_POST['id_notice']));
        mysql_query('DELETE FROM versionup WHERE id = '.mysql_real_escape_string($_POST['id_update']));

        header("Location: list_admin.php");
        break;

}
?>
