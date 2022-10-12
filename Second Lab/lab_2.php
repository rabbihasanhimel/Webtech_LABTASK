<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = "";
$name = $email = $gender =$degree= $comment = $dob= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } 
  else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace

    if (!preg_match("/^[a-zA-Z-' '-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Invalid email format";
    }
  }
  if(empty($_POST["dob_dd"]) || empty($_POST["dob_mm"]) || empty($_POST["dob_yyyy"])) {
    $dobErr = "Date of birth should not be empty!\n";
  } else if (!checkdate($_POST["dob_mm"], $_POST["dob_dd"], $_POST["dob_yyyy"])) {
    $dobErr = "Please enter valid date of birth!";
  } else {
    $dob = $_POST['dob_dd'] . "-"  . $_POST['dob_mm'] . "-" . $_POST['dob_yyyy'];
  }


  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
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
  
  Gender:
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other  
  <span class="error">* <?php echo $genderErr;?></span>
  <br><br>
 

 Degree:

  <input type="checkbox" name="test1" value="value1"> SSC
  <input type="checkbox" name="test2" value="value2"> HSC
  <input type="checkbox" name="test1" value="value1"> BSc
  <input type="checkbox" name="test2" value="value2"> MSc
<br><br>

<label>
Date of Birth<br>

<input type="text" placeholder="day" name="dob_dd" /> /
<input type="text" placeholder="month" name="dob_mm" /> /
 <input type="text" placeholder="year" name="dob_yyyy" />
<span class="red">* <?php echo $dob;?></span>
 <br /> </label>


<br><br>
Blood Group:

<select name="bg" id="bg" value ="<?php echo $bg;?>">
<option value="B+">B+</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B-">B-</option>
<option value="AB+">AB+</option>
<option value="AB-">AB-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
</select><br><br>
<input type="submit" name="submit" value="Submit">  <br><br>
<?php
echo "<h2>Output:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo "<br";
echo $gender;
echo "<br>";
echo $degree;
echo "<br>";
echo $dob;

?>

</body>
</html>