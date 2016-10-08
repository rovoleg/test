<?php 
foreach ($_REQUEST as $k=>$v) 
{
	if(substr($k,0,4)=='into')
	{
		$btnid=substr($k,4);
		//echo $btnid;
		setcookie('cart'.$btnid,$btnid);

	}
}
include_once('pages/classes.php');
echo '<form action="index.php?id=1" method="post">';
$pdo=Tools::connect('localhost', 'root', '123456', 'storeRov');
echo '<p>';
$res=$pdo->query('select * from groups');
echo '<select name="groupid">';
while($row=$res->fetch())
{
	echo '<option value="'.$row['id'].'">'.
	$row['groupsname'].'</option>';
}


echo '</select>';

echo '</p>';

$sel='select id from products';

$res=$pdo->query($sel);
while($row=$res->fetch())
{
	$product=Product::fromDb($row['id']);
	$product->draw();
}

echo '</form>';




?>

<!--
for ($i=0; $i < 4; $i++) { 
	echo '
<div class="row">';
for ($j=0; $j < 4; $j++) { 
	echo '
<div class="col col-md-3 col-sm-2 col-xs-1" >
    <a href="#" class="thumbnail">
      <img src="http://placehold.it/300x200" alt="">
   	<h3>Item</h3>
	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est sequi laudantium repellendus quam, corporis animi cum, aspernatur unde quidem autem voluptas. Explicabo maxime minima, ratione doloremque. Laudantium culpa illo dolores.</p>
	 </a>

</div>';}
echo '
</div>';
} -->
 