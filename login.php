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

        <title> Login To Raisoni Blog</title> 
    </head>
    <body>

    <?php include(ROOT_PATH . "/app/includes/header.php");?>

       <div class="auth-content">
           <form action="login.php" method="post">
            <h2 class="form-title">Login</h2>

            <div>
                <label>Username</label>
                <input type="text" name="username" class="text-input">
            </div>

            <div>
                <label>Password</label>
                <input type="password" name="password" class="text-input">
            </div>

            <div>
                <button type="submit" name="login-btn" class="btn btn-big">Login</button>
            </div>

            <p>Or <a href="<?php echo BASE_URL . '/register.php'?>">">Sign up</a></p>
           </form>
       </div>
       
    <!-- JQuery-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    
    <!-- Custom Script -->
    <script src="assets/js/scripts.js"></script>   

    </body>
</html>