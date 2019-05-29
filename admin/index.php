<?php 
@ob_start();
 session_start();
include "include/admin_header.php"?>    <!--navbar of the admin page  -->
  
  <?php
      
     $result_count_user=mysqli_query($connection,"SELECT count(*) as total from users");
      $data_user=mysqli_fetch_assoc($result_count_user); 
      
      ?>
  <div class="row">
  <div class="col-4">
 
  </div>
  <div class="col-4">
  <h1>Total Registrations:<span  style="color:red;"><?php echo $data_user['total']; ?></span></h1>
  </div>
  <div class="col-4">
   
  </div>
  </div>
  </div>
  </body>
  </html>