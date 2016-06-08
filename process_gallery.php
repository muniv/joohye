<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
switch($_GET['mode']){
    case 'insert_gallery':
	    mysql_query("INSERT INTO gallery (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['title'])."', '".mysql_real_escape_string($_POST['title_en'])."', '".mysql_real_escape_string($_POST['title_ta'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	    header("Location: list_gallery.php");
        break;

    case 'delete_gallery':
	    mysql_query('DELETE FROM gallery WHERE id = '.mysql_real_escape_string($_POST['id']));
	    header("Location: list_gallery.php");
        break;

    case 'modify_gallery':
        mysql_query('UPDATE gallery SET title = "'.mysql_real_escape_string($_POST['title']).'", title_en = "'.mysql_real_escape_string($_POST['title_en']).'", title_ta= "'.mysql_real_escape_string($_POST['title_ta']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
         header("Location: list_gallery.php");
        break;



}
?>
