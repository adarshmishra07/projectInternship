<html>

<body>
    
    <?php
$name=$_POST["uname"];
$msg=$_POST["msg"];
$email=$_POST["e-mail"];
    
$servername="localhost";
$username="root";
$password="";
$database="cakeshop";
    
$conn = new mysqli ($servername, $username, $password,$database);
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}    
//insert values in customer details
    $sql = "INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES (NULL, '$name', '$email', '$msg')";
    if ($conn->query($sql) === TRUE) {
    } 
    else {
    echo "Error" . $conn->error;
    }
?>
    <center><h1>Thank you for contacting us We will get back to you soon</h1></center>
    <a href="../index.html" >Go Back</a>
</body>

</html>