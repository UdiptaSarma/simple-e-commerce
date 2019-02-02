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

if(isset($_POST["submit"])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    $query = "SELECT * FROM accounts WHERE email='$email'";
    $result = mysqli_query($con, $query);
    
    if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_assoc($result);
        if( $row['password']!== $password){
            echo "Incorrect email password combo";
        }elseif($row['password'] == $password){
            $_SESSION["email"] = $email;
            header("Location: dashboard.php");
        }
        
    }elseif(mysqli_num_rows($result)==0){
        echo "New User. Signup below";
    }

}


?>

<!DOCTYPE html>
<html>
	<head>
        <title>Login</title>
	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="..\css\login.css">

        <title>Login</title>

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
                <h1>Login</h1>
                <div id="email" class="felem">
                <label >Email :</label> <input type="email" name="email">
                </div>    
                <br>
                <div id="password" class="felem">
                <label >Password :</label><input type="password" name="password">
                </div>
                <div class="submit">
                <input type="submit" value="Submit" name="submit">
                </div>
                <p>New User? <a href="signup.php">Signup</a></p>
            </fieldset>
        </form>
    
    </body>
</html>
