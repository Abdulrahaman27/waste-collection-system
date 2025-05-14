<?
$host = "localhost";
$user = "root";
$password = "";
$dbname = "waste_management_system";

// Create connection 
$conn = new mysqli($host, $user,  $password, $dbname);

// Checl Connection
if($conn->connect_error){
    die("Connection Failed: " . $_COOKIE->connect_error);
}

// Set charset to UTF-8
$conn->set_charset("utf8mb4");
?>