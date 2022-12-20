<!DOCTYPE html>
<html>

<head>
    <title>My Blog Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once('includes/blog.php');
    if ($_GET['id']) {
        $blog = new blog();
        $blog_detail = $blog->getBlogDetailbyId($_GET['id']);
    }
    if ($_GET['id']) {
        $blog = new blog();
        $comment_detail = $blog->getcommentdetailbyId($_GET['id']);
    }

    ?>
    <div class="body">
        <div class="cotainer">
            <header>
                <?php include_once('header.php'); ?>
            </header>

            <main>
                <content>
                    <table class="full-width">
                        <tr>
                            <td>
                                <h2><?php echo $blog_detail['title']; ?></h2>
                            </td>
                        <tr>
                            <td>

                                <img src='/Blog/images/<?php echo $blog_detail['image']; ?>' class="myimg" />
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div><?php echo $blog_detail['content']; ?></div>
                            </td>
                        </tr>
                    </table>

                    <h2>Comments </h2>
                    <?php foreach ($comment_detail as $comment_detail) : ?>
                        <div class="commentbox">
                        <i class="fa fa-sharp fa-solid fa-caret-up fa-2x ls-arrow"></i>
                        <table >
                            
                            <tr>
                                <td>
                                    <?php echo $comment_detail['Name']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $comment_detail['emailID']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <?php echo $comment_detail['rating']; ?>
                                </td>
                            </tr>
                            <tr>
                                <td><?php echo $comment_detail['comment']; ?></td>
                            </tr>
                        </table>
                    </div>
                    <?php endforeach; ?>


                    <div>
                        <?php
                        include_once('comment.php');
                        ?>
                    </div>


                </content>
            </main>
            <footer>
                <?php
                include_once('footer.php');
                ?>
            </footer>
        </div>

    </div>
</body>

</html>