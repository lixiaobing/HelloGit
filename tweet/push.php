
<?php 
/** WordPress数据库的名称 */
define('DB_NAME', 'tweet');
/** MySQL数据库用户名 */
define('DB_USER', 'root');
/** MySQL数据库密码 */
define('DB_PASSWORD', 'root');

/** MySQL主机 */
define('DB_HOST', '127.0.0.1:3306');

/** 创建数据表时默认的文字编码 */
define('DB_CHARSET', 'utf8mb4');


?>　　

<?php

	$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
	if (!$con)
	{
	  die('Could not connect: ' . mysql_error());
	  echo 'Could not connect: ' ;
	}else{
		echo "connect mysql success" ;
	}
	mysql_select_db(DB_NAME, $con);
	mysql_query("SET NAMES 'UTF8'");


 mysql_query("INSERT INTO tweet (content, image ,date_time) VALUES ('全是撒阿斯蒂芬阿斯蒂芬', '',".date('Y.m.d'). ")");

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

?> 

