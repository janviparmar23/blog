
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <main>
            <content>
               <?php
              // session_start();
               //echo "<Pre>";print_r($_SESSION);die;
               session_destroy();
               header('location: index.php');
               ?>
            </content>
        </main>

        <footer>
            <?php
            include_once('footer.php');
            ?>
        </footer>