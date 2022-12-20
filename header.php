<html>

<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>


    <div class="top-bar">
        <p> "The first step in blogging is not writing them but reading them"
            
        </P>
    </div>
    <div class="Third-bar">
       <p> <div class="logo">
            MY BLOG
       
        <?php
            session_start();
            if (isset($_SESSION['username'])) {
            ?>
                <span class="top-bar-login"><a href="logout.php">logout</a></span>
            <?php
            } else {
            ?>
                <span ><a href="registration.php" class="top-bar-login">Registration</a><a href="login.php" class="top-bar-login">login </a></span>

            <?php
            }
            ?>
             </div>
</p>
    </div>
    <div class="second-bar">
        <nav>
            <ul class="my-menu">
                <li class="my-menu"><a href="index.php">Home</a></li>
                <li class="my-menu"><a href="blog.php">Blog </a></li>
                <li class="my-menu"><a href="aboutus.php">About Us</a></li>
                <li class="my-menu"><a href="contactus.php">contact us </a></li>
                
                <li class="blog-search-top"><i class="fas fa fa-search ls-search"></i><input class="blog-search" type="text" name="search" value="search" /></li>
            </ul>
        </nav>
    </div>
    
</body>

</html>