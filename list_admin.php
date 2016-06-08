<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');

$down_result = mysql_query('SELECT * FROM download');
$notice_result = mysql_query('SELECT * FROM notice');
$update_result = mysql_query('SELECT * FROM versionup');
$notice_row=mysql_fetch_array($notice_result);
$down_row=mysql_fetch_array($down_result);
$update_row=mysql_fetch_array($update_result);

if($down_row['down']==1)
	$down="allow.";
else
    $down="not allow.";

if($notice_row['alarm']==1)
	$send_notice="send";
else
	$send_notice="no";

if($update_row['alarm']==1)
	$send_update="send";
else
	$send_update="no";

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <style type="text/css">
            body {
                font-size: 0.8em;
                font-family: dotum;
                line-height: 1.6em;
            }
            header {
                border-bottom: 1px solid #ccc;
                padding: 20px 0;
            }
            nav {
                float: left;
                margin-right: 20px;
                min-height: 1000px;
                min-width:150px;
                border-right: 1px solid #ccc;
            }
            nav ul {
                list-style: none;
                padding-left: 0;
                padding-right: 20px;
            }
            article {
                float: left;
            }
            .description{
                width:500px;
            }
        </style>
    </head>

    <body background="image3.jpg">
    <div>
            <nav>
            <ul>
            	<li><a href="list.php"><IMG src="bt_lecture1.png" width="150" height="150" ></a></li>
            	<li><a href="list2.php"><IMG src="bt_lecture2.png" width="150" height="150" ></a></li>
            	<li><a href="list_lesson.php"><IMG src="bt_sermon2.png" width="150" height="150" ></a></li>
            	<li><a href="list_song.php"><IMG src="bt_song.png" width="150" height="150" ></a></li>
            	<li><a href="list_worship.php"><IMG src="bt_worship.png" width="150" height="150" ></a></li>
				<li><a href="list_gallery.php"><IMG src="bt_gallery.png" width="150" height="150" ></a></li>
				<li><a href="list_admin.php"><IMG src="admin.png" width="150" height="150" ></a></li>
            </ul>

            </nav>
            <article>
    <table border=0>
    <tr><td><IMG src="empty.png" width="100" height="100" ></td></tr>
    	<tr>
    	<td bgcolor="#b2ccff" align="right">allow download :</td><td colspan=3><?=htmlspecialchars($down)?></td>
    	</tr><tr>
    	<td bgcolor="#b2ccff" align="right">notification :</td><td><?=htmlspecialchars($notice_row['message'])?></td><td bgcolor="#b2ccff" align="right"> send : </td><td><?=htmlspecialchars($send_notice)?></td>
    	</tr><tr>
    	<td bgcolor="#b2ccff" align="right">update :</td><td><?=htmlspecialchars($update_row['message'])?></td><td bgcolor="#b2ccff" align="right"> send : </td><td><?=htmlspecialchars($send_update)?></td><td bgcolor="#b2ccff" align="right"> version : </td><td><?=htmlspecialchars($update_row['version'])?></td>
    	</tr><tr>
    	<td colspan=4 align="center"><a href="modify_admin.php"><img src="modify.png"></a></td>
    	</tr>
    </table>
           </article>
    </div>
    </body>
</html>
