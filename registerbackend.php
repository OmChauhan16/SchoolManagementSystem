<?php
include("database.php");


 if(isset($_POST['register'])){
 if(!empty($_POST['organization']) && !empty($_POST['admin']) && !empty($_POST['email'])
 && !empty($_POST['phone']) && !empty($_POST['pass']) )
 {

 
      $oname= $_POST['organization'];
      $admin = $_POST['admin'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $pass = $_POST['pass'];

      $sql="SELECT `email` FROM `organization` WHERE `email` = '$email' ";
      $qy = mysqli_query($conn,$sql); 

      if(mysqli_num_rows($qy)>0){
      echo ("email already exists");
      }

   else{
    $cdate = date('Y-m-d H:i:s');
    $mdate = date('Y-m-d H:i:s');
    
    $sql1 = "INSERT INTO `organization` (`contactName`,`name`,`phoneNumber`
    ,`email`,`password`,`createdDate`,`modifiedDate`) VALUES ('$admin','$oname','$phone','$email',
    '$pass','$cdate','$mdate') ";
            $q1 = mysqli_query($conn,$sql1);

           
            session_start();
            $last_id = mysqli_insert_id($conn);

            $_SESSION['id'] = $last_id;
            
           
        
    $sql2 = "INSERT INTO `loginmaster` (`mobileNo`,`email`,`password`,`organization_Id`,`createDate`,`modifiedDate`)
    VALUES ('$phone','$email','$pass','$last_id','$cdate','$mdate' )";
       $q2 = mysqli_query($conn,$sql2);   
       
      
         echo '<script type="text/javascript">window.location.href= "login.php"</script>';  

       }
       }
     }
   

?>