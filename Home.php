<!DOCTYPE html>
<html>

<head>
    <title>My Blog Website</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="cotainer">
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <main>
            <content>
                <?
                 header('location: index.php');
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

</html>