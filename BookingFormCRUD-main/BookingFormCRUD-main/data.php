<?php

$bname=$_POST['bname'];
$dname=$_POST['dname'];
$qty=$_POST['qty'];
$No_Day=$_POST['No_Days'];

$conn=mysqli_connect("localhost","root","","travel_booking_data");

if(!$conn)
{
    die("Not connected");
}

if(isset($_POST['submit'])){
    $insert_query="INSERT INTO booking(bname,dname,qty,No_Days) VALUES('$bname','$dname','$qty','$No_Day')";

    if(mysqli_query($conn,$insert_query)){
       header("refresh:0,url=form.html");
    }
    else{
        echo"Not Inserted.........";
    }
}

?>
