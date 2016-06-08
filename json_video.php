<?php
	include "connect_db.php";

$name = $_REQUEST[name];

 $sql ="select * from ".$name;
 $result = mysql_query($sql,$connect);
 mysql_query(" set names euckr ");

	$total_record = mysql_num_rows($result);


   echo "[";

   // 반환된 각 레코드별로 JSONArray 형식으로 만들기
   for ($i=0; $i < $total_record; $i++)
   {
      // 가져올 레코드로 위치(포인터) 이동
      mysql_data_seek($result, $i);
      // 하나의 레코드 가져오기
      $row = mysql_fetch_array($result);

      echo "{\"title\":\"$row[title]\",\"title_en\":\"$row[title_en]\",\"title_ta\":\"$row[title_ta]\",\"url\":\"$row[url]\",\"downurl\":\"$row[downurl]\"}";

   // 마지막 레코드 이전엔 ,를 붙인다. 그래야 데이터 구분이 되니깐.
   if($i<$total_record-1){
      echo ",";
   }

   }
   // JSONArray의 마지막 닫기
   echo "]";
   	mysql_close($connect);

?>