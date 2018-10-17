<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname="codetrek_forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(isset($_POST['answer'])){
$question=$_GET['title'];
$answer=$_POST['answer'];

$sql = "INSERT INTO answers(question_id,answer_text,created_at,updated_at) VALUES ($question, '$answer',NOW(),NOW())";

if (mysqli_query($conn, $sql)) {
   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}


   




}
$question=$_GET['title'];
$sql1="SELECT * from answers WHERE question_id=$question";
$result1=mysqli_query($conn, $sql1);
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
            <a class="nav-link" href="index.html" style="color: #aaa">Questions </a>
          </li>

          
        

        
        </ul>

       <ul class="navbar-nav">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
             aria-expanded="false">
              <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <div class="dropdown-item disabled">Mohd Shamoon</div>
            
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
            
            </div>
          </li>
        </ul>
        
       
         
     </div>
      </div>
    </nav>

    <?php  if(isset($_POST['answer'])){
      ?>
      <div class="alert alert-success text-center" role="alert">
  <strong>Success!</strong> You answer has been posted successfully.
</div>
        <?php }
        ?>

<?php
$id=$_GET['title'];
$sql="SELECT * from questions WHERE id=$id";
$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);
?>

     <div class="container mt-5" >
          <h3> <?php  echo $row['Title']; ?></h3> 
          <p class="text-secondary">

            <?php  echo $row['Description']; ?>
          </p>

            <?php $tags=explode(',',$row['Tags']);
               foreach ( $tags as $i) {
                 echo "<span class='badge badge-primary mr-2'>".$i."</span>";
               }
              ?>
           <div class="mt-3"><span style="color: blue">Mohd Shamoon</span> asked on September 27,2018</div>
            <div class="mt-3">
              <span id="likes" >
              <i class="far fa-thumbs-up mr-1" id="likes-no" onclick="like()">14 </i>
            </span>
              <span class="ml-2" id="dislikes">
              <i class="far fa-thumbs-down" onclick="dislike()" id="dislikes-no">18</i> </span>
              <span class="ml-2">
              <i class="far fa-comments pl-1"> <?php echo mysqli_num_rows($result1);?> Answers</i></span>
            </div>

        
<?php while($row1=mysqli_fetch_assoc($result1)){  ?>
         <div class="card shadow-sm mt-5">
          
         <div class="card-body my-3" >
           <div class="mb-3 d-flex flex-wrap align-content-start"><span class="mr-auto"><a href="#" class="card-link">Ritik Kumar</a> <span class="text-secondary"> answered on September 27,2018</span> </span> <span class="badge badge-success badge-pill "><i class="fa fa-check" aria-hidden="true"></i>Correct Answer</span></div>

           <span ><?php echo $row1['answer_text']; ?>
             <br>
         
          
          
        </div>
         </div>
       <?php }  ?>


       

           <div class="card shadow-sm my-4">
          
         <div class="card-body p-4" >
          
<form action="answers.php?title=<?php  echo $row['id']; ?>" method="POST">
 

   <div class="form-group">
   <h3>Your Answer</h3>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" name="answer"></textarea>
  </div>

 
          <button type="submit" onclick="aler()" class="btn btn-primary mt-3" >Post your answer</button>

  </div>


  
  
 
  
</form>


        </div>
         </div>
         

            <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>
        <script type="text/javascript" src="js/main.js"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
  
    <script src="js/bootstrap.min.js"></script>
      </body>
      </html>

