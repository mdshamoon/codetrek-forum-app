
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
              <div class="dropdown-item disabled">Vaibhav Rathore</div>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">My Profile</a>
              <a class="dropdown-item" href="#">Settings</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Sign out</a>
            </div>
          </li>
        </ul>
        
       
         
     </div>
      </div>
    </nav>
     <div class="container mt-5" >
          <h3>Ask question</h3> 


             <div class="card shadow-sm">
          
         <div class="card-body p-4" >
          
<form action="thank-you.php" method="POST">
  <div class="form-group">
    <label for="exampleFormControlInput1">Title<sup class="text-danger">*</sup></label>
    <input type="text" class="form-control" id="exampleFormControlInput1" name="title" placeholder="Enter a short and proper title for your description" required>
  </div>

   <div class="form-group">
    <label for="exampleFormControlInput1">Description<sup class="text-danger">*</sup></label>
   <textarea class="form-control" id="exampleFormControlTextarea1" rows="7" placeholder="Enter a detailed description of what problem you're facing and steps to replicate" required name="description"></textarea>
  </div>

  <div class="form-group">
            <label for="tags">Add tags</label>
            <input type="text" class="form-control" placeholder="tag1, tag2, tag3" name="tag">
            <small class="text-secondary">Tags will help others to find your question faster. Add comma separated tags. For ex: <span class="font-weight-light font-italic">codetrek, bootstrap, frontend</span></small>
          </div>
          <button type="submit" onclick="aler()" class="btn btn-primary mt-3">Post your question</button>

  </div>


  
  
 
  
</form>


        </div>
         </div>

         <footer class="bg-light py-3 text-center mt-5">
    <span class="text-primary"><i class="fas fa-code"></i> Developed at CodeTrek Tehri 2018</span>
  </footer>

</div>
<script type="text/javascript" src="js/main.js"></script>

  

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
   
  
    <script src="js/bootstrap.min.js"></script>
</body>

</html>