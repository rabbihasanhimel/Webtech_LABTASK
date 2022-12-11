<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head><link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title><link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
    
<br>
<?php
       include 'Navvar.php';
       ?>  
      
	       <br>
	       
	       <fieldset>

		  
          <form method="post" action="../Controller/Checkuser.php"> 
		  
		  

          <section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-5">Sign in</h3>

            <div class="form-outline mb-4">
            <label for="username"> UserName : </label> </b>
			   <input type="text" name="username" value="<?php echo $username;?>">
			   <!-- //<span class="error"> * <?php echo $usernameErr; ?> </span> -->
            </div>

            <div class="form-outline mb-4">
            <label for="password"> Password : </label> </b>
                <input type="password" name="password" value="<?php echo $password;?>">
                <!-- <span class="error"> * <?php echo $passwordErr;?></span> -->
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-4">
              <input class="form-check-input" type="checkbox" name="Remember me" /> Remember password </label>
            </div>

            <button class="btn btn-primary btn-lg btn-block" type="submit" name="submit" value="Submit" >Login</button>

            <hr class="my-4">


          </div>
        </div>
      </div>
    </div>
  </div>
</section>







         </form> <br>
           
          <hr>
	     

         </fieldset>
	   <?php
       include 'footer.php';
       ?>

    </body>
  
</html>