<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname="jay";

$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

if($conn){
    ?>
    <?php
}
else{
    die("no Connection" . mysqli_connect_error());
}



?>