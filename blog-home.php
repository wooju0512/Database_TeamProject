<?php
include "./conn.php";
$name = $_GET['name'];
$query = "SELECT * FROM recipe where nickname='$name'";
$res = mysqli_query($conn,$query);
$row = mysqli_fetch_array($res);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Page Title -->
    <title><?php echo $row['name'];?></title>
    <!-- Favicon -->
    <link href="https://fonts.googleapis.com/css2?family=Poor+Story&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="assets/images/logo/favicon.png" type="image/x-icon">
    <!-- CSS Files -->
    <link rel="stylesheet" href="assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        *{
            font-family: 'Poor Story', cursive;
        }
        .active{
            color:#FFB606;
        }
        #ing{
            font-size:12px;
            color:black;
            font-weight:20;
            margin-left:200px;
        }
        </style>
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->
    <section class="banner-area banner-area2 blog-page text-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1><i>
                    <a href="./">
                    <?php echo $row['name'];?>
                    </a></i></h1>
                </div>
            </div>
        </div>
    </section>
    <br><br>
    <!--================Blog Area =================-->
    <section class="blog_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="blog_left_sidebar">
                    <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <h3><p class="active">재료</p></h3>
                                        <?php
                                            $query1="SELECT * FROM recipe";
                                            $res1 = mysqli_query($conn,$query1);
                                            $i=0;
                                            $row1=mysqli_fetch_array($res1);                                         
                                            echo "<p id='ing'>".$row1['ing1']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing2']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing3']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing4']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing5']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing6']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing7']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing8']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing9']."</p><br>";
                                            echo "<p id='ing'>".$row1['ing10']."</p><br>";
                                        ?>
                                    </div>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <h4><a class="active">첫번째</a></h4>
                                    </div>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-1.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4><?php echo $row['step1'];?></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                        <h4><a class="active">두번쨰</a></h4>
                                    </div>
                                    <ul class="blog_meta list">
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-3.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4><?php echo $row['step2'];?></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                    <h4><a class="active">세번째</a></h4>
                                        
                                    </div>
                                    <ul class="blog_meta list">
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-4.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4><?php echo $row['step3'];?></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                    <h4><a class="active">네번째</a></h4>
                                    </div>
                                    <ul class="blog_meta list">
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-5.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4><?php echo $row['step4'];?></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                        <article class="row blog_item">
                           <div class="col-md-3">
                               <div class="blog_info text-right">
                                    <div class="post_tag">
                                    <h4><a class="active">다섯번째</a></h4>
                                    </div>
                                    <ul class="blog_meta list">
                                    </ul>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                    <img src="assets/images/blog/main-blog/m-blog-5.jpg" alt="">
                                    <div class="blog_details">
                                        <a href="blog-details.html"><h4><?php echo $row['step5'];?></h4></a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                <div class="col-lg-4">
                   
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
   
    <!-- Javascript -->
    <script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="assets/js/vendor/wow.min.js"></script>
    <script src="assets/js/vendor/owl-carousel.min.js"></script>
    <script src="assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>
</html>
