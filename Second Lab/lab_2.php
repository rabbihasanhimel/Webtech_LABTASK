<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: red;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $dobErr = $degreeErr =  $websiteErr = $bloodgroupErr = "";
$name = $email = $gender = $dob = $comment = $website =$degree= $bloodgroup = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = $_POST["name"];
    
    if (!preg_match("/^[A-Za-z 1-9 -]/",$name)) {
      $nameErr = "Atleast two letters, period , dash allowed";
    }
  }
  if(empty($_POST["date"])){
$dobErr = "Date of birth is required";
} else{
  $dob=($_POST["date"]);
}
  
if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = ($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format";
}
  }
  if(empty($_POST["degree"])){
    $degreeErr = "Degree is required";
    } else{
      $degreeErr=($_POST["degree"]);
    }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = $_POST["gender"];
  }

  if (empty($_POST["B"])) {
    $bloodgroupErr = "Bloodgroup is required";
  } else {
    $bloodgroup = $_POST["B"];
  }
}

?>

<h2>PHP Form Validation Example</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
  
Name: <input type="text" name="name" value="<?php echo $name;?>">
  <span class="error">* <?php echo $nameErr;?></span>
  <br><br>


E-mail: <input type="text" name="email" value="<?php echo $email;?>">
  <span class="error">* <?php echo $emailErr;?></span>
  <br><br>


Date of birth: 
<input type="date" name="date">
<span class="error">*  <?php echo $dobErr;?></span>
<br> <br>



  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>


  Degree:
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="SSC") echo $degree;?>">SSC 
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="HSC") echo $degree;?>">HSC
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="BSc") echo $degree;?>">BSc
  <Input type="checkbox" name="Degree"value="<?php if (isset($degree) && $degree=="MSc") echo $degree;?>">MSc
  <span class="error">* <?php echo $degreeErr;?></span>
  <br> <br>

  Bloodgroup:
  <select name="B" id="B">
	<option value=""> Choose a BG </option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A+") echo $Bloodgroup;?>" >A+</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="A-") echo $Bloodgroup;?>" >A-</option>
	<option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B+") echo $Bloodgroup;?>" >B+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="B-") echo $Bloodgroup;?>" >B-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O+") echo $Bloodgroup;?>" >O+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="O-") echo $Bloodgroup;?>" >O-</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB+") echo $Bloodgroup;?>" >AB+</option>
  <option value="<?php if (isset($Bloodgroup) && $Bloodgroup=="AB-") echo $Bloodgroup;?>" >AB-</option>
  
  </select>
  <span class="error">* <?php echo $bloodgroupErr;?></span>

<br> <br>


  <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2> Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>"; 
echo $dob;
echo "<br>";
echo $degree;
echo "<br>"; 
echo $bloodgroup;
?>

</body>
</html>
