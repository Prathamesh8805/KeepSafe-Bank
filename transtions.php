<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Transtions</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a id="logo" class="navbar-brand" href="#">KeepSafe Bank</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                </ul>
                
            </div>
        </div>
    </nav>

    <!-- <div id="items" class="my-4">
        <h2>
            Your Transtions
        </h2>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Account Number</th>
                    <th scope="col">Reciver Name</th>
                    <th scope="col">Date of Transtion</th>
                    <th scope="col">Amount</th>
                    
                  


                </tr>
            </thead>
            <tbody id="tableBody">
                <tr>
                    <th>2022101</th>
                    <td>Sohan Ubale</td>
                    <td>12/12/12</td>
                    <td>50000 </td>
                    
                </tr>

            </tbody>
        </table>
    </div> -->

    <?php

    include 'connection.php'; 
    $selectquery = " select * from transfer";
    
    $query = mysqli_query($conn,$selectquery);
    
    if($result = mysqli_query($conn,$selectquery))
    {
        if(mysqli_num_rows($result)>0){
            echo "<table>";
            echo "<tr>";
            echo "<th>Account Number</th>";
            echo "<th>ReciverName</th>";
            echo "<th>Date</th>";
            echo "<th>Amount</th>";
            echo "</tr>";
            while($row = mysqli_fetch_array($result)){
                echo "<tr>";
                    echo "<td>" . $row['AccountNumber'] . "</td>";
                    echo "<td>" . $row['ReciverName'] . "</td>";
                    echo "<td>" . $row['Date'] . "</td>";
                    echo "<td>" . $row['Amount'] . "</td>";
                echo "</tr>";
            }
            echo "</table>";
            // Free result set
            mysqli_free_result($result);
        } else{
            echo "No records matching your query were found.";
        }
    } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
    }
     
    // Close connection
    
    ?>




    <footer>
        <div class="text1" id="contact">
            <span>
                Created by <a href="https://twitter.com/Prathamesh_4_4" target="_blank">Prathamesh Bhongale</a> | &#169;
                2022 All Rights Reserved.
            </span>
        </div>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>
<style>
    body {
        background: url("Background.png")no-repeat;
        background-size: cover;
        background-position: center center;
        background-attachment: fixed;
    }
    #add{
        align-items: center;
        margin-left: 145px;
        justify-content: center;
       
    }
    #clear{
        align-items: center;
        margin-left: 15px;
        justify-content: center;
    }

    #items{
        align-items: center;
        margin: auto;
        display: block;
        width: 80%;
        justify-content: center;
    }

    #Form{
        /* margin-left: 35px; */
        align-items: center;
        margin: auto;
        display: block;
        width: 80%;
        justify-content: center;
    }
   
    #floatingInputValue {
        margin-top: 25px;
    }

    #home {
        margin-top: 25px;
        display: flex;
        justify-content: center;
        width: fit-content;
        align-items: center;
        margin: auto;
    }

    .main {
        margin-top: 20px;
        align-items: center;
        display: flex;
        padding: 10px;
        padding-left: 15px;
        justify-content: center;
    }

    .col {
        padding-left: 15px;
        padding-right: 15px;
    }

    #logo {
        margin-left: 25px;
    }

    footer {
        background: #f8f9fa;
        padding: 10px 0;
        text-align: center;
        position: absolute;
        width: 100%;
        position: fixed;
        left: 0;
        bottom: 0;
    }

    footer .text1 span {
        font-size: 17px;
        font-weight: 400;
        color: black;
    }

    footer .text1 span a {
        font-weight: 500;
        color: black;
    }
</style
<script src="index.js"></script>

</html>
</body>

</html>