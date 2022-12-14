<?php
$target_dir = "ImageUploadCenter/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

if (file_exists($target_file)) {
  echo "Error!, file already exists.";
  $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] > 4100000) {
  echo "Error!, your file is too large.";
  $uploadOk = 0;
}
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" ) {
  echo "Error!, only JPG, JPEG, PNG files are allowed.";
  $uploadOk = 0;
}
if ($uploadOk == 0) {
  echo "Error!, your file was not uploaded.";
}
 else
 {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<br><br>The file name : (". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). ") has been uploaded.";
  } else {
    echo "Error!, there was an error uploading your file.";
  }
}
?>