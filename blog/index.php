<?php 
include('path.php'); 
include(ROOT_PATH . "/app/database/db.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<!-- Font Awesome -->
<script src="https://kit.fontawesome.com/96e33b5d23.js" crossorigin="anonymous"></script>

<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

<!-- CSS -->
<link rel="stylesheet" href="assets/css/style.css">

    <title>Project</title>
</head>

<body>
    
    <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
    <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>
       
    <!-- Page Wrapper -->
    <div class="page-wrapper">

    <!-- Carousel -->
        <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>

            <div class="post-wrapper">
                <div class="post">
                    <img src="assets/images/riverwalk1.jpeg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Ben Middleton</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>
                
                <div class="post">
                    <img src="assets/images/riverwalk1.jpeg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Ben Middleton</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/riverwalk1.jpeg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Ben Middleton</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

                <div class="post">
                    <img src="assets/images/riverwalk1.jpeg" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.html">One day your life will flash before your eyes</a></h4>
                        <i class="far fa-user">Ben Middleton</i>
                        &nbsp;
                        <i class="far fa-calendar">Mar 8, 2019</i>
                    </div>
                </div>

            </div>
        </div>
    
    <!-- Content -->
    <div class="content clearfix">

        <div class ="main-content">
            <h1 class = "recent-post-title">Recent Posts</h1>

            <div class="post clearfix">
                <img src="assets/images/bottle.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">This is example text</a></h2>
                    <i class="far fa-user">Ben Middleton</i>
                    &nbsp;
                    <i class="far calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque nostrum, inventore ducimus repellendus officiis!
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="post clearfix">
                <img src="assets/images/bottle.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">This is example text</a></h2>
                    <i class="far fa-user">Ben Middleton</i>
                    &nbsp;
                    <i class="far calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque nostrum, inventore ducimus repellendus officiis!
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="post clearfix">
                <img src="assets/images/bottle.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">This is example text</a></h2>
                    <i class="far fa-user">Ben Middleton</i>
                    &nbsp;
                    <i class="far calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque nostrum, inventore ducimus repellendus officiis!
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>

            <div class="post clearfix">
                <img src="assets/images/bottle.jpg" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.html">This is example text</a></h2>
                    <i class="far fa-user">Ben Middleton</i>
                    &nbsp;
                    <i class="far calendar">Mar 11, 2019</i>
                    <p class="preview-text">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa doloremque nostrum, inventore ducimus repellendus officiis!
                    </p>
                    <a href="single.html" class="btn read-more">Read More</a>
                </div>
            </div>
        </div>

        <div class="sidebar">

            <div class="section search">
                <h2 class="section-title">Search</h2>
                <form action="index.html" method="post">
                    <input type="text" name="search-term" class="text-input" placeholder="Search...">
                </form>
            </div>

            <div class="section topics">
                <h2 class="section-title">Topics</h2>
                <ul>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                    <li><a href="#">Test</a></li>
                </ul>
            </div>
        </div>
    </div>

</div>

<!-- Footer -->
   
<?php include(ROOT_PATH . "/app/includes/footer.php"); ?>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
   
    <!-- Slick Carousel -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>


</body>

</html>