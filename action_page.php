<?php

$contact = $_POST['contact'];
$psw = $_POST['psw'];

//database coonection
$con = new mysqli("localhost","root","","project");
if($con-> connect_error){
    die("failed to connect :".$con->connect_error);
} else{
    $stmt = $con->prepare("select*from login where contact = ? ");
    $stmt->bind_param("i",$contact);
    $stmt->execute();
    $stmt_result = $stmt->get_result();
    if($stmt_result->num_rows>0){
        $data = $stmt_result->fetch_assoc();
        if($data['password'] === $psw){
            header("Location: http://localhost/admin_panel/");
        } else{
            echo "invalid login";
        }
    }else{
        echo "<h2> invalid contact and password</h2>";
    }
}
?>