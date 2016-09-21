<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="./css/main.css" rel="stylesheet" type="text/css">
    <link rel="shortcut icon" href="./images/icon.jpg">
    <title>我的 tweet 系统</title>
    <script type="text/javascript">	
	    function _onload()
	    {
		}
		window.onload = _onload; 
    </script>

</head>
<body bgcolor="#EEEEEE">
<?php 

/** WordPress数据库的名称 */
define('DB_NAME', 'tweet');

/** MySQL数据库用户名 */
define('DB_USER', 'root');

/** MySQL数据库密码 */
define('DB_PASSWORD', 'P@55word');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1:3306');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');

function echoTweet()
{
	$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	  echo 'Could not connect: mysql' ;
	}else{
		// echo "connect mysql success" ;
	}
	mysql_select_db(DB_NAME, $con);
	mysql_query("SET NAMES 'UTF8'");
	$result = mysql_query("SELECT * FROM tweet");
	while($row = mysql_fetch_array($result))
	{
		echo "<p><i>";
		echo  $row['date_time'] ;
		echo "</i>";
		echo $row['content'];
		echo "<br />";					
		echo "</p>" ;
	}
	mysql_close($con);
}
?>　　


<table  width="90%" align="center">
	<tbody>
		<tr>
			<td>
			    <div style="margin-left:0%; padding: 5% 5% 5% 5%; border: 1px solid LightGrey;">
				    <h2>我的 tweet 系统</h2>
				    <p style="font-style:italic;color:cornflowerblue;">李兵正在输入 
				    <img src="./images/progress-blue-dot.gif" style="box-shadow:none; margin:0;height:14px">
			        </p>
					<div class="tweet">

					<p>
					<i>2016.09.18</i>
					公司上网机的配置，CocosCreator都运行不了，只能呵呵..
					<br>
					<img src="./images/win32_2.png" width=400>
					</p>

					<p>
					<i>2016.09.17</i>
					这个世界有很多我无法理解，但又不得不接受的事情
					</p>

					<p>
					<i>2016.09.16</i>
					曾经有一次当富二代的机会摆在我的面前，可是我爸没有珍惜
					</p>
					<?php
					echoTweet()
					?>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
</table>

</body>
</html>
