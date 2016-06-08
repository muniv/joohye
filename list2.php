<?php
mysql_connect('localhost', 'root', '111111');
mysql_select_db('hisedu');

$list_result = mysql_query('SELECT * FROM videolist2');
$video1_result = mysql_query('SELECT * FROM video2_1');
$video2_result = mysql_query('SELECT * FROM video2_2');
$video3_result = mysql_query('SELECT * FROM video2_3');
$video4_result = mysql_query('SELECT * FROM video2_4');
$video5_result = mysql_query('SELECT * FROM video2_5');
$video6_result = mysql_query('SELECT * FROM video2_6');
$video7_result = mysql_query('SELECT * FROM video2_7');
$video8_result = mysql_query('SELECT * FROM video2_8');
$video9_result = mysql_query('SELECT * FROM video2_9');
$video10_result = mysql_query('SELECT * FROM video2_10');

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
            <table border="0" cellspacing="0" cellpadding="0">
                <?php
                $cnt=0;
                while($row=mysql_fetch_array($list_result)){
                $cnt+=1;
                ?>
                <tr>
                <th background="folder.png" colspan=5><?=htmlspecialchars($row['folder'])?> | <?=htmlspecialchars($row['folder_en'])?> | <?=htmlspecialchars($row['folder_ta'])?></th>

                <th background="white.png"><a href="modify2.php?id=<?=$row['id']?>"><img src="modify.png"></a></th>
                <th background="white.png">    <form method="POST" action="process2.php?mode=delete_forder">
                        <input type="hidden" name="id" value="<?=$row['id']?>" />
                        <input type="hidden" name="cnt" value="<?=$cnt?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                    </form>




                    </th>
                </tr>

                <tr >
                	<th background="white.png">&nbsp;&nbsp;&nbsp;korean title&nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;english title&nbsp;&nbsp;&nbsp; </th><th background="white.png">&nbsp;&nbsp;&nbsp;tagalog title &nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;url&nbsp;&nbsp;&nbsp;</th><th background="white.png">&nbsp;&nbsp;&nbsp;download url&nbsp;&nbsp;&nbsp;</th><th background="white.png" colspan=2>&nbsp;</th>
                </tr>

                   <?php
                   	if($cnt==1){
                   	while($row_video=mysql_fetch_array($video1_result)){
                   	$len=strlen($row_video['downurl']);
                   		if(10<$len)
                   			$download=substr($row_video['downurl'],0,10)."...";
                   		else
                   			$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td ><?=$show?></td>
						<td ><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td >video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td><td>&nbsp;</td><td>&nbsp;</td></tr>
					<?php
						}

                   	else if($cnt==2){
                   	while($row_video=mysql_fetch_array($video2_result)){
                   	$len=strlen($row_video['downurl']);
					     if(10<$len)
					        $download=substr($row_video['downurl'],0,10)."...";
					     else
                   			$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==3){
                   	while($row_video=mysql_fetch_array($video3_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];
                    	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==4){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
                   	while($row_video=mysql_fetch_array($video4_result)){
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==5){
                   	while($row_video=mysql_fetch_array($video5_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==6){
                   	while($row_video=mysql_fetch_array($video6_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==7){
                   	while($row_video=mysql_fetch_array($video7_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];
                    	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==8){
                   	while($row_video=mysql_fetch_array($video8_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                    	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==9){
                   	while($row_video=mysql_fetch_array($video9_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                        <input type="submit" value="»èÁ¦" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}
                   	else if($cnt==10){
                   	while($row_video=mysql_fetch_array($video10_result)){
                   	$len=strlen($row_video['downurl']);
					                   		if(10<$len)
					                   			$download=substr($row_video['downurl'],0,10)."...";
					                   		else
                   								$download=$row_video['downurl'];

                   	$len2=strlen($row_video['url']);
                   		if(10<$len2)
                   			$show=substr($row_video['url'],0,10)."...";
                   		else
                   			$show=$row_video['url'];
					?>
					<tr><td><?=htmlspecialchars($row_video['title'])?></td>
						<td><?=htmlspecialchars($row_video['title_en'])?></td>
						<td><?=htmlspecialchars($row_video['title_ta'])?></td>
						<td><?=$show?></td>
						<td><?=$download?></td>
						<td><a href="modify_title2_<?=$cnt?>.php?id=<?=$row_video['id']?>"><img src="modify.png"></a></td>
						<td><form method="POST" action="process2.php?mode=delete_video<?=$cnt?>">
                        <input type="hidden" name="id" value="<?=$row_video['id']?>" />
                       <input type="image" id="submit" value="submit" src="delete.png" />
                        </form></td>
					</tr>
					<?php
						}
					?>
					<tr><td>video<a href="input_title2_<?=$cnt?>.php"><img src="insert.png"></a></td></tr>
					<?php
						}

                }
                ?>
                <tr><td colspan=4 align="center">folder<a href="input2.php"><img src="insert.png"></a></th></tr>
                </table>


            </article>
        </div>
    </body>
</html>
