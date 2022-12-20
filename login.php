<html>

<head>
    <title>LOGIN </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="cotainer">
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <main>
            <content>
                <form name="LOGIN_FORM" method="POST" action="" >
                    <center>
                        <table class="registable">
                            <tr><th><h1>LOGIN FORM</h1></th></tr>
                            <tr>
                                <td> <input type="text" name="username" placeholder="Enter Username" class="input-text-register"  required></td>
                            </tr>
                            <tr>
                                <td><input type="password" name="password" placeholder="Enter Password" class="input-text-register"  required></td>
                            </tr>
                            <tr>
                                <td >
                                    <input type="submit" name="submit" class="cmt-submit" >
                                </td>
                            </tr>
                        </table>
                    </center>
                </form>
                <?php
                include_once('includes/user.php');
                if (isset($_POST["submit"])) {
                    $user = new Registration();
                    $user->doLogin();
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

</html>