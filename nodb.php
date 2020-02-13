<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'array.php';?>
	<div class="center">
		<div class="flex">
			<?php for ($i=0; $i < count($product); $i++) { ?>
				<div class="border">
					<p class="sale">
						-<?php echo $product[$i]["sale"]; ?>%
					</p>
					<b><?php echo $product[$i]["name"]; ?></b>
					<img src="<?php echo $product[$i]["image"]; ?>" width="350px"; height="350px">
					<p><b style="color: red"><?php echo number_format($product[$i]["price"]-($product[$i]["price"]*($product[$i]["sale"]/100))); ?>đ</b><p>
					<p><strike><?php echo number_format($product[$i]["price"]); ?>đ</strike></p>
				</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>