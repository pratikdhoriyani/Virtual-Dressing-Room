<?php
$email = $_POST['email'];
if (!empty($email)) {
 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "research_phpemailconfirmation";
    //create connection
    $conn =new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT email From user Where email = ? Limit 1";
     $INSERT = "INSERT Into user (email) values('$email')";
     if(mysqli_query($conn,$INSERT)){
     }
     else{
         
     }
     mysqli_close($conn);
    }
} else {
 echo "All field are required";
 die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a href="index.html" onClick="fu()">Register</a>
    <script>
        function fu(){
            alert("Insertd");
        }
    </script>
</body>
</html>