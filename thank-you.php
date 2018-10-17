<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="codetrek_forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$title=$_POST['title'];
$description=$_POST['description'];
$tags=$_POST['tag'];
$timestamp=time();
$create=date("F d, Y",$timestamp);
$sql = "INSERT INTO questions(Title,Description,Tags,created_at,updated_at) VALUES ('$title', '$description','$tags','$create','15 october')";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <title>Codetrek</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    
  </head>

  <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark sticky-top">
          <div class="container">
      <a class="navbar-brand " href="index.php" >CODETREK FORUM </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link" href="questions.html" style="color: #aaa">Questions </a>
          </li>

          
        

        
        </ul>

       <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item">Mohd Shamoon</a>
            
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
            
            </div>
          </li>
        </ul>
        
       
         
     </div>
      </div>
    </nav>

<div class="container mt-5">
<div class="alert alert-success text-center" role="alert">
  <h4 class="alert-heading text-center">Thank you for Posting a question</h4>
  <p class="text-center">Its difficulty level is high<br>
   <a href="new-question.php">Click For another question</a>

  </p>
  <h4>Title:</h4>
  <p>
  <?php
  echo $title;
  ?></p>
  <h4>Description:</h4>
  <p>
  <?php
  echo $description;
  ?></p>

  <h4>Tags:</h4>
  <p>
  <?php
  echo $tags;
  ?></p>
 
</div>

</div>




         <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>

</body>
</html>