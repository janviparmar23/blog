<html>

<head>
    <title>dashboard page </title>
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
                <a href="new_blog.php"><button style="float:right">add new blog</button></a>
                <?php
                    include_once('includes/blog.php');
                    $user = new blog();
                    $blogs = $user->showblog();

                    ?>
                <?php foreach ($blogs as $blog): ?>
                <table class="blog-item">
                    <tr>
                        <td>
                            <?php echo $blog['title']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <?php echo $blog['content']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <img src='/Blog/images/<?php echo $blog['image']; ?>' class = "myimg" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <a href="/Blog/blog_edit.php?action=edit&id=<?php echo $blog['id']; ?>">Edit</a>
                            <a href="/Blog/blog_edit.php?action=delete&id=<?php echo $blog['id']; ?>">Delete</a>
                        </td>
                    </tr>
                </table>
                <?php endforeach; ?>


            </content>
        </main>
        <footer>
            <?php
            include_once('footer.php');
            ?>
        </footer>
</body>

</html>