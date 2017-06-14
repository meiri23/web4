<?php
session_start();
echo $nama;
echo $_SESSION['nama'];
session_destroy();
?>