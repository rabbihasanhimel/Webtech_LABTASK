<?php
session_start();
?>

<!DOCTYPE html>

<html>
     <fieldset>
	 <head>
	     <title> Profile </title>
		 <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	 </head>
	     
	 <body>
	 
	    <br> 
		

		   
		   <?php include 'Navvar.php';?>
		   
		       <h2 align= "right">
		 
		 
		        Logged in as<a style ="color:SlateBlu;"  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </a>
		       <a style="color:SlateBlu;" href="../view/Homepage.php"><i class="bi bi-box-arrow-left"></i>  Logout </a>  

		   </h2>
		   
		  <hr>
	
	
			
	      <legend><h2> <u> Account </u> </h2> <style="color: rgb(255, 255, 255);"></style ></legend> 
		   
		    
		   
            <h2>
            <ul>
			<i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
                
		     </ul>  
		     </h2>
		 </fieldset><br>
			 
		   <div>
		   
		   
	<fieldset>
		    <legend align="center"><h1> PROFILE </h1></legend>
			
			<h3 align="center">
		    
			<img  src="1.png" height="200px" width="250px"  > </img> <br>
			<a align="right" href=" "> Change </a> <br><br>
			
			
			
		      Name <span style="color: rgb(255, 255, 255);"> </span>:<?php  echo $_SESSION["Name"]?><hr>
	          Email <span style="color: rgb(255, 255, 255);"> </span> : <?php  echo $_SESSION["Email"]?> <hr>
		      Gender<span style="color: rgb(255, 255, 255);"> </span>: <?php  echo $_SESSION["Gender"]?> <hr>
		      

		   
		    <a tyle ="color:SlateBlu;"  href="../view/EditProfile.php"> Edit Profile </a>
			
			</h3>
			</fieldset>
		    </fieldset>
			
		</div>
		</fieldset>
	 </body>		
	  <?php
       include 'footer.php';
       ?>

</html>