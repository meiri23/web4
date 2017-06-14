<?php 
	$host = "localhost";
	$dbname = "theresia_sisfonews";
	$username = "root";
	$password = "satu";
	$db = "";

	try {
		$db = new PDO("mysql:host={$host};dbname={$dbname}", $username, $password);
		$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch (PDOException $exception){
		die("Connection error: ".$exception->getMessage());
	}

	$query = $db->prepare("SELECT * FROM berita");
	$query->execute();
	$data = $query->fetchAll(); ?>

	<table border="1">
			<tr>
				<th>id</th>
				<th>tanggal</th>
				<th>judul</th>
			</tr>
	
	<?php 
	foreach ($data as $ib) { ?>
			<tr>
				<td><?php echo $ib ['id_berita'] ?></td>
				<td><?php echo $ib ['tanggal'] ?></td>
				<td><?php echo $ib ['judul'] ?></td>
			</tr>

	<?php } 
 ?>
	</table>