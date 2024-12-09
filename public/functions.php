<?php
require_once 'DB.php';

//Get all data from table
function GetData($connect){
    try{
        $sql="SELECT * from student";

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
function printTable1($connect,$name1,$name2,$tname){
    try{
        
            $sql="SELECT $name1,$name2 from $tname";

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
                    $id=$row['StudentID'];
                    echo "<td><a href='student.php?id = $id'>View</td>";
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
    function addData($connect,$table,$reg,$name,$age,$course){
        try {
            $sql = "INSERT INTO $table VALUES ('$reg','$name','$age','$course')";
    
        $result = mysqli_query($connect,$sql);
        if ($result) {
            echo "New Student record created successfully!";
        }else{
            die("Error".mysqli_error($connect));
        }
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    //echo "Get the post request from the client";
    $name = $_POST['name'];
    $contact_no = $_POST['contact_no'];
    $email = $_POST['email'];
    $message = $_POST['message'];
}
?>