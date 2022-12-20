<?php
ob_start();
include"includes/functions.php";  ?>

<?php


session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');

  ob_end_flush();

  } else{

    if(isset($_POST['add-about'])){
        $post_image        = $_FILES['aboutimage']['name'];
        $post_image_temp   = $_FILES['aboutimage']['tmp_name'];

        move_uploaded_file($post_image_temp, "./images/gallery/$post_image");
        if($post_image==""){
            echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
        }else{
                $query = "INSERT INTO gallery(img) " ;
                $query.= "VALUE('{$post_image}' ) " ;
            
                $create_about_query = mysqli_query($con, $query);
            
                        if(!$create_about_query){
                            die('QUERY FAILED'.mysqli_error($con));
                        }
                        echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
            }   
    } 

    if(isset($_GET['delete'])){
        $gallery_id = $_GET['delete'];
    
        $query = "DELETE FROM gallery WHERE id = {$gallery_id}";
        $delete_query = mysqli_query($con, $query);
        echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
    }


    if(isset($_POST['add-video'])){
        $post_video = $_POST['video'];
    
        if($post_video==""){
            echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
        }else{
                $query = "INSERT INTO video(video) " ;
                $query.= "VALUE('{$post_video}' ) " ;
            
                $create_about_query = mysqli_query($con, $query);
            
                        if(!$create_about_query){
                            die('QUERY FAILED'.mysqli_error($con));
                        }
                        echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
        }   
    } 


    if(isset($_GET['deleteone'])){
        $video_id = $_GET['deleteone'];
    
        $query = "DELETE FROM video WHERE id = {$video_id}";
        $delete_query = mysqli_query($con, $query);
        echo "<script type='text/javascript'> document.location = 'gallery.php'; </script>";
    }

   ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title> futuristicltd Home </title>
    <!-- HTML5 Shim and Respond.js IE9 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
      <!-- Meta -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="CodedThemes">
      <meta name="keywords" content=" Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
      <meta name="author" content="CodedThemes">
      <!-- Favicon icon -->
      <!-- <link rel="icon" href="assets/images/favicon.ico" type="image/x-icon"> -->
      <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600" rel="stylesheet">
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="../assets/icon/themify-icons/themify-icons.css">
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="../assets/icon/icofont/css/icofont.css">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
      <link rel="stylesheet" type="text/css" href="../assets/css/jquery.mCustomScrollbar.css">

  </head>

  <body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">

                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

        <?php 
    $adminid=$_SESSION['adminid'];
    $query=mysqli_query($con,"SELECT * FROM admin WHERE id='$adminid'");
    while($result=mysqli_fetch_array($query))
    {           
        $_SESSION['id']= $result['id'];
        $_SESSION['username']= $result['username'];
        $_SESSION['password']= $result['password'];

             } 
        ?>







<!-- navigation start from here -->
<?php include_once('includes/navbar.php');?>

<!-- navigation ends here -->


<!-- side bar start -->
<?php include_once('includes/sidebar.php');?>

<!-- end of side bar -->


<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">



                            <!-- scope -->

                            </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->

                        <!-- scope -->


                        
<div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header card">
                                        <div class="row align-items-end">
                                            <div class="col-lg-8">
                                                <div class="page-header-title">
                                                    <i class="icofont icofont-table bg-c-blue"></i>
                                                    <div class="d-inline">
                                                        <h4>Gallery</h4>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="page-header-breadcrumb">
                                                   <ul class="breadcrumb-title">
                                                    <li class="breadcrumb-item">
                                                        <a href="dashboard.php">
                                                            <i class="icofont icofont-home"></i>
                                                        </a>
                                                    </li>
                                                  
                                                  
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Page-header end -->
                                
                                <!-- Page-body start -->
                                <div class="page-body">
                                    
    <h2> Photo Section </h2>
                                     
                                    <!-- Contextual classes table starts -->
                                    <div class="card">
                                        <div class="card-header ">
                                         
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>

      	<div class="col-10">
      		<a href="#" data-toggle="modal" data-target="#add_product_modal" class="btn btn-primary btn-sm">Add Image to Gallery</a>
      	</div>

                                                                        
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                        <thead>

                                        <tr>
                                   <th>Sno.</th>
                                  <th>Image</th>
                                  <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                  <th>Sno.</th>
                                  <th>Image</th>
                                  <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
        $query = "SELECT * FROM gallery";
        $select_categories = mysqli_query($con,$query);
        $cnt=1;
        while($row = mysqli_fetch_assoc($select_categories)){ 
            $gallery_id = $row['id'];
            ?>
    
            <tr class="table-active">
            <td><?php echo $cnt;?></td>
         <?php   echo  "<td><img width='300px' height='150px' src='./images/gallery/$row[img]' alt ='image'></td>" ?>

         <td><a href="gallery.php?delete=<?php echo $gallery_id ?>"  onClick="return confirm('Do you really want to delete');" > Delete </a> </td>
            </tr>

            <?php $cnt=$cnt+1; }?>
            </tbody>
                    </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contextual classes table ends for images-->
                                    
<h2> Video Section </h2>

                                    <!-- Contextual classes table starts for video -->
                                    <div class="card">
                                        <div class="card-header ">
                                         
                                            <div class="card-header-right">    <ul class="list-unstyled card-option">        <li><i class="icofont icofont-simple-left "></i></li>        <li><i class="icofont icofont-maximize full-card"></i></li>        <li><i class="icofont icofont-minus minimize-card"></i></li>        <li><i class="icofont icofont-refresh reload-card"></i></li>        <li><i class="icofont icofont-error close-card"></i></li>    </ul></div>
                                        </div>

      	<div class="col-10">
      		<a href="#" data-toggle="modal" data-target="#add_video_modal" class="btn btn-primary btn-sm">Add Video to Gallery</a>
      	</div>

                                                                        
        <div class="card-block table-border-style">
            <div class="table-responsive">
                <table class="table">
                        <thead>

                                        <tr>
                                   <th>Sno.</th>
                                  <th>Video</th>
                                  <th>Delete</th>
                                        </tr>
                                    </thead>

                                    <tfoot>
                                        <tr>
                                  <th>Sno.</th>
                                  <th>Video</th>
                                  <th>Delete</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
<?php 
        $query = "SELECT * FROM video";
        $select_categories = mysqli_query($con,$query);
        $cnt=1;
        while($row = mysqli_fetch_assoc($select_categories)){ 
            $video_id = $row['id'];
            ?>
    
            <tr class="table-active">
            <td><?php
             echo $cnt;
             ?></td>
            <td><?php
             echo $row['video']; 
             ?> </td>
         <td>



       

        <a href="gallery.php?deleteone=<?php
         echo $video_id; 
         ?>"  onClick="return confirm('Do you really want to delete');" > Delete </a>

        </td>
            </tr>

            <?php
           $cnt=$cnt+1; }?>
            </tbody>
                    </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Contextual classes table ends -->





<!-- Add image Modal start -->


<div class="modal fade" id="add_product_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            New Image Gallery
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-product-form" enctype="multipart/form-data" method="post">
        	<div class="row">

        		<div class="col-12">
        			<div class="form-group">
		        		<label>Select Image  <small>(format: jpg, jpeg, png)</small></label>
		        		<input type="file" name="aboutimage" class="form-control" Required>
		        	</div>
        		</div>
        		<div class="col-12">
        			<button type="submit" class="btn btn-primary" name="add-about">Add Image</button>
        		</div>
        	</div>
        	
        </form>

      </div>
    </div>
  </div>
</div>
<!-- Add image Modal end -->



<!-- Add video Modal start -->


<div class="modal fade" id="add_video_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">
            New video Gallery
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="add-video-form"  method="post">
        	<div class="row">

        		<div class="col-12">
        			<div class="form-group">
		        		<label>Video Link <small>Link will only display in Admin</small></label>
		        		<input type="text" name="video" class="form-control" Required>
		        	</div>
        		</div>
        		<div class="col-12">
        			<button type="submit" class="btn btn-primary" name="add-video">Add Video</button>
        		</div>
        	</div>
        	
        </form>

      </div>
    </div>
  </div>
</div> 
<!-- Add video Modal end -->




                                </div>
                                <!-- Page-body end -->
                            </div>
                        </div>
                        <!-- Main-body end -->



                                            </div>
                                        </div>
                                    </div>

                                    <div id="styleSelector">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

<!-- footer start here -->

    <?php include('includes/footer.php');?>  
<!-- footer ends here -->
    
  <?php  } ?>