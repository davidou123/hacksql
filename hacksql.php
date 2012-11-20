<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<style type="text/css">
	.related{
		width:90%;
		border:1px solid #DDD;
		border-top:1px solid #A3D1F0;
		overflow:hidden;
		margin-left:20px;
		margin-bottom:10px;
			background:#E0E0E0;
		}
</style>
</head>

<body>
<BR>

<div  class="buttomlink">
	<h3><a href='#' class='thickbox'>駭客sql injection 練習站</a></h3>
</div>
	<BR><hr style="margin-left:20px"width="90%"><BR>
	<form method="get" action="">
	<p>請輸出要搜尋的id<input type="text" name="id" size="20"><input type="submit" value="送出" ></p>
</form>
	
	<table border="1" width="500px" style="margin-left:200px">
	<tr class="related">
		<td>id　</td>
		<td>姓名　</td>
		<td>地址</td>
		<td>年紀</td>
		<td>密碼</td>
		<td>備註</td>
	</tr>
<?php
$id=$_GET["id"];

	require_once("SQLconnection.php");
	
function show($id){
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  sqltable where id=$id";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
  echo "你搜尋的是<br>";
	echo "<b> I D : </b>".$rows["id"]."　</br>".
		"<b>姓名: </b>".$rows["name"]."　</br>".
		"<b>地址: </b>".$rows["addr"]."　</br>".
		"<b>年紀: </b>".$rows["age"]."　</br>".
		"<b>密碼: </b>".$rows["password"]."　</br>".
		"<b>備註: </b>".$rows["memo"]."　</br>
	</tr>";
					}
	
  }
  }
   show($id);
   echo "<hr>";
	$link = create_connection();
	// 建立SQL指令字串
	$sql = "SELECT * FROM  sqltable ";
	$result = mysql_query($sql); // 執行SQL指令
	if (mysql_num_rows($result) != 0) 
	{
  while ($rows = mysql_fetch_array($result, MYSQL_BOTH)) 
  {
	echo "<tr><td>".$rows["id"]."　</td>".
		"<td>".$rows["name"]."　</td>".	
		"<td>".$rows["addr"]."　</td>".
		"<td>".$rows["age"]."　</td>".
		"<td>".$rows["password"]."　</td>".
		"<td>".$rows["memo"]."　</td>
	</tr>";
					}
	
  }
?>
</table>
</body>

</html>




