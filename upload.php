<?php
include_once "header.php";
?>


<div class="w3-main" style="margin-left:300px;margin-top:43px;">

 <!-- Header -->
 <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>




<form action="" class="w3-container w3-card-4 w3-light-grey w3-text-blue w3-margin">
<h2 class="w3-center">Upload your file</h2>
 
<div class="w3-row w3-section">
  <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
    <div class="w3-rest">
      <input class="w3-input w3-border" name="first" type="file" placeholder="Document">
    </div>
</div>

<p class="w3-center">
<button class="w3-button w3-section w3-blue w3-ripple"> Upload </button>
</p>
</form>




<?php
include_once "footer.php";
?>