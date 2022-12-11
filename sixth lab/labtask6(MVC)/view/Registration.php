

 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Registration</title>  
    
<link rel="stylesheet" type="text/css" href="style.css"/>  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

      <body>  
      <?php include 'Navvar.php';?>
      </head>  
 <hr>



           <div class="container" >  	<fieldset>
           <legend>REGISTRATION</legend>               
                <form action="../Controller/Adduser.php" method="post" enctype="multipart/form-data"> 
                <fieldset>
                     <br />  
                     <label>Name</label>  
                     <input type="text" name="name" class="form-control" /><br />  
                     <label>E-mail</label>
                     <input type="text" name = "email" class="form-control" /><br />
                     <label>User Name</label>
                     <input type="text" name = "un" class="form-control" /><br />
                     <label>Password</label>
                     <input type="password" name = "pass" class="form-control" /><br />
                     <label>Confirm Password</label>
                     <input type="password" name = "Cpass" class="form-control" /><br />

                    <fieldset>
                    <legend>Gender</legend>
                    <input type="radio" id="male" name="gender" value="male">
                     <label for="male">Male</label>                     
                     <input type="radio" id="female" name="gender" value="female">
                     <label for="female">Female</label>
                     <input type="radio" id="other" name="gender" value="other">
                     <label for="other">Other</label><br>
                     </fieldset><fieldset>
                     <legend>Date of Birth:</legend>
                     <input type="date" name="dob"> <br><br>

                     
                    </fieldset> 
                     
                    <fieldset>
        <legend>  PROFILE PICTURE  </legend>
             <img  src="../Uploads/81tOUsc7.jpg" width="100px" height="100px" title="profile pic"> </img> <br>
        
            <span style="color: rgb(255, 255, 255);">  </span>  
            <input type="file" name="image"><br><br>
            </fieldset>	 
        <div>
         <hr>
         <input type="submit" name="submit" value="Append" class="btn btn-info" /><br /> 
       </div>
    
  
                     
                     
     
                      
                </form> 
                 
                  
           <br />  

           </fieldset></fieldset>
           <?php include 'footer.php';?>
      </body>  
 </html>  