<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Report</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    // database connection
    $servername = "localhost";
    $username ="mahaveer";
    $password ="";
    $dbname ="abc_health";

    // create a connection
    $conn = new mysqli($servername,$username,$password,$dbname);

    if($conn->connect_error){
    die("connection failed" .$conn->connect_error);
    }

    // search process
    $usrEmail = $_GET['usrEmail'];
    $select = "select * from primary_table where Email ='$usrEmail' ";
    $result = $conn->query($select);
    $resource_Path;
    ?>
    <div class="container">
        <div class="content-container">
            <label> Details <br> <?php     
            if ($result->num_rows>0){
               while($row =$result->fetch_assoc()){
                $resource_Path = $row['HealthReport'];
                echo " Name ".$row['Name']." <br>Age ".$row['Age']."<br> Email ".$row['Email']."<br> Weight ".$row['weight']."<br> Report ".$row['HealthReport']."<br>";
               }
            }else{
                echo"no data found";
            }?></label>
            <label><a href="<?php echo "./uploads/".$resource_Path?>" target="_blank" download>Click here</a> to download pdf </label>
        </div>
        <div class="form-container">
            <iframe src="<?php echo "./uploads/".$resource_Path?>" frameborder="0" width="100%" height="600px">
        </div>
    </div>
</body>
</html>