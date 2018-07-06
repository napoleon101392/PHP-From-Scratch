<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<ul>
	<?php foreach($compact['users'] as $user) { ?>
		<li><?php echo $user['email']?></li>
	<?php } ?>
	</ul>
</body>
</html>