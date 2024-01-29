<?php 
if(isset($_GET['client'])&&isset($_GET['guest'])){

    include "connection.php";
    $ClientSlug=$_GET['client'];
    $GuestSlug=$_GET['guest'];
    $Guestsql="select * from $ClientSlug WHERE slug='$GuestSlug'";
    $Guestresult=mysqli_query($conn,$Guestsql);
    $Guestrow=mysqli_fetch_array($Guestresult);
    $Clientsql= "select * from clientlist WHERE slug='$ClientSlug'";
    $Clientresult=mysqli_query($conn,$Clientsql);
    $Clientrow=mysqli_fetch_array($Clientresult);
}
 $text=$_POST["text"];
 $query1 = "UPDATE $ClientSlug SET msgfromguest = '$text' WHERE slug='$GuestSlug'";
 $execute= $conn1->query($query1);
?>