<?php
  session_start();
  $id=$_SESSION['id'];
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE PROFILE</title>
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
                <a class="nav-link active" aria-current="page" href="homee.php">Home</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="details.html">View profile</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Logout</a>
              </li>
            </ul>
        </div>
        </div>
      </nav>

      <!--UPDATE-->
      <section class="vh-100" >
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-9">
      
              
      
              <div class="card shadow-lg p-3 mb-5  " >
                <div class="card-title  "style="text-align:center;" >
                    <h1 class=" headReg  text-back mb-5 "style="color:black;">Update your profile</h1>
                   
                </div>
                
                <form action="upload.php" id="signup" method="POST" enctype="multipart/form-data">
                  <label for="Paper Name" >Paper Name</label>
                  <input type="text" name="paper_name">
                  <input class="form-control form-control-lg" id="paper" name="paper" type="file" />
                  <input type="submit">
                  <input type="hidden" name="id"  value="<?php echo $id ;?>" >
                </form>
                <a href="test.php?id=<?php echo $id ;?>"> VIEW PAPER</a>
              </div>
      
            </div>
          </div>
        </div>
      </section>
      
</body>
</html>
