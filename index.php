<!DOCTYPE html>
<html>

<head>
    <title>My Blog Website</title>
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />

    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />

    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>

</head>

<body>
    <div class="body"> 
        <div class="cotainer">
            <header>
                <?php include_once('header.php'); ?>
            </header>

            <main>
                <content>


                    <div class="homepage-slider">
                        <div class="slider">
                            <img src="blogimage/1.png" class="slider-image" class="image"  />
                            <img src="blogimage/2.jpg" class="slider-image"  class="image" />
                            <img src="blogimage/3.jpg" class="slider-image" class="image"  />


                        </div>
                    </div>

                    <h2 class="latest-blog-heading">Latest Blog</h2>
                    <div>
                        <?php include_once('showallblog.php'); ?>
                    </div>

                    <script>
                        $('.slider').slick({
                            dots: true,
                            infinite: true,
                            speed: 500,
                            fade: true,
                            cssEase: 'linear'
                        });
                    </script>

                </content>
            </main>

            <footer>
                <?php
                include_once('footer.php');
                ?>
            </footer>
        </div>
    </div>

    </script>

</body>

</html>