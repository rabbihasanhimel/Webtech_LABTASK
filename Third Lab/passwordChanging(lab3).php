<!DOCTYPE HTML>  
<html>
<head>
<style>
</style>
</head>
<body>

<font color= "#800080"><center>
<h2>Change password</h2></font></center>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
<h4>Current Password    :         <input type="password" name="pass1" value="">(Ex.: abc@1234)<br>
<h4 style="color:green">New Password      :  <input type="password" name="pass2" value=""><br>
<h4 style="color:red">Retype New Password : <input type="password" name="pass3" value="">
<br><br><center><input type="submit" name="submit" value="Submit">  <br><br></center>

</form>

<?php
$currpass="abc@1234";
$newpass=$retypepass="";

if(isset($_POST['submit'])){
   
    $newpass=$_POST["pass2"];
    $retypepass=$_POST["pass3"];


if($currpass==$newpass){
    echo" you cant set your previous password as new password ";
}
else if($newpass!=$retypepass){
    echo" retyped password should be same as new password ";

}
else if($currpass!=$newpass&&$newpass==$retypepass){
    echo "password changed";
}
}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


?>
</body>
</html>
