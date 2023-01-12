<!-- Untuk search -->
<?php
	require 'conn.php';
	if(ISSET($_POST['search'])){
?>
	
<?php
	$keyword = $_POST['keyword'];
	$query = mysqli_query($conn, "SELECT * FROM `product` WHERE `product_type` LIKE '%$keyword%' or `product_name` LIKE '%$keyword%'") or die(mysqli_error());
	$count = mysqli_num_rows($query);
	if($count > 0){
		while($fetch = mysqli_fetch_array($query)){
?>
	<div class="roww">
		<img src="img/<?php echo $fetch['image_source']?>">
		<h3><?php echo $fetch['product_name']?></h3>
		<p><?php echo $fetch['description']?></p>
		<h2><?php echo $fetch['price']?></h2>
	</div>
<?php
		}
	}else{
		echo "<p><center>No result found!</center></p>";
	}
	}    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
	<link rel = "icon" href ="img/F.png" type = "image/x-icon">
	<title>furniturIn</title>
</head>
</html>

