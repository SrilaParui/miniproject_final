<?php
  include "connection.php";
  session_start();
  $id=$_SESSION['id'];
?>

  
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
<script src="https://kit.fontawesome.com/098bd1883a.js" crossorigin="anonymous"></script>
</head>
<body style="background-color: #cfd1d1;">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid" style="text-align: right;">
          <a class="navbar-brand" href="#">TEACHERS' INFORMATION</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Update profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">View profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
        </div>
        </div>
      </nav>
      <div class="homeWelcome" style="text-align: center;
                font-weight: 900;
                font-size: 150%;
                margin:10rem 9rem ;">
        <h1 style="text-align: center;font-weight: 900;font-size: 200%;">Welcome <?php 
          $sql="select f_name,l_name from teacher where email='$id'";
          $result=$conn->query($sql);
          $row=$result->fetch_assoc();
          echo $row['f_name']." ".$row['l_name'];
        ?></h1>
        <p>This is your personal drive you can upload and download any academic related files</p>
        <a href="update.php?id=<?php echo $id;?>">
            <button class="btn btn-secondary"><i class="fas fa-upload"></i>Update Profile</button>
            
        </a>
      </div>
        
</body>
</html>