<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');
switch($_GET['mode']){
    case 'insert_forder':
        $result = mysql_query("INSERT INTO videolist (folder,folder_en,folder_ta) VALUES ('".mysql_real_escape_string($_POST['korean_folder'])."', '".mysql_real_escape_string($_POST['english_folder'])."', '".mysql_real_escape_string($_POST['tagalog_folder'])."')");
        header("Location: list.php");
        break;
    case 'insert_title1':
	    $result = mysql_query("INSERT INTO video1 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	    header("Location: list.php");
        break;
    case 'insert_title2':
	    $result = mysql_query("INSERT INTO video2 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	    header("Location: list.php");
        break;
    case 'insert_title3':
	    $result = mysql_query("INSERT INTO video3 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	    header("Location: list.php");
        break;
    case 'insert_title4':
	    $result = mysql_query("INSERT INTO video4 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	    header("Location: list.php");
        break;
    case 'insert_title5':
	    $result = mysql_query("INSERT INTO video5 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'insert_title6':
	    $result = mysql_query("INSERT INTO video6 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'insert_title7':
	    $result = mysql_query("INSERT INTO video7 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'insert_title8':
	    $result = mysql_query("INSERT INTO video8 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'insert_title9':
	    $result = mysql_query("INSERT INTO video9 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'insert_title10':
	    $result = mysql_query("INSERT INTO video10 (title,title_en,title_ta,url,downurl) VALUES ('".mysql_real_escape_string($_POST['korean_title'])."', '".mysql_real_escape_string($_POST['english_title'])."', '".mysql_real_escape_string($_POST['tagalog_title'])."', '".mysql_real_escape_string($_POST['url'])."', '".mysql_real_escape_string($_POST['downurl'])."')");
	   header("Location: list.php");
        break;
    case 'delete_forder':
        mysql_query('DELETE FROM videolist WHERE id = '.mysql_real_escape_string($_POST['id']));
        mysql_query('DELETE FROM video'.mysql_real_escape_string($_POST['cnt']));
		header("Location: list.php");
        break;
    case 'delete_video1':
	    mysql_query('DELETE FROM video1 WHERE id = '.mysql_real_escape_string($_POST['id']));
	    header("Location: list.php");
        break;
    case 'delete_video2':
		mysql_query('DELETE FROM video2 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video3':
		mysql_query('DELETE FROM video3 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video4':
		mysql_query('DELETE FROM video4 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video5':
		mysql_query('DELETE FROM video5 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video6':
		mysql_query('DELETE FROM video6 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video7':
		mysql_query('DELETE FROM video7 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video8':
		mysql_query('DELETE FROM video8 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video9':
		mysql_query('DELETE FROM video9 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'delete_video10':
		mysql_query('DELETE FROM video10 WHERE id = '.mysql_real_escape_string($_POST['id']));
		header("Location: list.php");
        break;
    case 'modify_folder':
        mysql_query('UPDATE videolist SET folder = "'.mysql_real_escape_string($_POST['korean_folder']).'", folder_en="'.mysql_real_escape_string($_POST['english_folder']).'", folder_ta="'.mysql_real_escape_string($_POST['tagalog_folder']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title1':
        mysql_query('UPDATE video1 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title2':
        mysql_query('UPDATE video2 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title3':
        mysql_query('UPDATE video3 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title4':
        mysql_query('UPDATE video4 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title5':
        mysql_query('UPDATE video5 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title6':
        mysql_query('UPDATE video6 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title7':
        mysql_query('UPDATE video7 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title8':
        mysql_query('UPDATE video8 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title9':
        mysql_query('UPDATE video9 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;
    case 'modify_title10':
        mysql_query('UPDATE video10 SET title = "'.mysql_real_escape_string($_POST['korean_title']).'", title_en = "'.mysql_real_escape_string($_POST['english_title']).'", title_ta= "'.mysql_real_escape_string($_POST['tagalog_title']).'", url = "'.mysql_real_escape_string($_POST['url']).'", downurl = "'.mysql_real_escape_string($_POST['downurl']).'" WHERE id = '.mysql_real_escape_string($_POST['id']));
        header("Location: list.php");
        break;


}
?>
