<?php
// /* Database credentials. Assuming you are running MySQL
// server with default setting (user 'root' with no password) */
// $dbhost = "localhost";
// $dbuser = "root";
// $dbpass = "";
// $dbname = "windex";
 
// /* Attempt to connect to MySQL database */
// if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
// {
//     die("failed to connect");
// }

 
    $conn = new mysqli('localhost','root','','amashcare');

    if($conn->connect_error){
        die("could not connect".$conn->connect_error);
    }

?>