<?php
include("database.php");

// echo '<pre>';
// print_r($_POST);
// exit;

//  if(isset($_POST['register'])){
 if(!empty($_POST['organization']) ){

 
      $oname= $_POST['organization'];
       
        
        $sql= "INSERT INTO `register` (`orgname`) VALUE ('$oname')";
        $q = mysqli_query($conn,$sql);
     }
//  }
//  if($query){
//     echo "REGISTERED";
//  }
//  else{
//     echo "NOT";
//  }
?>