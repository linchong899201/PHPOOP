<?php 

//设置数据库连接

$dbname = 'some_db';
$username = 'root';
$password = 'root';
try{
	$conn = new PDO('mysql:host=localhost;dbname='.$dbname,$username,$password);
	$conn->setAttribute(PDO::ATTR_ERRMODE,\PDO::ERRMODE_EXCEPTION);
}
catch(Exception $e){
	die($e->getMessage());
}

//运行一个查询
$sql = "SELECT * FROM 'posts' WHERE pubdate < NOW() ORDER BY pubdate DESC";
try{
	$result = $conn->query($sql);
}
catch (Exception $e){
	die($e->getMessage());
}

//显示博客标题
if($result->rowCount()){
	foreach ($result as $post) {
		echo '<h1>' . $post['title'] . '</h1>';
	}
}

?>