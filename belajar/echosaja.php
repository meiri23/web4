<?php 
	$buah = array(
			array("buah"=>"pepaya","banyak"=>"1","tambahan"=>"kecap"),
			array("buah"=>"mangga","banyak"=>"2","tambahan"=>"susu"),
			array("buah"=>"pisang","banyak"=>"3","tambahan"=>"cappucino")
		);

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Belajar Echo</title>
</head>
<body>
	<?php 
		foreach ($buah as $r) { ?>
			<h1>Cara Membuat Jus <?php echo $r ['buah'] ?></h1>
			<p>Campurkan <?php echo $r ['buah'] ?> sebanyak <?php echo $r ['banyak'] ?> buah ditambahkan dengan <?php echo $r ['tambahan'] ?> untuk memberi rasa</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maxime voluptas, amet veritatis nobis eum incidunt quae, distinctio saepe odio modi earum tempora! Error veritatis possimus vero numquam provident, reiciendis ex?Lorem ipsum dolor sit amet, consectetur adipisicing elit. Rem optio vel nesciunt est nisi obcaecati blanditiis minus quo quas, deleniti voluptatem fugiat deserunt beatae mollitia recusandae eligendi cupiditate ducimus nostrum!</p>
	<?php	} ?>

	
</body>
</html>