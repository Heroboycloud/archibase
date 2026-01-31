<?php

include_once "header.php";

?>





<div class="w3-main" style="margin-left:300px;margin-top:43px;">



 <!-- Header -->

 <header class="w3-container" style="padding-top:22px">

    <h5><b><i class="fa fa-dashboard"></i> My Files</b></h5>

  </header>

  
 
  <ul class="w3-ul">
    <?php
$uploads=opendir('uploads/');
$files=[];
while(($ff=readdir($uploads)) !=false){
$files[]= $ff;
}
foreach($files as $upload_file){
echo "<li>$upload_file</li>";

}
    ?>
  
  
</ul>





<?php

include_once "footer.php";

?>