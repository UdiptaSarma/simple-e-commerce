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

$identity = $_POST['id'];
$query_for_delete = "DELETE FROM $string_email WHERE id=$identity";
echo $query_for_delete;
if(isset($_POST["delete"])){
    if(mysqli_query($con, $query_for_delete)){
        header("Location: checkout.php");
    }
}
?>