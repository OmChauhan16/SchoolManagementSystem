<?php
include("database.php");

// INSERT INTO PROGRAM

 if(isset($_POST['add'])){
   
   if(!empty($_POST['program'])){
      $program = $_POST['program'];
      $cdate = date('Y-m-d H:i:s');
      $mdate = date('Y-m-d H:i:s');
      session_start();

      $OId = $_SESSION['oid'];

 $sql1= "SELECT `program_Name` FROM `programs` WHERE `program_Name` = '$program' ";
 $q= mysqli_query($conn,$sql1);
 if(mysqli_num_rows($q)>0){
   echo ("Program name already exists");
 }    
 else{ 
  
$sql= "INSERT INTO `programs` (`program_Name`,`created_Date`,`modified_Date`,`organization_Id`)
VALUES('$program','$cdate','$mdate','$OId')";
        
         $query = mysqli_query($conn,$sql);
        
         // session_start();
         $Pid = mysqli_insert_id($conn);

          $_SESSION['pid'] = $Pid;
         
        }
        
   }
   else{
         echo"Please write program name";
        }
   
 }
 else{
      echo"no";
   }



   
// include("database.php");



   // INSERT INTO CLASS



// Change Password

// if(isset($_POST['save'])){
//    if(!empty($_POST['password']) && (!empty($_POST['newpassword'])) && (!empty($_POST['confpassword']))){

//       $password= $_POST['password'];
//       $newpassword = $_POST['newpassword'];
//       $confpassword = $_POST['confpassword'];

//       $sql = "SELECT `password` FROM `organization` "
   
//    }
// }


?>