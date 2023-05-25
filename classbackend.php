<?php
session_start();
include("database.php");

//program dropdown

if(isset($_POST['program']))
{
    $program='';
    $sql = "SELECT * FROM `programs`";
    $query = mysqli_query($conn,$sql);
    $result=mysqli_num_rows($query);

    while($row=mysqli_fetch_array($query))
    {
        $program.='<option value="'.$row['id'].'">'.$row['program_Name'].'</option>';  
    }  
    
    echo $program;
}

// INSERT INTO CLASS


    if(isset($_POST['add'])){
   
        if(!empty($_POST['clas'])){
           $clas = $_POST['clas'];
           $cdate = date('Y-m-d');
           $mdate = date('Y-m-d');
           $oid = $_SESSION['oid'];
           $pid = $_POST['program'];

 
       $sql1= "SELECT `name` FROM `class_master` WHERE `name` = '$clas' ";
       $qy= mysqli_query($conn,$sql1);
       if(mysqli_num_rows($qy)>0){
         echo"Class name already exists";
       }    
       else{ 
       
     $sql= "INSERT INTO `class_master` (`name`,`programId`,`organizationId`,`created_date`,`modified_date`)
     VALUES('$clas','$pid','$oid','$cdate','$mdate')";
             
              $query = mysqli_query($conn,$sql);
  
             }
          }
        }




 
//    }
//    else{
//          echo"Please write class name";
//         }
   
//  }
//  else{
//       echo"no";
//    }
?>