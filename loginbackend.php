<?php
// session_start();

include("database.php");

if(isset($_POST['login'])){
    if(!empty($_POST['username']) && !empty($_POST['password']) ){

        $username = $_POST['username'];
        $password = $_POST['password'];

$sql= " SELECT * FROM `loginmaster` WHERE (`email`= '$username' || `mobileNo` = '$username')  
 AND (`password` = '$password') ";
   $q = mysqli_query($conn,$sql);
   if(mysqli_num_rows ($q) > 0)
   {
    while($row = mysqli_fetch_array($q))
    { 
        
         $organizationid= $row['organization_Id'];

        session_start();
        $_SESSION["oid"] = $organizationid;
        $_SESSION["email"] = $username;
        $_SESSION["mobile.no"] = $username;
        

        echo '<script type="text/javascript">window.location.href= "dashboard.php"</script>';  


    }
          
   }else{
    echo"<script>alert(please register yoyrself);</script>";
}
    }
}



//  $result = $q[`organization_Id`];
//  echo $result;
//  exit;
//    $num = mysqli_num_rows($q);
//    if($num>0){
	// $_SESSION['user_name'] = $username;
    // $_SESSION['id'] = $id;
    //  echo '<script type="text/javascript">window.location.href= "dashboard.php"</script>';  

// $sql1="SELECT `organization_Id` FROM `loginmaster` 
// INNER JOIN `programs` ON loginmaster.organization_Id=programs.organization_Id";
// $query = mysqli_query($conn,$sql1);

// $id = mysqli_insert_id($conn);
// session_start();
// $_SESSION['id'] = $id;

// } else{
//     echo"<script>alert(please register yoyrself);</script>";
// }
//     }
// }


?>