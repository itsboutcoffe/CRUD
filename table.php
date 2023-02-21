<?php
$conn = mysqli_connect("localhost","root","","CURD");
if(!$conn){
    die("Error: There may be problem in the code".mysqli_error());
}
$stmt = "CREATE TABLE CURD(
    ID INT AUTO_INCREMENT PRIMARY KEY NOT NULL,
    F_name VARCHAR(30),
    L_name VARCHAR(30),
    area VARCHAR(30),
    email VARCHAR(255),
    contact INT,
    gender VARCHAR(30)
)";

$res = mysqli_query($conn,$stmt);
if($res){
    echo "Table created successfully";
}
else{
    echo "Failed";
}
mysqli_close($conn);
?>