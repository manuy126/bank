<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">

    <title>Basic Banking System</title>

</head>

<body style="background-image: url(img/o.jpg);">

    <?php
    include 'navbar.php';
    ?>
   
        
            
                <div class="heading text-center ">
                    <h2 style="color:black">Welcome to</h2>
                    <h1 style="color:black"> AY BANK</h1>
                </div>
            </div>
            
        </div>
    <div class="card-body text-center">

<img src="img/bank.jpg" alt="createuser" width="500" height="500">

<div class="card-group">
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/user1.jpg" alt="createuser" width="143" height="143" >
                <br>
                <br>
                <a href="createuser.php"><button style="background-color:red;">Create User</button></a>
                </div>
                
            </div>
            <div class="card ">
                
                <div class="card-body text-center">
                <img src="img/tr.jpg" alt="transferimg" width="143" height="143" >
                <br>
                <br>
                <a href="transfermoney.php"><button style="background-color: red;">Make a Transaction</button></a>
                </div>
                
            </div>
            <div class="card">
                
                <div class="card-body text-center">
                <img src="img/h.jpg" alt="historyimg" width="143" height="143" >
                <br>
                <br>
                <a href="transactionhistory.php"><button style="background-color:red;">Transaction History</button></a>
                </div>
                
            </div>
        </div>


    </div>

      



   
</body>

</html>