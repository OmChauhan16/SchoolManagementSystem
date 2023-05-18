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
        
$sql1 = "INSERT INTO `organization` (`contactName`,`name`,`phoneNumber`
,`email`,`password`,`createdDate`,`modifiedDate`) VALUES ('$admin','$oname','$phone','$email',
'$pass',NOW(),NOW())";
         $q1 = mysqli_query($conn,$sql1);


$sql2 = "INSERT INTO `loginmaster` (`mobileNo`,`email`,`password`,`organization_Id`,`createDate`,`modifiedDate`)
VALUES ('$phone','$email','$pass','',NOW(),now()) ";
   $q2 = mysqli_query($conn,$sql2);

     }
  }
//  if($query){
//     echo "REGISTERED";
//  }
//  else{
//     echo "NOT";
//  }
?>