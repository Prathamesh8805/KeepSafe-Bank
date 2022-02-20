<?php
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname="jay";
$CustomerName = $_POST['CustomerName'];
$DOB = $_POST['DOB'];
$Address = $_POST['Address'];
$occupation = $_POST['occupation'];


if (!empty($CustomerName) || !empty($DOB) || !empty($Address) || !empty($occupation))
{
    $conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);

    if(mysqli_connect_error())
    {
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());  
      }
      else
      {
        
          $INSERT = "INSERT Into customers values ('$CustomerName', '$DOB', '$Address','$occupation')";
          if(mysqli_query($conn,$INSERT))
          {
            echo "Customer Added";
          }
          else{
            echo $INSERT;
        }
    }
    
}
else{

echo "Please Enter a vaild data";
}


?>