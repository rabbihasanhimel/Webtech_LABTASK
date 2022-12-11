<?php 

require_once '../controller/productInfo.php';
$Product = fetchProduct($_GET['id']);


 ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> City Gerden</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./donnerDashboard.php">Dashboard</a>&nbsp;
            
          </td>
        </tr>
      </table>
      <table align="right">
        <tr>
            <td>
              <a href="../../controller/logout.php">Logout</a>
            </td>
        </tr>

    </table>

    </fieldset>
    <!-- .................................Header Close..................... -->


    

    <!-- .................................Main Content..................... -->
    <fieldset>
      <table align="center" width="1000">
        <tr>
          <td>
            <h3>Account</h3>
            <hr>
            <ul>
            <li><a href="./donnerDashboard.php">Dashboard</a></li>
              <li><a href="./viewProfile.php">View profile</a></li>
              <li><a href="./donnerUpdateProfile.php">Update Profile</a></li>
              <li><a href="./donnerChangeProfilePic.php">Change Profile Picture</a></li>
              <li><a href="./donnerChangePassword.php">Change Password</a></li>
              <li><a href="./searchApplicantList.php">Search Castomer List</a></li>
              <li><a href="./donnerDeleteAccount.php">Delete Account</a></li>
              <li><a href="addProduct.php"> Add Employ</a></li>
              <li><a href="showAllProduct.php"> Show all Employ</a></li>
              <li><a href="searchProduct.php"> Search Employ</a></li>
            </ul>
          </td>
          <td>
            <fieldset>
             
            <form action="../controller/updateProduct.php" method="POST" enctype="multipart/form-data">
            <label for="name">Name:</label><br>
            <input value="<?php echo $Product['Name'] ?>" type="text" id="name" name="name"><br>
            <label for="buying">Title:</label><br>
            <input value="<?php echo $Product['buying'] ?>" type="text" id="buying" name="buying"><br>
            <label for="selling">Contract Number:</label><br>
            <input value="<?php echo $Product['selling'] ?>" type="text" id="selling" name="selling"><br>
            <label for="quantity">Selary:</label><br>
            <input value="<?php echo $Product['quantity'] ?>" type="text" id="quantity" name="quantity"><br>
            <input type="hidden" name="id" value="<?php echo $_GET['id'] ?>">
            <input type="submit" name = "updateProduct" value="Update">
            <input type="reset"> 
          </form> 
            </fieldset>
          </td>
        </tr>
      </table>
    </fieldset>
    <!-- .................................Main Content..................... -->
    <!-- .................................Footer Start..................... -->
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

    <!-- .................................Footer Close..................... -->
</body>
</html>











