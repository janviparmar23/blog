<html>

<head>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script src="js/jquery.star-rating.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>

<body>
        <form name="add_comment" method="POST" action="" enctype="multipart/form-data">
        <div class="rating"></div>
            <center>
                <table>
                    
                    <tr>
                        <td>
                            <input type="text" name="name" placeholder="enter name" class="input-text" required />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="hidden" value="<?php echo $_GET['id'] ?>" name="ID">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <input type="text" name="Email" placeholder="enter email" required class="input-text" />
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3"><textarea type="text" name="comment" placeholder="add comment" class="input-text comment-box"></textarea></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="submit" value="submit" class="cmt-submit" /></td>
                    </tr>
                </table>
            </center>
        </form>
        <?php
        include_once('includes/blog.php');

        if (isset($_POST["submit"])) {
           
            $user = new blog();
            $user->comment($_GET['id']);
        }
        ?>
        <script>
            $('.rating').starRating({
                starIconEmpty: 'far fa-star',

                starIconFull: 'fas fa-star',

                starColorEmpty: 'lightgray',

                starColorFull: '#FFC107',

                starsSize: 4,

                stars: 5,

            });
            $('.rating').starRating({

                showInfo: true,

                titles: ["Very Bad", "Poorly", "Medium", "Good", "Excellent!"],

            });

            $('.rating').starRating({

                inputName: 'rating',

            });
            $(document).on('change', '.rating', function(e, stars, index) {

                // alert(`Thxfor ${stars} stars!`);

            });
        </script>
    
</body>

</html>