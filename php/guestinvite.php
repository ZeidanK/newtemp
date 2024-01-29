<?php
include "connection.php";
$ClientSlug=$_GET['client'];
$GuestSlug=$_GET['guest'];
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
$query = "UPDATE $ClientSlug SET visitcount = visitcount + 1 WHERE slug='$GuestSlug'";
$execute= $conn1->query($query);
?>

<!doctype html>
<html lang="en">  
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>main guest invite</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">مرخبا hello  
        
            <?php 

echo "$Guestrow[fullname]" ;


          ?> </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">

          </ul>
        </div>
      </div>
    </nav>

    <thead>
      <tr>
        
        
        <th>
            
        <?php
echo" $Clientrow[invitetxt]";
echo "<tr>";


echo "</tr>";

?>
        </th>
        
        
       
    <div class="gallery"> 
      
            <!--<img src="source.php?id=1" width="300" height="300" /> -->
            <img src="data:image/jpg;charset=utf8;base64,<?php echo base64_encode($Clientrow['inviteimg']); ?>"width="500" height="500" /> 
      
    </div> 

    
      </tr>
    </thead>