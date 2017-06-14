     <?php 
    $host = "localhost";
    $dbname = "theresia_buku";
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

    $query = $db->prepare("SELECT * FROM theresia_buku");
    $query->execute();
    $data = $query->fetchAll(); ?>


    <?php 
    foreach ($data as $ib) { ?>
    <h1><?php echo $ib['id_buku'] ?></h1>
        <h1><?php echo $ib['judul'] ?></h1>
        <h1><?php echo $ib['penulis'] ?></h1>
    ?>
 