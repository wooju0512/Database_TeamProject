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
        a{
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
        h4{
            font-family: 'Poor Story', cursive;
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
                           <div class="col-lg-12">
                    <div class="testimonial-slider owl-carousel">
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="data:image/jpeg;base64,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" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>맛있겠다...</h5>
                                </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                             </div>
                            <div class="customer-text">
                                </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="https://mblogthumb-phinf.pstatic.net/20150225_72/nhs02038_14248440479192F1Ve_PNG/2015-02-25_14%3B59%3B12.PNG?type=w2" alt="">
                            </div>
                            <div class="customer-text">
                                <h5>ㅇㅈ...</h5>
                                 </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                             </div>
                            <div class="customer-text">
                                </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ48NIL0S6WtCZbB9AmV3N1HQFRyfbSUHaxdQ&usqp=CAU" alt="">
                            </div>
                            <h4>fdzz</h4>
                            <div class="customer-text">
                                 </div>
                        </div>
                        <div class="single-slide d-sm-flex">
                            <div class="customer-img mr-4 mb-4 mb-sm-0">
                             </div>
                            <div class="customer-text">
                                </div>
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
                                    <img src="
                                    <?php 
                                    echo $row['img1'];
                                    ?>
                                    " alt="">
                                    <div class="blog_details">
                                        <a><h4><?php echo $row['step1'];?></h4></a>
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
                                        <a><h4><?php echo $row['step2'];?></h4></a>
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
                                        <a><h4><?php echo $row['step3'];?></h4></a>
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
                                        <a><h4><?php echo $row['step4'];?></h4></a>
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
                                        <a><h4><?php echo $row['step5'];?></h4></a>
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
