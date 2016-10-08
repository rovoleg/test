<?php  
include_once('classes.php');
$pid=$_REQUEST['pid'];
$pdo=Tools::connect('localhost', 'root', '123456', 'storeRov');
$sel='select * from products where id=?';
$res=$pdo->prepare($sel);
$res->execute (array($pid));
$row=$res->fetch();
echo '<p style="color:red;">Цена товара: '.$row['price'].'</p>';
echo '<h1 style="color:blue;">'.$row['product'].'</h1>';
/*
'select * from products where id='/$pid

'select imagepath from images from images where productid='.$pid
*/


?>