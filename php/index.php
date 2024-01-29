<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>List of Clients</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Welcome, this is the list of our clients (only we can ses this) </a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
                        
          </ul>
        </div>
      </div>
    </nav>
    <div class="container my-4">
    <table class="table table-sortable">
    <thead>
      <tr>
       <th>ID</th>
        <th>NAME</th>
        <th>EMAIL</th>
        <th>PHONE</th>
        <th>WEDDINGDATE</th>
        <th>INVITETXT</th>        
      </tr>
    </thead>
    <tbody>
      <?php
        include "connection.php";
        $sql = "select * from clientlist";
        $result = $conn->query($sql);
        if(!$result){
          die("Invalid query!");
        }
        while($row=$result->fetch_assoc()){
          echo "
      <tr>
        <td>$row[id]</td>
        <td><a href= 'guestlist.php?id={$row['slug']}'>$row[fullname]</a></td>
        <td>$row[email]</td>
        <td>$row[phone]</td>
        <td>$row[weddingdate]</td>       
        <td>$row[invitetxt]</td>
        
         
      </tr>
      ";
        }
      ?>
    </tbody>
  </table>
      </div>
    
    <!-- script for table sort in js   -->
    <script src="../js/tablesort.js"></script>
    
    <script defer src="index.js"></script>
    <link rel="stylesheet" href="styles.css" />
  
 
    
  
  </body>
</html>
