<html>

<head>
    <title>CONTACT US </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="cotainer">
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <main>
            <content>
                <form name="CONTACTFORM" method="POST" action="" >
                    <center>
                        <table class="contacttable">
                            <tr><th><h1>CONTACT US</h1></th></tr>
                            <tr>
                                <td> <input type="text" name="Name" placeholder="Enter Name" class="input-text-register"  required></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="Email" placeholder="Enter Email" class="input-text-register"  required></td>
                            </tr>
                            <tr>
                                <td> <input type="text" name="Number" placeholder="Enter MobileNumber" class="input-text-register"  required></td>
                            </tr>
                            <tr>
                                <td> <input type="text" name="Message" placeholder="Enter Message" class="input-text-register"  required></td>
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
                    $user->contactus();
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