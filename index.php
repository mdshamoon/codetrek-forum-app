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
            <a class="nav-link" href="index.php" style="color: #aaa">Questions </a>
          </li>

          
        

        
        </ul>

       <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item " href="profile.php">Mohd Shamoon</a>
            
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
            
            </div>
          </li>
        </ul>
        
       
         
     </div>
      </div>
    </nav>


  <div class="container mt-5" >
    <div class="d-flex justify-content-between flex-column flex-md-row mb-3">
          <h3 class=""> Questions</h3> 
          <form class="form-inline my-2 my-lg-0 float-right" action="index.php" method="POST">
          <input class="form-control " type="text" placeholder="Search " aria-label="Search" style="width: 50%" name="search">
          <button class="btn btn-primary mr-2"><i class="fas fa-search "></i></button>
       
          <a class="btn btn-outline-primary my-2 my-sm-0" href="new-question.php">Ask Questions</a>
         
        </form>
        
        </div>
     

      <?php  
      if (isset($_POST['search'])){
      $search=$_POST['search'];
      
      }
      else
      {
        $search="";
      }


       $sql="Select * from questions";
     $result=mysqli_query($conn,$sql);

// Associative array
while($row=mysqli_fetch_assoc($result)){

      if($search!="")
      {
        
        $pos=stripos($row['Title'], $search);
        
          if($pos!==false)
          {


       

       ?>
        <div class="card mb-4 shadow-sm">
          <div class="card-body">
        
           <h5>
            <?php  echo $row['Title']; ?></h5>
             <span style="color: #666"> <?php  echo $row['Description']; ?></span>

              <br>


              <?php $tags=explode(',',$row['Tags']);
               foreach ( $tags as $i) {
                 echo "<span class='badge badge-primary mr-2'>".$i."</span>";
               }
              ?>
         
           <div class="mt-3"><a href="#" class="card-link">Mohd Shamoon</a> asked on <?php echo $row['created_at']; ?> </div>
            <div class="mt-3"><i class="far fa-thumbs-up mr-1"><?php echo $row['likes']; ?> </i><i class="far fa-thumbs-down mr-2"></i>18 <i class="far fa-comments pl-1"> 18 Answers</i></div>
             </div>
        
         </div>

       <?php
          }
      }

      else{
         ?>

          <div class="card mb-4 shadow-sm">
          <div class="card-body">
        
           <h5><a href="answers.php?title=<?php  echo $row['id']; ?>" class="text-dark">
            <?php  echo $row['Title']; ?></a></h5>
             <span style="color: #666"> <?php  echo $row['Description']; ?></span>

              <br>


              <?php $tags=explode(',',$row['Tags']);
               foreach ( $tags as $i) {
                 echo "<span class='badge badge-primary mr-2'>".$i."</span>";
               }
              ?>
          <!--  <span class="badge badge-primary">Git</span>
           <span class="badge badge-primary">Github</span>
           <span class="badge badge-primary">Vcs</span> -->
            <div class="mt-3"><a href="#" class="card-link">Mohd Shamoon</a> asked on <?php echo $row['created_at']; ?> </div>
            <div class="mt-3"><i class="far fa-thumbs-up mr-3"><?php echo $row['likes']; ?> </i><i class="far fa-thumbs-down mr-2"><?php echo $row['dislikes']; ?></i>  <i class="far fa-comments pl-1"> 18 Answers</i></div>
             </div>
         </div>

<?php
      }

       }
      ?>
       
         
           

       


       


<footer class="text-center py-3 mt-5" style="color:blue;background-color: #eee"><i class="fas fa-code"></i>Developed at Codetrek, New Tehri</footer>

  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
  
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
