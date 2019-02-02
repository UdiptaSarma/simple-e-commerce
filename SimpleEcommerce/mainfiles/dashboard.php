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


?>


<!DOCTYPE html>
<html>
	<head>
        
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..\css\dashboard.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <title>Dashboard</title>

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
        <a href="checkout.php"><i class=" 	fas fa-shopping-cart"></i></a>
        <?php
        echo "<span>'Welcome'. $email .</span>";
        ?>
        
        </nav>
        
        <div class="set1">
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["11"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 1 Watch 1');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="11">
            </form>
        </div>
            
            
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["12"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 1 Watch 2');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="12">
            </form>
        </div>
            
            
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["13"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 1 Watch 3');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="13">
            </form>
        </div>
            
            
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["14"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 1 Watch 4');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="14">
            </form>
        </div>
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["21"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 2 Watch 1');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="21">
            </form>
        </div>
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["22"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 2 Watch 2');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="22">
            </form>
        </div>
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["23"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 2 Watch 3');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="23">
            </form>
        </div>
        <div class="elem" >
            <img src="..\assets\watch%202.jpg">
            <form method="post" action="
            <?php
            echo htmlspecialchars($_SERVER["PHP_SELF"]);
            if(isset($_POST["24"] )){
            $query_for_button = "INSERT INTO $string_email (product) VALUES ('Company 2 Watch 4');";
                if(mysqli_query($con, $query_for_button)){
                    header("Location: dashboard.php");

                }
            }                          
                                        
            ?>
            ">
            <input type="submit" value="Add" name="24">
            </form>
        </div>
        </div>
    </body>
</html>

