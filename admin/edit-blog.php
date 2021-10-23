<?php session_start();
include('../includes/dbconfig.php');
$errors = "";
$input_err = "";
$status = "";
$username = "";
$pwd = "";
function test_input($data)
{
    include("../includes/dbconfig.php");
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);
    return $data;
}   
//* Blog update scripts */
if (isset($_POST['update'])) {
    if (empty($_POST["title"])) {
      $title = "";
      $input_err = "* This field is required";
    } else {
      $title = test_input($_POST['title']);
    }
  
    if (empty($_POST["body"])) {
      $body = "";
      $input_err = "* This field is required";
    } else {
      $body = test_input($_POST['body']);
    }
    if (empty($_POST["sn"])) {
        $sn = "";
        $input_err = "* This field is required";
      } else {
        $sn = test_input($_POST['sn']);
      }
  
    $imagename = "";
    $uploadedFiles = "";
    $extension = array("jpeg", "jpg", "png", "gif", "jfif", "JPEG", "JPG", "PNG","GIF", "JFIF");
    $bytes = 1024;
    $KB = 1024;
    $totalBytes = $bytes * $KB;
    $UploadFolder = "../images";
  
    foreach(($_FILES["image"]["tmp_name"]) as $key => $tmp_name) {
        $temp = $_FILES["image"]["tmp_name"][$key];
        $name = $_FILES["image"]["name"][$key];
    
        if (empty($temp)) {
          break;
        }
    
        //$counter++;
        $UploadOk = true;
    
        if ($_FILES["image"]["size"][$key] > $totalBytes) {
          $UploadOk = false;
          $errors .= $name . " file size is larger than 1 MB.";
        }
    
        $ext = pathinfo($name, PATHINFO_EXTENSION);
        if (in_array($ext, $extension) == false) {
          $UploadOk = false;
          $errors .= $name . " is invalid file type.";
        }
    
        if (file_exists($UploadFolder . "/" . $name) == true) {
          $UploadOk = false;
          $errors .= $name . " file is already exist.";
        }
        if ($UploadOk == true) {
          $imagename .= $name;
          move_uploaded_file($temp, $UploadFolder . "/" . $name);
          //array_push($uploadedFiles, $name);
        }
      }
    
    $date = date("Y-m-d H:i:s"); 
    $picture = $imagename;
  
    if ($input_err == "") {
      $update = mysqli_query($conn, "UPDATE blog
                  SET title='$title', body='$body', picture='$picture', date_updated='$date'
                  WHERE sn='$sn'");
      if ($update) {
        $status .= '<div class="alert alert-success">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Blog was updated successfully!</strong>
      </div>';
      //header('Location: "viewblog.php"');
      } else {
        $status .= '<div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Unable update blog into the database currently, please try again later.</strong>
      </div>';
      }
    } else {
      $status .= '<div class="alert alert-danger">
      <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
      <strong>Unable update blog, some field(s) are empty.</strong>
  </div>';
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Uniek - Edit Blog Posts</title>
    <link rel="icon" type="image/png" href="../images/icons/favicon2.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css" />
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/libs/css/style.css" />
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css" />
    <style>
        .red {
            color: red;
        }
    </style>

</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <!-- ============================================================== -->
        <!-- navbar -->
        <!-- ============================================================== -->
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="index.php"><img src="../images/icons/uniek.png" alt="IMG-LOGO" width="60"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                        <!-- <li class="nav-item">
                            <div id="custom-search" class="top-search-bar">
                                <input class="form-control" type="text" placeholder="Search..">
                            </div>
                        </li> -->
                        <li class="nav-item dropdown notification">
                            <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                            <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                <li>
                                    <div class="notification-title"> Notification</div>
                                    <div class="notification-list">
                                        <div class="list-group">
                                            <a href="#" class="list-group-item list-group-item-action active">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-2.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-3.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                        <div class="notification-date">2 days ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-4.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                            <a href="#" class="list-group-item list-group-item-action">
                                                <div class="notification-info">
                                                    <div class="notification-list-user-img"><img src="assets/images/avatar-5.jpg" alt="" class="user-avatar-md rounded-circle"></div>
                                                    <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                        <div class="notification-date">2 min ago</div>
                                                    </div>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="list-footer"> <a href="#">View all notifications</a></div>
                                </li>
                            </ul>
                        </li>
                        
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/<?php echo $_SESSION['image']; ?>" alt="image" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name"><?php echo $_SESSION['username']; ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                                <a class="dropdown-item" href="change-password.php?id= <?php echo $_SESSION['id']; ?>"><i class="fas fa-lock mr-2"></i>Change Password</a>
                                <a class="dropdown-item" href="../logout.php"><i class="fas fa-sign-out-alt mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <!-- ============================================================== -->
        <!-- end navbar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- left sidebar -->
        <!-- ============================================================== -->
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link " href="index.php"><i class="fa fa-fw fa-tachometer-alt"></i>Dashboard</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link active" href="add_product.php"><i class=" fas fa-upload"></i>Add Product</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="all_products.php"><i class=" fas fa-upload"></i>All Products</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="orders.php"><i class="fas fa-shopping-basket"></i>All Orders</a>
                            </li>

                            <li class="nav-item ">
                                <a class="nav-link" href="transactions.php"><i class="fas fa-exchange-alt"></i>Transactions</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="customers.php"><i class="fa fa-fw fa-users"></i>Customers</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="blog.php"><i class="fa fa-fw fa-users"></i>Add Blog Post</a>
                            </li>
                            <li class="nav-item ">
                                <a class="nav-link" href="viewblog.php"><i class="fa fa-fw fa-users"></i>View Blog Posts</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end left sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- wrapper  -->
        <!-- ============================================================== -->
        <div class="dashboard-wrapper">
            <div class="container-fluid dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Editing Blog Posts</h2>
                            <p class="pageheader-text">
                                Editing an existing blog posts
                            </p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item">
                                            <a href="index.php" class="breadcrumb-link">Dashboard</a>
                                        </li>
                                        <li class="breadcrumb-item">
                                            <a href="#" class="breadcrumb-link">Edit Blog Post</a>
                                        </li>

                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
               
                <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">Blog Post Upload</h5>
                    <div class="card-body">
                    <?php echo $status;
                    ?>
                    
                    <form method="POST" action="#" enctype="multipart/form-data">
                    <?php
                                    if (isset($_POST['edit_blog'])) {
                                        $blog_id = test_input($_POST['blog_id']);
                                        $fetch = mysqli_query($conn, "SELECT * FROM blog WHERE sn='$blog_id'");
                                        if (mysqli_num_rows($fetch) == 1) {
                                            $row = mysqli_fetch_assoc($fetch);
                                            //echo $row['title'];
                                    ?>
                                    
                        <div class="form-row">
                        <input hidden id="inputText3" type="text" name="sn" class="form-control" value="<?php echo $blog_id; ?>">
                            <div class="form-group col-6">
                                <label for="inputText3" class="col-form-label">Blog Title</label>
                                <input id="inputText3" type="text" name="title" class="form-control" value="<?php echo $row['title']; ?>">
                                <?php echo "<div class='red'> $input_err</div>" ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Blog Post</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" name="body" rows="4"><?php echo $row['body']; ?></textarea>
                            <?php echo "<div class='red'> $input_err</div>" ?>
                        </div>

                        <div class="custom-file mt-3 mb-3">
                            <input type="file" accept="" class="custom-file-input" id="customFile" name="image[]" multiple>
                            <label class="custom-file-label" for="customFile">Blog Image</label>
                            <?php echo "<div class='red'> $errors</div>" ?>
                        </div>
                        <?php
                                        }
                                    }
                                    ?>
                        <hr>
                        <button type="submit" name="update" class="btn btn-primary btn-block">Update Blog Post</button>
                    </form>
                </div>
            </div>
        </div>  
            </div>
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12" style="text-align:center;">
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Developer
                            07082614612, 08068869769</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end main wrapper -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
</body>

</html>