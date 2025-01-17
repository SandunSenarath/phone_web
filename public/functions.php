<?php
require_once 'dbconnect.php';

//Get all data from table
function GetData($connect){
    try{
        $sql="SELECT * from mobile_web";

        $result=mysqli_query($connect,$sql);

        if(mysqli_num_rows($result)>0){
            echo "<table border ='1'>";
            echo "<br>";
            $col=mysqli_fetch_fields($result);
            echo "<tr>";
            foreach ($col as $value) {
                echo "<td> $value->name</td>";
            }
            echo "</tr>";
            while($row=mysqli_fetch_assoc($result)){
                echo "<tr>";
                foreach ($row as $key => $value) {
                    echo "<td> $value </td>";
                }
                echo "</tr>";
            }
            echo "</table>";
        }else{
            echo "no results";
        }

    }catch(Exception $e){
        die($e ->getMessage());
    }
}

//Get table data from col vise
function printTable1($connect,$name,$contact_no,$email,$message){
    try{
        
            $sql="SELECT $name,$contact_no,$email,$message from $ mobile_web";

            $result=mysqli_query($connect,$sql);
        
            if(mysqli_num_rows($result)>0){
                echo "<table border ='1'>";
                echo "<br>";
                $col=mysqli_fetch_fields($result);
                echo "<tr>";
                foreach ($col as $value) {
                    echo "<td> $value->name</td>";
                }
                echo "</tr>";
                
                while($row=mysqli_fetch_assoc($result)){
                    echo "<tr>";
                    foreach ($row as $key => $value) {
                        echo "<td> $value </td>";
                    }
                    $name=$row['name'];
                    echo "<td><a href='mobile_web.php?id = $name'>View</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }else{
                echo "no results";
            }
    }catch(Exception $e){
        die($e->getMessage());
    }
}

//insert data into table
    // function addData($connect,$name,$contact_no,$email,$message){
    //     try {
    //         $sql = "INSERT INTO contactus VALUES ('$name','$contact_no','$email','$message')";
    
    //     $result = mysqli_query($connect,$sql);
    //     if ($result) {
    //         echo "record created successfully!";
    //     }else{
    //         die("Error".mysqli_error($connect));
    //     }
    //     } catch (Exception $e) {
    //         die($e->getMessage());
    //     }
    // }



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Get the post request from the client";
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
?>