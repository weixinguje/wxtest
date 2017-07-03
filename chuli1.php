<?php
//$path = 'php05/'; 
//$ary = scandir($path);
////var_dump($ary);
//$id = $_GET['id'];
//
//$bb=file("php05/$id".".txt");
//$aa=$bb[4];
//echo $aa;
//var_dump($id.".txt");

$conn = mysqli_connect('localhost','root','');
if(!$conn){
	
	die('Connection failed:'.mysqli_connect_error());
}else{

	echo'连接成功'.'<br><br>';
}

mysqli_query($conn,'set names utf8');
mysqli_query($conn,'use weixing1');

$id= $_GET['id'];
//var_dump($id);


$select = "select * from essay where id=$id;";
$r = mysqli_query($conn,$select);

$sel = mysqli_fetch_array($r);
	echo '标题：'.$sel['title'].'<br><br>'.'文章内容：'.$sel['e_text'].'<br><br><br>';

$fname='img/'.$sel['filename'];
echo $fname;
  echo "<img src='$fname'>";


//echo "<table><a href='manager.php'>返回</a> </table>";





//$id=$_GET['id'];


?>
