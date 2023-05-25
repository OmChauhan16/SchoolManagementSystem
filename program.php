<?php
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
        <link href="styles.css" rel="stylesheet"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

</head>
<body>

<body class="sb-nav-fixed">
        <nav class="sb-topnav shadow-lg p-3 mb-5  navbar navbar-expand navbar-dark bg-primary">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">UBISCHOOL</a>
            <!-- Sidebar Toggle-->
            <h5 class="text-white">Program</h5>
            
            <!-- Navbar-->
            <div style="margin-left:800px;">
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown ">
                    <a class="nav-link dropdown-toggle text-white  " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-bars"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Change Paswword</a></li>
                        <li><a class="dropdown-item" href="#!">Profile</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
            </div>
        </nav>
        
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-primary" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <a class="nav-link " href="">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                                Settings
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link" href="http://localhost/Ubischool/program.php">Program</a>
                                    <a class="nav-link" href="http://localhost/Ubischool/class.php">Class</a>
                                    <a class="nav-link" href="http://localhost/Ubischool/shift.php">Shift</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Department</a>
                                    <a class="nav-link" href="layout-sidenav-light.html">Designation</a>


                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                                <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                Staff
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth">
                                        Authentication
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseAuth" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="login.html">Login</a>
                                            <a class="nav-link" href="register.html">Register</a>
                                            <a class="nav-link" href="password.html">Forgot Password</a>
                                        </nav>
                                    </div>
                                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#pagesCollapseError" aria-expanded="false" aria-controls="pagesCollapseError">
                                        Error
                                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                                    </a>
                                    <div class="collapse" id="pagesCollapseError" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordionPages">
                                        <nav class="sb-sidenav-menu-nested nav">
                                            <a class="nav-link" href="401.html">401 Page</a>
                                            <a class="nav-link" href="404.html">404 Page</a>
                                            <a class="nav-link" href="500.html">500 Page</a>
                                        </nav>
                                    </div>
                                </nav>
                            </div>
                            <a class="nav-link" href="charts.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                                Student
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Guardian
                            </a>
                            <a class="nav-link" href="tables.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                                Holiday
                            </a>
                            
                        </div>
                        
                    </div>
</nav>
        </div>
       


        <div id="layoutSidenav_content">
                <main>
                <div class="d-flex justify-content-end mt-5  login_container">
				 	<button type="button" name="button" id="filter" class="btn  btn-warning ">
                     <li style="list-style-type: none;" class="nav-item dropdown ">
                    <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Active</a></li>
                        <li><a class="dropdown-item" href="#!">Inactive</a></li>
                    </ul>
                </li>
                <a class=" dropdown-toggle text-warning  " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"></a>
<i class="fa-solid fa-filter"></i>Filter</button>
                     <button type="button" class="btn btn-danger mx-4" data-bs-toggle="modal" data-bs-target="#myModal"><i class="fa-solid fa-plus"></i>
  Add
</button>   
                </div> 
                               
                      <div class="container-fluid px-5">
                        
                        <div class="card mb-4 mt-5">
                            
                           
                                <table class="table table-striped text-center" id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>Program Id</th>
                                             <th>Program Name</th>
                                            <th>Program Create Date</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody id="display">

                                    </tbody>
</div>
</div>            
                                    
</main>
</div>
        
<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header ">
        <h4 class="modal-title ">Add Program</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body d-flex justify-content-center">
        <input type="text" name="" id="program" placeholder="Program Name">
      </div>

      <div class="d-flex justify-content-center">
        <button type="button" id="add" class="btn btn-warning mx-4">Save </button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>

      </div>
 
      <!-- Modal footer -->
      <div class="modal-footer">
      </div>

    </div>
  </div>
</div>


        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/scripts.js"></script> -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <!-- <script src="assets/demo/chart-area-demo.js"></script> -->
        <!-- <script src="assets/demo/chart-bar-demo.js"></script> -->
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <!-- <script src="js/datatables-simple-demo.js"></script> -->
   
        

<script>

 $(document).ready(function(){

           
  $("#add").click(function(){
      var program = $("#program").val();
      var add = $("#add").val();
      $.ajax({
       url:"backend.php",
       type:"POST",
       data:{
      program:program, 
      add:add
  },
  success:function(data){
     console.log(data);
  }
  
      });
  
  })
 });

</script>


<?php
include("database.php");


 $retval = mysqli_query($conn,"SELECT * FROM programs" );
 
    while($row = mysqli_fetch_assoc($retval)) 
    {
       $sql= "SELECT * FROM `programs`";
       $query = mysqli_query($conn, $sql);
      
         echo"<tr>";
         echo"<td>".$row['id']."</td>";
         echo"<td>".$row['program_Name']."</td>";
         echo"<td>".$row['created_Date']."</td>";
         echo"<td>".$row['status']."</td>";
         echo"<td>".'<div class="dropdown">
         <li style="list-style-type:none;" class="nav-item dropdown ">
         <a class="nav-link " id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-ellipsis-vertical"></i></a>
         <ul class="dropdown-menu dropdown-menu-end " aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#!">Edit</a></li>
            <li><a class="dropdown-item" href="#!">Delete</a></li>
       
        </ul>
        </li>
       </div>'."</td>";
         echo"</tr>";
    }
?>

</body>
</html>