<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php include 'connect.php';?>
	<div class="center">
		<div class="flex">
			<?php for ($i=0; $i < count($result); $i++) { ?>
				<div class="border">
					<p class="sale">
						-<?php echo $result[$i]["sale"]; ?>%
					</p>
					<b><?php echo $result[$i]["name"]; ?></b>
					<img src="<?php echo $result[$i]["image"]; ?>" width="350px"; height="350px">
					<p><b style="color: red"><?php echo number_format($result[$i]["price"]-($result[$i]["price"]*($result[$i]["sale"]/100))); ?>đ</b><p>
					<p><strike><?php echo number_format($result[$i]["price"]); ?>đ</strike></p>
				</div>
			<?php } ?>
		</div>
	</div>
</body>
</html>