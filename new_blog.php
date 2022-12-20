<html>

<head>
    <title>add new blog </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cotainer">
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <main>
            <content>
                <form name="new_Blog" method="POST" action="" enctype="multipart/form-data" class="myform">
                    <h1><b>ADD NEW BLOG</b></h1>
                    <center>
                        <table>
                            <!--<tr>
                                <td colspan="3"><input type="text" name="ID" placeholder="Enter Author Name" required>
                                </td>
                            </tr>-->
                            <tr>

                                <td colspan="3"><input type="text" name="title" placeholder="Enter title" required></td>
                            </tr>
                            <tr>

                                <td colspan="3"><input type="text" name="content" placeholder="Enter content" required>
                                </td>
                            </tr>
                            <tr>

                                <td><input type="file" name="image" required /></td>
                            </tr>
                            <tr>
                                <td colspan="3">
                                    <center><input type="submit" name="submit" value="submit"></center>
                                </td>
                            </tr>
                        </table>
                    </center>
                </form>
                <?php
                include_once('includes/blog.php');

                if (isset($_POST["submit"])) {
                    $user = new blog();
                    $user->addblog();
                }
                ?>
            </content>
        </main>

        <footer>
            <?php
            include_once('footer.php');
            ?>
        </footer>
    </div>
</body>