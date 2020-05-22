<?php 
    include "db.php"; 
	$query = "SELECT * FROM `items` ORDER BY `id` DESC";
	$execute = mysqli_query($con,$query);
?>

<?php 
	while($row = mysqli_fetch_assoc($execute)){?>

		<div class="cardWrapper">
			<div class="card">
				<img src="<?php echo $row['img'];?>">
				<div class="cardContent">
					<p class="name"><?php echo $row['name'];?></p>
					<p class="price">Price: <?php echo $row['price'];?> tk</p>
					<p class="available">Available: <?php echo $row['available'];?> pieces</p>
				</div>
			</div>
		</div>

	<?php
		}
?>