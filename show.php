<?php include "connect.php"  ?>
<?php
$query="select * from users,10th_quaification,12th_qualification,graduation where user.userid=1 and users.userid=10th_quaification.user_fk";
