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
            font-size:15px;
            color:black;
            font-weight:20;
        }
        .a14{
            background:none;
        }
        .owl-dot{
            display:none;
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
                                            echo "<span id='ing'>".$row['ing1']."<br>";
                                            echo $row['ing2']."<br>";
                                            echo $row['ing3']."<br>";
                                            echo $row['ing4']."<br>";
                                            echo $row['ing5']."<br>";
                                            echo $row['ing6']."<br>";
                                            echo $row['ing7']."<br>";
                                            echo $row['ing8']."<br>";
                                            echo $row['ing9']."<br>";
                                            echo $row['ing10']."</span><br>";
                                        ?>
                                    </div>
                                </div>
                           </div>
                            <div class="col-md-9">
                                <div class="blog_post">
                                <section class="a14">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="testimonial-slider owl-carousel">
                                                <div class="single-slide d-sm-flex">
                                                        <div class="customer-img mr-4 mb-4 mb-sm-0">
                                                            <img src="data:image/jpeg;base64,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" alt="">
                                                        </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
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
                                    <img src="
                                    <?php 
                                    echo $row['img1'];
                                    ?>
                                    " alt="">
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
                                    <img src=" 
                                    <?php 
                                    echo $row['img2'];
                                    ?>
                                    " alt="">
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
                                    <img src="
                                    <?php 
                                    echo $row['img3'];
                                    ?>
                                    " alt="">
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
                                    <img src="
                                    <?php 
                                    echo $row['img4'];
                                    ?>
                                    " alt="">
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
                                    <img src="
                                    <?php 
                                    echo $row['img5'];
                                    ?>
                                    " alt="">
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
