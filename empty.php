<?php
if(isset($_GET['client'])&&isset($_GET['guest'])){

  include "php/connection.php";
  $ClientSlug=$_GET['client'];
  $GuestSlug=$_GET['guest'];
  $answer=$_GET['answer'];
  $Guestsql="select * from $ClientSlug WHERE slug='$GuestSlug'";
  $Guestresult=mysqli_query($conn,$Guestsql);
  $Guestrow=mysqli_fetch_array($Guestresult);
  $Clientsql= "select * from clientlist WHERE slug='$ClientSlug'";
  $Clientresult=mysqli_query($conn,$Clientsql);
  $Clientrow=mysqli_fetch_array($Clientresult);
  $result = $conn->query($Clientsql);
          if(!$result){
            die("Invalid query!");
          }
          if($_GET['answer']){
          $query = "UPDATE $ClientSlug SET attendance = b'1' WHERE slug='$GuestSlug'";
          $execute= $conn1->query($query);
          }else{
            $query1 = "UPDATE $ClientSlug SET attendance = b'0' WHERE slug='$GuestSlug'";
            $execute= $conn1->query($query1);
        }
  
  

}




?>

echo "<script>
             alert('message sent succesfully'); 
             window.history.go(-1);
     </script>";
