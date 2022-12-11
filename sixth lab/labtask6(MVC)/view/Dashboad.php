<?php
session_start();
?>

<!DOCTYPE html>

<html>
<fieldset>
     
	 <head>
	     <title> DASHBOARD </title>
		 <link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

	 </head>
	     
	 <body>
	 <?php include 'Navvar.php';?>
	    <br>
	
		
		       <h3 align= "right">
		 
			   Logged in as<a style ="color:SlateBlu;"  href= "../view/ViewProfile.php"> <?php  echo $_SESSION["Name"]?>| </a>
		    
		       <a style="color:SlateBlu;" href="../view/Homepage.php"> <i class="bi bi-box-arrow-left"></i> Logout   </a>  
		       
		 
		  
		   </h3>
		   
		  <hr>
		  
		</div> 
		
		<div>
			<fieldset>
		
		  <legend> <h2> <u> Account </u> </h2></legend> <style="color: rgb(255, 255, 255);"> </style><h1 align="center" ><h1/> 
		   
		    
		   
            <h2>
            <ul>
			<i class="bi bi-house-fill"></i>  <a style ="color:SlateBlu;" href="../view/Dashboad.php"> Dashboard  </a>&nbsp;&nbsp;
				 <i class="bi bi-person-circle"></i> <a style ="color:SlateBlu;" href= "../view/ViewProfile.php">View Profile</a> &nbsp;&nbsp;
				 <i class="bi bi-pencil-fill"></i> <a style ="color:SlateBlu;" href="../view/Editprofile.php"> Edit Profile</a>&nbsp;&nbsp;
				
				 <i class="bi bi-key-fill"></i><a style ="color:SlateBlu;" href="../view/Changepass.php">Change Password</a> &nbsp;&nbsp;
                
                 
		     </ul>  
		     </h2>
		   
		  
		   
		     <hr>
	     
		  
		</fieldset>

		<fieldset>

		<legend align="center"><h1  > Welcome  <?php echo $_SESSION["Name"]?> <h1/></legend>
			<span> <p> </p> </span>
		</fieldset>
		
		<div/>
		

		 <?php
       include 'footer.php';
       ?>
	 </body>
	 </fieldset>
</html>	 