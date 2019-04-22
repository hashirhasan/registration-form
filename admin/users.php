<?php include "include/admin_header.php" ?>
   
<!--            <div class="row">-->
              
<!--                <div class="col-12">-->
               <?php  
                    
                    if(isset($_GET['source']))
                    {
                        
                        $source=$_GET['source'];
                
                    }else
                    {
                        $source="";
                    }
                    switch($source)
                    {
                     
                            
                             case 'view_more':
                            include"include/view_more.php";           // used for editing the details of users by admin
                            break;
                            
                        default:
                            include"include/view users.php";            //used for viewing the details of users
                                break;
                      }
                    
                    ?>
                
<!--                 </div>-->
                <!-- <div class="col-5"></div> -->
<!--             </div>-->
    </div>
    </div>
</body>
</html>