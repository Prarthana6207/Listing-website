<?php
$contact = $_POST['contact'];
$Email = $_POST['Email'];
$usrmame = $_POST['usrname'];
$psw = $_POST['psw'];
$GSTIN = $_POST['GSTIN'];



//database connection
$conn = new mysqli("localhost","root","","project");
if($conn-> connect_error){
    die("failed to connect :".$con->connect_error);
} else{
    $stmt = $conn->prepare("insert into login (contact,email,usrname,password,gstin)
    values(?,?,?,?,?)");
    $stmt->bind_param("issss",$contact,$Email,$usrmame,$psw,$GSTIN);
    $stmt->execute();
     header("Location: http://localhost/admin_panel/");
    $stmt->close();
    $conn->close();
}
    
?>