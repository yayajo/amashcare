<?php

session_start();
include 'config.php';

if (isset($_POST['addpatient'])) {
    $hospitalno = $_POST['hospitalno'];
    $fname = $_POST['fname'];
    $onames = $_POST['onames'];
    $dob = $_POST['dob'];
    $state = $_POST['state'];
    $lga = $_POST['lga'];
    $phoneno = $_POST['phoneno'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];



    // $photo = $_FILES['image']['name'];
    // $upload = "uploads/".$photo;
    
    //insert into patient Table
    $query = "INSERT INTO patient_tbl (hospital_no, first_name, other_name, dob, state, lga, phone, gender, email) VALUES(?,?,?,?,?,?,?,?,?)";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("sssssssss",$hospitalno,$fname,$onames,$dob,$state,$lga,$phoneno,$gender,$email);
    $stmt->execute();
    // move_uploaded_file($_FILES['image']['tmp_name'],$upload);
    header('location:index.php');
    // $_SESSION['response'] = "Successfully inserted into database";
    // $_SESSION['res_type'] = "success";
}