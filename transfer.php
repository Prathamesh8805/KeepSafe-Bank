<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname="jay";
$AccountNumber = $_POST['AccountNumber'];
$ReciverName = $_POST['ReciverName'];
$Date = $_POST['Date'];
$Amount = $_POST['Amount'];

if (!empty($AccountNumber) || !empty($ReciverName)|| !empty($Date) || !empty($Amount))
{
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());  
      }
      else
      {
        
          $INSERT = "INSERT Into transfer values ('$AccountNumber','$ReciverName', '$Date', '$Amount')";
          if(mysqli_query($conn,$INSERT))
          {
            echo "Done Transation";
          }
          else{
            echo $INSERT;
        }
    }
    
}
else{

echo "Fill all details";
}


?>