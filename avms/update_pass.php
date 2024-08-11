<?php
session_start();
error_reporting(0);
include('includes/dbconnection.php');
$id=$_GET['visitors_id'];

if (strlen($_SESSION['avmsaid']==0)) {
  header('location:logout.php');
  } else{
  

if(isset($_POST['submit']))
{
$passnumber=$_POST['passnumber'];
$categoryName=$_POST['categoryName'];
$VisitorName=$_POST['VisitorName'];
$MobileNumber=$_POST['MobileNumber'];
$Address=$_POST['Address'];
$Apartment=$_POST['Apartment'];
$Floor=$_POST['Floor'];
$fromDate=$_POST['fromDate'];
$toDate=$_POST['toDate'];
$sql="update tblvisitorpass set  passnumber='$passnumber',categoryName='$categoryName' ,VisitorName='$VisitorName',MobileNumber='$MobileNumber',Address='$Address',Apartment='$Apartment',Floor='$Floor',
fromDate='$fromDate',toDate='$toDate' where ID='$id'";
 $query=mysqli_query($con,$sql);

if ($query) 
{
 
             header("location:manage-passes.php");
    
  }


  
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AVSM | Update Pass</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <?php include_once('includes/sidebar.php');?>
   
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <?php include_once('includes/header.php');?>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                          
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <strong>Update Pass</strong>
                                    </div>
                                    <?php

$id=$_GET['visitors_id'];
 $sql="select *from tblvisitorpass where ID='$id'";                                  
$ret=mysqli_query($con,$sql);
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>            
                                    <div class="card-body card-block">
                                        <form action="#" method="post" enctype="multipart/form-data" class="form-horizontal">

                                            <div class="row form-group">
                                                <div class="col col-md-3">
                                                    <label for="number-input" class=" form-control-label">Pass Number</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="number" id="passnumber" name="passnumber" class="form-control"  value="<?php  echo $row['passnumber'];?>" required="true">
                                                    
                                                </div>
                                             
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Category Name</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="categoryName" name="categoryName"  class="form-control"  value="<?php  echo $row['categoryName'];?>" required="true">
                                                    
                                                </div>
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">VisitorName</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="VisitorName" name="VisitorName"  class="form-control"  value="<?php  echo $row['VisitorName'];?>" required="true">
                                                    
                                                </div>
                                                 
                                                <div class="col col-md-3">
                                                    <label for="number-input" class=" form-control-label">MobileNumber</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="number" id="MobileNumber" name="MobileNumber" class="form-control"  value="<?php  echo $row['MobileNumber'];?>" required="true">
                                                    
                                                </div>
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Address</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="Address" name="Address" class="form-control"  value="<?php  echo $row['Address'];?>" required="true">
                                                    
                                                </div>
                                               
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Apartment</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="Apartment" name="Apartment" class="form-control"  value="<?php  echo $row['Apartment'];?>" required="true">
                                                    
                                                </div>
                                                 
                                                <div class="col col-md-3">
                                                    <label for="number-input" class=" form-control-label">Floor</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="number" id="Floor" name="Floor" class="form-control"  value="<?php  echo $row['Floor'];?>" required="true">
                                                    
                                                </div>
                                                
                                                <div class="col col-md-3">
                                                    <label for="text-input" class=" form-control-label">Pass Details</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="text" id="passDetails" name="passDetails" class="form-control"  value="<?php  echo $row['passDetails'];?>" required="true">
                                                    
                                                </div>
                                                   
                                                <div class="col col-md-3">
                                                    <label for="date-input" class=" form-control-label">From Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="date" id="fromDate" name="fromDate" class="form-control"  value="<?php  echo $row['fromDate'];?>" required="true">
                                                    
                                                </div>
                                             
                                                <div class="col col-md-3">
                                                    <label for="date-input" class=" form-control-label">To Date</label>
                                                </div>
                                                <div class="col-12 col-md-9">
                    <input type="date" id="toDate" name="toDate" class="form-control"  value="<?php  echo $row['toDate'];?>" required="true">
                                                    
                                                </div>
                                            </div>
                                            
                                        
                                            
                                          <div class="card-footer">
                                        <p style="text-align: center;"><button type="submit" name="submit" id="submit" class="btn btn-primary btn-sm">Update
                                        </button></p>
                                        
                                    </div>
                                     
                                    
                                        </form>
                                        <?php $cnt=$cnt+1;}?>
                                    </div>
                                   
                                </div>
                             </div>
</body>
<?php include_once('includes/footer.php');?>
   </div> </div>
            </div>
        </div>
</div>
    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

<?php }  ?>