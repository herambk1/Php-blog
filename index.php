<?php include("path.php")?>
<!DOCTYPE html>
<html lang = "en">
    <head>
        <meta charset = "viewport" content = "width = device-width", initial-scale = 1.0">
        <meta http - quiv = "X-UA-Compatible" content = "ie-edge">

    <!--Font awsome-->
     <script src="https://kit.fontawesome.com/cc2616605c.js" crossorigin="anonymous"></script>

     <!-- Google fonts-->
     <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

     <!-- Custom Styling-->
     <link rel="stylesheet" href="assets/css/style.css">

        <title> Blog </title> 
    </head>
    <body>

      <?php include(ROOT_PATH . "/app/includes/header.php");?>

        <!-- Page Wrapper -->
        <div class = "page-wrapper">

           <!-- Post Slider -->
           <div class = "post-slider">
              <h1 class = "slider-title"> Trending Posts </h1>
              
              <i class = "fas fa-chevron-left prev"></i>
              <i class = "fas fa-chevron-right next"></i>

              <div class = "post-wrapper">

                  <div class="post">
                      <img src = "assets/images/img.jfif" alt="" class="slider-image">
                      <div class = "post-info">
                          <h4><a href="single.html"> 5 rupaye ki pepsi, heramb bhai sexy</a> </h4>
                          <i class = "far fa-user"> The Shahi Plate</i>
                          &nbsp;
                          <i class = "far fa-calendar"> Aug 16, 2020</i>
                      </div>
                  </div>

                  <div class="post">
                    <img src = "assets/images/img.jfif" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html"> 5 rupaye ki pepsi, heramb bhai sexy</a> </h4>
                        <i class = "far fa-user"> Raisoni</i>
                        &nbsp;
                        <i class = "far fa-calendar"> Aug 16, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src = "assets/images/img.jfif" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html"> 5 rupaye ki pepsi, heramb bhai sexy</a> </h4>
                        <i class = "far fa-user">Raisoni</i>
                        &nbsp;
                        <i class = "far fa-calendar"> Aug 16, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src = "assets/images/img.jfif" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html"> 5 rupaye ki pepsi, heramb bhai sexy</a> </h4>
                        <i class = "far fa-user">Raisoni</i>
                        &nbsp;
                        <i class = "far fa-calendar"> Aug 16, 2020</i>
                    </div>
                </div>

                <div class="post">
                    <img src = "assets/images/img.jfif" alt="" class="slider-image">
                    <div class = "post-info">
                        <h4><a href="single.html"> 5 rupaye ki pepsi, heramb bhai sexy</a> </h4>
                        <i class = "far fa-user">Raisoni</i>
                        &nbsp;
                        <i class = "far fa-calendar"> Aug 16, 2020</i>
                    </div>
                </div>


                
              </div>

           </div>
           <!-- // Post Slider -->

        <!-- content -->
        <div class="content clearfix">
            
            <!-- main content -->
            <div class="main-content">
                <h1 class="recent-post-title">Recent Posts</h1>

                <div class="post clearfix">
                    <img src="assets/images/img.jfif" alt="" class="post-image">
                    <div class="post-preview">
                       <h2><a href="single.html">Raisoni Runner Up in national Coading compitation</a></h2>
                        <i class="far fa-user">Raisoni</i>
                        &nbsp;
                        <i class="far calendar">Aug 19, 2020</i>
                        <p class="preview-text">
                            Raisoni collage students are the runnerup for national coading compatation 
                            They made a prototype on 3D smart printer
                        </p>
                        <a href="sinfle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img.jfif" alt="" class="post-image">
                    <div class="post-preview">
                       <h2><a href="single.html">Raisoni Runner Up in national Coading compitation</a></h2>
                        <i class="far fa-user">Raisoni</i>
                        &nbsp;
                        <i class="far calendar">Aug 19, 2020</i>
                        <p class="preview-text">
                            Raisoni collage students are the runnerup for national coading compatation 
                            They made a prototype on 3D smart printer
                        </p>
                        <a href="sinfle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img.jfif" alt="" class="post-image">
                    <div class="post-preview">
                       <h2><a href="single.html">Raisoni Runner Up in national Coading compitation</a></h2>
                        <i class="far fa-user">Raisoni</i>
                        &nbsp;
                        <i class="far calendar">Aug 19, 2020</i>
                        <p class="preview-text">
                            Raisoni collage students are the runnerup for national coading compatation 
                            They made a prototype on 3D smart printer
                        </p>
                        <a href="sinfle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

                <div class="post clearfix">
                    <img src="assets/images/img.jfif" alt="" class="post-image">
                    <div class="post-preview">
                       <h2><a href="single.html">Raisoni Runner Up in national Coading compitation</a></h2>
                        <i class="far fa-user">Raisoni</i>
                        &nbsp;
                        <i class="far calendar">Aug 19, 2020</i>
                        <p class="preview-text">
                            Raisoni collage students are the runnerup for national coading compatation 
                            They made a prototype on 3D smart printer
                        </p>
                        <a href="sinfle.html" class="btn read-more">Read More</a>
                    </div>
                </div>

            </div>
            <!-- //main content -->

            <div class="sidebar">

                <div class="section search">
                    <h2 class="section-title">Search</h2>
                    <form action="home.html" method="POST">
                        <input type="text" name="search-term" class="text-input" placeholder="Search...">
                    </form>
                </div>

                <div class="section topics">
                  <h2 class="section-title">Topics</h2>
                  <ul>
                    <li><a href="#">Achivements</a></li>
                    <li><a href="#">victory</a></li>
                    <li><a href="#">Branches</a></li>
                    <li><a href="#">Medals</a></li>
                    <li><a href="#">Sport team</a></li>
                    <li><a href="#">Collage branches</a></li>
                    <li><a href="#">departments</a></li>
                </ul>  
                </div>

            </div>
        </div>
        <!-- //content -->

        </div>
        <!-- //page wrapper   -->
     
       <!--TOO: Include Footer-->
       <?php include(ROOT_PATH .'/app/includes/footer.php');?>

    <!-- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>

    <!--slick carosel-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>   

    </body>
</html>