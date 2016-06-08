<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
$result = mysql_query('SELECT * FROM gallery WHERE id = '.mysql_real_escape_string($_GET['id']));
$video = mysql_fetch_array($result);
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
        <form action="./process_gallery.php?mode=modify_gallery" method="POST">
            <input type="hidden" name="id" value="<?=$video['id']?>" />
            <p>Korean title : <input type="text" name="title" value="<?=htmlspecialchars($video['title'])?>"></p>
            <p>English title : <input type="text" name="title_en" value="<?=htmlspecialchars($video['title_en'])?>"></p>
            <p>Tagalog title : <input type="text" name="title_ta" value="<?=htmlspecialchars($video['title_ta'])?>"></p>
            <p>url : <input type="text" name="url" value="<?=htmlspecialchars($video['url'])?>"></p>
            <p>download url : <input type="text" name="downurl" value="<?=htmlspecialchars($video['downurl'])?>"></p>
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


