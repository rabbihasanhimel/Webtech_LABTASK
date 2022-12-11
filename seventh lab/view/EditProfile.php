<?php
session_start();
?>

<!DOCTYPE HTML>  
<html>
<fieldset>
  <head> <title>  Edit Profile </title>
    <style>
     .error {color: #FF0000;}
    </style>

<style>

div a:hover{

background: yellow;

color:black;

}

</style>

 
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="style.css"/> 
    </head>
    <body>  <?php include 'Navvar.php';?> 
    <br> 
		
        <div> 
        
            <h2 align= "right">
      
      
             Logged in as<a style ="color:SlateBlu;"  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </a>
            <a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i> Logout </a>  
            
      
       
        </h2>
        
       <hr>
       
     </div> 
         <fieldset><fieldset>
         
       <legend><h2> <u> Account </u> </h2> </legend> 
        
         
        
         <h2>
         <ul>
         <i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
                
          </ul>  
          </h2></fieldset>
      </fieldset><br>
	   

    
	  
	  
      
          <form method="post" action="../Controller/Edit.php"> 
		  <fieldset>
		  
		       <legend align="center"><h1> EDIT PROFILE </h1></legend>
		       <p align="center">
		  
		       <b> <p align="center" <label for="name"> Name : </label> </b> 
			   <input type="text" name="name" value="<?php  echo $_SESSION["Name"]?>"> 
			   
               <hr>
			  
			    <b> <p align="center" <label for="email"> Email : </label> </b>
                <input type="text" name="email" value="<?php  echo $_SESSION["Email"]?>">
                
                <hr>

		        <b> <p align="center" <label for="gender"> Gender : </label></b>
                <input type="radio" name="gender" value="female"> Female
                <input type="radio" name="gender" value="male"> Male
                <input type="radio" name="gender" value="other"> Other  
               
                <hr>

                 <h3 align="center"><input type="submit" name="submit" value="Submit"> </h3>
				  <hr>

                 </p>

				</fieldset>
                </form> <br>

               
                </fieldset>
   <?php include 'footer.php';?> 
   </body>
</html>