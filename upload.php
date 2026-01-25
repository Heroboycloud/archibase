<?php


$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file_upload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  // Check if file already exists
if (file_exists($target_file)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["file_upload"]["tmp_name"], $target_file)) {
      echo "The file ". basename( $_FILES["file_upload"]["name"]). " has been uploaded.";
  } else {
      echo "Sorry, there was an error uploading your file.";
  }
}
}

include_once "header.php";


?>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>




<form action="upload.php" method="post" enctype="multipart/form-data" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Upload your file</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="file_upload" type="file" placeholder="Document">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple" name="submit" > Upload </button>
</p>
</form>




<?php
include_once "footer.php";
?>