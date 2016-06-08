<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
$result = mysql_query('SELECT * FROM videolist2 WHERE id = '.mysql_real_escape_string($_GET['id']));
$videolist = mysql_fetch_array($result);
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
        <form action="./process2.php?mode=modify_folder" method="POST">
            <input type="hidden" name="id" value="<?=$videolist['id']?>" />
            <p>Korean folder : <input type="text" name="korean_folder" value="<?=htmlspecialchars($videolist['folder'])?>"></p>
            <p>English folder : <input type="text" name="english_folder" value="<?=htmlspecialchars($videolist['folder_en'])?>"></p>
            <p>Tagalog folder : <input type="text" name="tagalog_folder" value="<?=htmlspecialchars($videolist['folder_ta'])?>"></p>
            <p><input type="submit" /></p>
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

