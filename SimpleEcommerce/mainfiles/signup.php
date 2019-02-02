<?php

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



if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    if($_POST["confirmpassword"] !== $_POST["password"]){
    echo "Passwords do not match";
    }
    elseif ($_POST["email"] !=="" || $_POST["password"]!=="" || $_POST["confirmpassword"]!==""){
    $query = "INSERT INTO accounts (email, password) VALUES ('$email', '$password')";
    
    if(mysqli_query($con, $query)){
        
        $string_email = str_replace("@", "_", $email);
        $string_email = str_replace(".", "_", $string_email);
        
        $query_create_table = "CREATE TABLE $string_email (id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY, product VARCHAR(255) NOT NULL);";
        
       if(mysqli_query($con, $query_create_table)){
           
           header("Location: dashboard.php");
       }
        
        
    }
}

}


?>

<!DOCTYPE html>
<html>
	<head>
        <title>Sign Up</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..\css\signup.css">

        <title>Sign Up</title>

        <!-- Bootstrap CSS -->

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	
	</head>
    <body>
       
        
        <form method ="post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <fieldset>
                 <h1>Sign Up</h1>
                <div class="felem" id="email">
                <label>Email :</label> <input type="email" name="email">
                </div>
                <br>
                
                <div class="felem" id="password">
                <label>Password :</label><input type="password" name="password">
                
                </div>
                <br>
                <div class="felem" id="confirmpassword">
                <label>Confirm Password :</label><input type="password" name="confirmpassword">
                </div>
                <div class="submit">
                <input type="submit" value="Submit" name="submit">
                </div>
                <p>Have Account? <a href="login.php">Login</a></p>
            </fieldset>
        </form>
    
    </body>
</html>
