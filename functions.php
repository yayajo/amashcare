<?php
function check_login($conn)
{
    if(isset($_SESSION['user_id']))
    {
        $email = $_SESSION['user_id'];
        $query = "Select * From users where email = '$email' limit 1";
        $result = mysqli_query($conn, $query);
        if ($result && mysqli_num_rows($result)> 0 )
        {
              $user_data =  mysqli_fetch_assoc($result);
              return $user_data;
        }

    }

    //redirect to login
    header("Location: login.php");
    die;
}