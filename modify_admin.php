<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
$down_result = mysql_query('SELECT * FROM download');
$notice_result = mysql_query('SELECT * FROM notice');
$update_result = mysql_query('SELECT * FROM versionup');
$notice_row=mysql_fetch_array($notice_result);
$down_row=mysql_fetch_array($down_result);
$update_row=mysql_fetch_array($update_result);

	if($notice_row['alarm']==1)
		$noticecheck="checked";
	else
		$noticecheck="";

	if($down_row['down']==1)
		$downcheck="checked";
	else
		$downcheck="";

	if($update_row['alarm']==1)
		$updatecheck="checked";
	else
		$updatecheck="";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
    </head>
    <body background="image3.jpg">
      <table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0" align="center">
      <tr ><td width="100%" valign="middle" >
      <table border="0" width="100%" height="100%" cellspacing="0" cellpadding="0" align="center">
      <tr>
      <td width="100%" cellspacing="0" cellpadding="0" align="center">
	<table border="0" cellspacing="0" cellpadding="0" >
		<tr><td><IMG src="empty.png" width="100" height="100" ></td></tr>
		<tr><td>
        <form action="./process_admin.php?mode=modify" method="POST">
   	    <table border="0" cellspacing="0" cellpadding="0" >
   	    <input type="hidden" name="id_notice" value="<?=$notice_row['id']?>" />
		<input type="hidden" name="id_update" value="<?=$update_row['id']?>" />

    	<tr>
    	<td bgcolor="#b2ccff" align="right">allow download :</td><td colspan=3><input type="checkbox" name="down" value="down"  <?=$downcheck?>></td>
    	</tr><tr>
    	<td bgcolor="#b2ccff" align="right">notification :</td><td><input type="text" name="message_notice" value="<?=htmlspecialchars($notice_row['message'])?>" ></td><td bgcolor="#b2ccff" align="right"> send : </td><td><input type="checkbox" name="send_notice" value="send" <?=$noticecheck?>></td>
    	</tr><tr>
    	<td bgcolor="#b2ccff" align="right">update message :</td><td><input type="text" name="message_update" value="<?=htmlspecialchars($update_row['message'])?>"></td><td bgcolor="#b2ccff" align="right"> send : </td><td><input type="checkbox" name="send_update" value="send" <?=$updatecheck?>></td><td bgcolor="#b2ccff" align="right"> version : </td><td><input type="text" name="version" value="<?=htmlspecialchars($update_row['version'])?>"></td>
    	</tr><tr>
    	<td colspan=4 align="center"><input type="submit"/></td>
    	</tr>
    </table>
        </form>
		</td></tr>
      </table>
       </td>
      </tr>
      </table>
      </td></tr>
      </table>
    </body>
</html>




