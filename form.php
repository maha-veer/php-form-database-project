<?php
// connect database
$servername = "localhost";
$username ="mahaveer";
$password ="";
$dbname ="abc_health";


// create a connection
$conn = new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
}

// process form submission

if($_SERVER["REQUEST_METHOD"]==="POST"){
    // Retrieve form data
    $name = $_POST["name"];
    $age = $_POST["age"];
    $email = $_POST["email"];
    $weight = $_POST["weight"];

    // uploading pdf file
    $pdfName =$_FILES['pdf']['name'];
    $pdfTmpName =$_FILES['pdf']['tmp_name']; 

    $pdfPath ='uploads/'.$pdfName;
    if(move_uploaded_file($pdfTmpName,$pdfPath)){
        // file uploaded successfully , insert data into database
        $sql = " INSERT INTO `primary_table`(`Name`, `Email`, `Age`, `weight`, `HealthReport`) VALUES ('$name','$email','$age','$weight','$pdfName')";
        if($conn->query($sql)===true){
            echo "Submitted successfully <br>";
            echo"<a href='index.html'>Click Here to return home Page</a>";
        }else{
            echo "Error in submision \n".$conn->error;
        }
    }else{
        echo "Error in uploading file";
    }
}
?>