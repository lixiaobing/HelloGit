<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>
<body>
在这里发布TWEET<br>
<form action="./push.php" method='post'>
<input type='text' name='content' />
<input type='text' name='md5' value='10160917'/>
<br>
<input type='submit' value='发布消息'/>
</form>
<?php

if (!array_key_exists("content", $_REQUEST)||!array_key_exists("md5", $_REQUEST))
{
	echo "content is null ";
   return;
}

$content=$_REQUEST['content'];
$md5=$_REQUEST['md5'];

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

$con = mysql_connect(DB_HOST,DB_USER,DB_PASSWORD);
if (!$con)
{
  die('Could not connect: ' . mysql_error());
  echo 'Could not connect: ' ;
}

mysql_select_db(DB_NAME, $con);
mysql_query("SET NAMES UTF8");

if ($md5 == "10160917")
{
    mysql_query("INSERT INTO tweet (content,date_time) VALUES ('".$content."','".date('Y-m-d')."')");
    echo "Tweet发布成功";
}else{

    echo "Tweet发布失败";

}
mysql_close($con);
?>

</body>
</html>
