<?php

session_start();

$servername = "localhost";
$username = "root";
$passworddb = "";
$db = "simple_e_commerce";

//create connection
$con = mysqli_connect($servername, $username, $passworddb, $db);

//check connection
if(!$con){
    die("Connection failed: " .mysqli_connect_error());
}
$email = $_SESSION["email"];
$string_email = str_replace("@", "_", $email);
$string_email = str_replace(".", "_", $string_email);

$query_to_view = "SELECT * FROM $string_email";
$result_to_view = mysqli_query($con, $query_to_view);



?>


<!DOCTYPE html>
<html>
	<head>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..\css\checkout.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <title>Checkout</title>

        <!-- Bootstrap CSS -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	
	</head>
    <body>
        <nav>
        <a href="dashboard.php"><i class="fas fa-angle-left"></i></a>
        </nav>
        <?php
        
        
        if(mysqli_num_rows($result_to_view)>0){
            while($row = mysqli_fetch_assoc($result_to_view)){
                $identity = $row["id"];
                $query_for_delete = "DELETE FROM $string_email WHERE id=$identity";
                //echo $query_for_delete;
                ?>
                <div class="item">
                <p><?php echo $row["product"] ?></p>
                <form method="post" action="delete.php">
                <input type = "submit" value = "Delete" name = "delete">
                    
                <input type='hidden' name='id' value='<?php echo $identity?>'>
                </form>
                </div>
        <?php
            }
        }
        
        
        ?>
        <button type="button" onclick="#" class="checkout">Checkout</button>
        
    
    </body>
</html>
