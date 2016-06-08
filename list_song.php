<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');

$list_result = mysql_query('SELECT * FROM song');
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

    <body id="body" background="image3.jpg">
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
            <table>
                <tr >
                	<th background="white.png">&nbsp;&nbsp;&nbsp;korean title&nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;english title&nbsp;&nbsp;&nbsp; </th><th background="white.png">&nbsp;&nbsp;&nbsp;tagalog title &nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;url&nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;download url&nbsp;&nbsp;&nbsp;</th><th background="white.png" colspan=2>&nbsp;</th>
                </tr>

                <?php

                while($row=mysql_fetch_array($list_result)){
                   	$len=strlen($row['downurl']);
                   		if(10<$len)
                   			$download=substr($row['downurl'],0,10)."...";
                   		else
                   			$download=$row['downurl'];

                   	$len2=strlen($row['url']);
                   		if(10<$len2)
                   			$show=substr($row['url'],0,10)."...";
                   		else
                   			$show=$row['url'];
					?>
					<tr><td><?=htmlspecialchars($row['title'])?></td>
						<td><?=htmlspecialchars($row['title_en'])?></td>
						<td><?=htmlspecialchars($row['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_song.php?id=<?=$row['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process_song.php?mode=delete_song">
                        <input type="hidden" name="id" value="<?=$row['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>





					<?php
                }
                ?>
                <tr><th><a href="input_song.php"><img src="insert.png"></a></th></tr>
                </table>


            </article>
        </div>
    </body>
</html>
