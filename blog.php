<html>

<head>
    <title>BLOG page </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="cotainer">

        <header>
            <?php
            include_once('header.php');
            ?>
        </header>

        <main>
            <content>
                <div>
                    <?php
                    if (isset($_SESSION['username'])) { ?>
                        <a href="new_blog.php"><button class="btn btn-edit float-right">add new blog</button></a>
                        <?php
                        include_once('includes/blog.php');
                        $user = new blog();
                        $blogs = $user->showblog();
                        ?>
                        <br>
                        <?php foreach ($blogs as $blog) : ?>
                            <table class="blogitem">
                                <tr>
                                    <td>
                                        <h3><?php echo $blog['title']; ?></h3>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <img src='/Blog/images/<?php echo $blog['image']; ?>' class="myimg" />
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                    <?php
                    $a = strlen($blog['content']);
                    if ($a > 50) {
                        echo substr($blog['content'], 0, 25) . " .. "; ?>
                    <?php
                    } else {
                        echo $blog['content'];
                    }
                    ?>
                </td>
                                </tr>

                                <tr>
                                    <td> 
                                        <div class="text-center">
                                            <a class="btn btn-detail" href="/Blog/detail.php?action=detail&id=<?php echo $blog['id']; ?>">Detail</a>
                                            <a class="btn btn-edit" href="/Blog/blog_edit.php?action=edit&id=<?php echo $blog['id']; ?>">Edit</a>
                                            <a class="btn btn-delete" href="/Blog/blog_edit.php?action=delete&id=<?php echo $blog['id']; ?>">Delete</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>

                                    </td>
                                </tr>
                            </table>
                            <?php endforeach; ?><?php
                                            } else {
                                                header('location:registration.php');
                                            }
                                                ?>
                </div>
            </content>
        </main>
        <footer>
            <?php
            include_once('footer.php');
            ?>
        </footer>
</body>

</html>