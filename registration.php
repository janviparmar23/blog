
<html>

<head>
    <title>Registration form </title>
    <link rel="stylesheet" href="style.css">
    <style>

    </style>
</head>

<body>
    <div class="cotainer">
        <header>
            <?php include_once('header.php'); ?>
        </header>
        <main>
            <content>
                <form name="Author_registration" method="POST" action="" enctype="multipart/form-data">
                   
                    <center>
                        <table class="registable">
                            <tr>
                                <th><h1>REGISTRATION FORM </h1></th>
                            </tr>
                            <tr>
                                <td><input type="text" name="textname" placeholder="Enter Name" class="input-text-register" required></td>
                            </tr>
                            <tr>

                                <td ><input type="text" name="email" placeholder="Enter Email" class="input-text-register"required></td>
                            </tr>
                            <tr>

                                <td ><input type="password" name="password" placeholder="Enter Password" class="input-text-register" required>
                                </td>
                            </tr>
                            <tr>
                             
                   <!-- <td colspan = "3"><input type="radio" name="gender" value="male">Male</td>
                    <td colspan ="3"><input type="radio" name="gender" value="Female">Female</td>-->
                                <td><input type="text" name="gender" placeholder="Enter gender" class="input-text-register"></td>

                            </tr>
                            <tr>

                                <td><input type="file" name="image" required /></td>
                            </tr>
                            <tr>
                                <td >
                                    <input type="submit" name="submit" value="submit" class="cmt-submit" >
                                </td>
                            </tr>
                            <tr><td ><center><a class="registertable" href="login.php"> IF Alredy register login </a></center></td></tr>
                        </table>
                    </center>
                </form>
                <?php

                include_once('includes/user.php');

                if (isset($_POST["submit"])) {
                    $user = new Registration();
                    $user->doRegister();
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