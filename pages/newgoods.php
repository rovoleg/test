
<?php 
include_once('pages/classes.php');
 ?>
<div class="container-fluid">
	<div class="row">
	<div class="col col-md-4 col-sm-2 col-xs-1">
	<form action="index.php?id=4" method="post" >

		<div class="form-group">
			<label for="groupid">Group:</label>
			<select name="groupid" class="form-control">
			<?php 
				$pdo=Tools::connect('localhost', 'root', '123456', 'storeRov');
				$res=$pdo->query('select * from groups');
				while($row = $res->fetch()){
					echo '<option value="'.$row['id'].'">'.$row['groupname'].'</option>';
				}
			?>
			</select>
 		</div>
 		<div class="form-group">
			<label for="product">Item:</label>
			<input type="text" class="form-control" name="product"/>
			<?php 
			
			?>
		</div>
 		<div class="form-group">
			<label for="country">Maker:</label>
			<input type="text" class="form-control" name="country"/>
			<?php 
			
			?>
 		</div>
 		<div class="form-group">
			<label for="price">Price:</label>
			<input type="number" class="form-control" name="price"/>
			<?php 
			
			?>
 		</div>
 		<div class="form-group">
 			<label for="info">Info:</label>
 			<textarea name="info" class="form-control">
 			</textarea>
 		</div>
 		<div class="form-group">
 			<input type="reset" class="btn btn-default" name="reset"/>
			<input type="submit" class="btn btn-default" name="addproduct"/>
 		</div>
 	</form>
	<?php
	if(isset($_POST['addproduct'])){
		$product=trim(htmlspecialchars(($_POST['product'])));
		$country=trim(htmlspecialchars(($_POST['country'])));
		$info=trim(htmlspecialchars(($_POST['info'])));

		if(empty($product)) return;

		$ins='insert into products (product, groupid, country, price, discount, info, datein) 
			values ("'.$product.'",'.$_POST["groupid"].',"'.$country.'",'.$_POST['price'].',0,"'.$info.'","'.@date('Y/m/d').'")';
			$pdo = Tools::connect('localhost', 'root', '123456', 'storeRov');
			$pdo->query($ins);
	}

	?>
</div>
<div class="col col-md-4 col-sm-2 col-xs-1">
right column
<form action="index.php?id=4" method="post" enctype="multipart/form-data">
<input type="file" name="file[]" multiple="multiple" accept="image/*" />

<input type="submit" name="add_img" value="add"/>
</form>
</div>
	</div>
	<div class="row">
	<?php 

 	?>
	</div>
	<div class="row">	
	<?php 

 	?>
	</div>
</div>
