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
        //echo '<pre>';
        //print_r($blog_detail);
        //die;
    }

    if (isset($_POST['save']) && $_POST['action'] == "edit") {
        $blog->update($_POST);
    }
    if (isset($_POST['yes']) && $_POST['action'] == "delete") {
        $blog->delete($_GET['id']);
    }
    if (isset($_POST['no']) && $_POST['action'] == "delete") {
        $blog->delete($_GET['id']);
    }

    ?>
    <div class="body">
        <div class="cotainer">
            <header>
                <?php include_once('header.php'); ?>
            </header>

            <main>
                <content>
                    <form method="post" enctype="multipart/form-data">
                        <center>
                            <table class="registable">
                                <?php if ($_GET['action'] == "edit"): ?>
                                <tr>
                                    <th><b><h1>Blog edit</h1></b>
                                    <th>
                                </tr>
                                <tr>
                                    <td> <input type="text" name="title" value="<?php echo $blog_detail['title']; ?>"
                                            placeholder="ENTER TITLE" class="input-text-register" /></td>
                                </tr>
                                <tr>
                                    <td><input type="text" name="content" value="<?php echo $blog_detail['content']; ?>"
                                            placeholder="ENTER CONTENT" class="input-text-register" /></td>
                                </tr>
                                <tr>
                                    <td><input type="file" name="image" />
                                    </td>
                                </tr>

                                <tr>
                                    <td><input type="hidden" name="action" value="edit" />
                                        <input type="hidden" name="old_image"
                                            value="<?php echo $blog_detail['image'] ?>" />

                                    </td>
                                </tr>
                                <tr>
                                    <td><input type="hidden" name="id" value="<?php echo $_GET['id'] ?>" /><br></td>
                                </tr>
                                <tr>
                                    <td><button type="submit" name="save" class="cmt-submit">Save</button></td>
                                </tr>

                                <?php endif; ?>
                                
                                <?php if ($_GET['action'] == "delete"): ?>
                                    <input type="hidden" name="action" value="delete" />
                                <tr>
                                    <td><h3>BLOG DELETE</h3></td>
                                </tr>
                             
                                <tr>
                                    <td><button type="submit" name="yes" class="btn btn-detail"mit >YES </button>
                                        <button type="submit" name="no" class="btn btn-detail">No</button>
                                    </td>
                                </tr>
                                <?php endif; ?>
                            </table>
                        </center>
                    </form>
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