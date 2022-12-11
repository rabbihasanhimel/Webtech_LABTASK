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
  <title>city Gerden</title>
  <link rel="shortcut icon" href="../assets/icon.png">
</head>
<body>
  <!-- ...............................Header Start....................... -->
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="../assets/imgpsh_fullsize.png" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="../donnerDashboard.php">Dashboard</a>&nbsp;
          
            
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
              <li><a href="himeil22.php"> Search Employ</a></li>
            </ul>
          </td>

          <td>
          <tr>
            <th>Name</th>
            <th>Title</th>
            <th>contract Number</th>
            <th>selary</th>
            <th>Image</th>
          </tr>
          <tr>
            <td><a href="showProduct.php?id=<?php echo $Product['ID'] ?>"><?php echo $Product['Name'] ?></a></td>
            <td><?php echo $Product['buying'] ?></td>
            <td><?php echo $Product['selling'] ?></td>
            <td><?php echo $Product['quantity'] ?></td>
            <td><img width="100px" src="../uploads/<?php echo $Product['image'] ?>" alt="<?php echo $Product['Name'] ?>"></td>
          </tr>


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











