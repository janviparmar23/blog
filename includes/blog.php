<?php
class blog
{
    private $con;
    public function __construct()
    {
        include 'connection.php';
        $this->con = $conn;
    }

    public function addblog()
    {
        session_start();
        $Auth_ID = $_SESSION['Auth_ID'];
        $title = $_POST["title"];
        $content = $_POST["content"];
        $pic = $_FILES['image']['name'];
        if ($pic) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . basename($pic));
        }
        $sql = " INSERT INTO `new_blog` ( `Auth_ID` ,`Title`, `Content`, `Image`) VALUES ('$Auth_ID','$title', '$content', '$pic')";
        if (mysqli_query($this->con, $sql)) {
            header("location: blog.php");
        } else {
            echo "error" . mysqli_error($this->con);
        }
    }

    public function showBlog()
    {

        $Auth_ID = $_SESSION['Auth_ID'];
        $sql = " SELECT ID as id,title , content , image  FROM `new_blog` where AUth_Id = '$Auth_ID' ";
        $result = mysqli_query($this->con, $sql);
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }
        return $data;
    }
    public function allBlog()
    {
        $sql = " SELECT ID as id,title , content , image  FROM `new_blog` LIMIT 8";
        $result = mysqli_query($this->con, $sql);
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        return $data;
    }


    public function getBlogDetailbyId($id)
    {
        $sql = " SELECT title , content , image  FROM `new_blog` where ID = '$id' ";
        $result = mysqli_query($this->con, $sql);
        $data = mysqli_fetch_assoc($result);
        return $data;
    }

    public function update($data)
    {
        //echo '<pre>';
        //print_r($data);
        // print_r($_FILES);
        //die;
        $id = $data['id'];
        $title = $data["title"];
        $content = $data["content"];
        $pic = $_FILES['image']['name'];
        if ($pic) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . basename($pic));
        } else {
            $pic = $data["old_image"];
        }
        $sql = "UPDATE `new_blog` SET `Title`='$title',`Content`='$content' ,`image` = '$pic' WHERE `ID`= ' $id'";
        //echo "<Pre>";
        //print_r($sql);die;
        if (mysqli_query($this->con, $sql)) {
            header("location: blog.php");
        } else {
            echo "error" . mysqli_error($this->con);
        }
    }

    public function delete($id)
    {
        if (isset($_POST["yes"])) {
            $sql = "DELETE FROM `new_blog` WHERE id = '$id' ";
            if (mysqli_query($this->con, $sql)) {
                header("location: blog.php");
            } else {
                echo "error" . mysqli_error($this->con);
            }
        }
        if (isset($_POST["no"])) {
            header("location: blog.php");
        }
    }

    public function comment()
    {
        $id = $_POST['ID'];
        $comment = $_POST['comment'];
        $name = $_POST['name'];
        $email = $_POST['Email'];
        $rating = $_POST['rating'];
        $sql = "INSERT INTO `comment`(`comment`, `Name`, `emailID`,`BLOG_ID`,`rating`) VALUES ('$comment','$name','$email','$id','$rating')";
        if (mysqli_query($this->con, $sql)) {
            echo " succesfull";
            //header("location: dashboard.php");
        } else {
            echo "error" . mysqli_error($this->con);
        }
    }
    public function getcommentdetailbyId($id)
    {
        $sql = " SELECT `comment`, `Name`, `emailID`, `rating` FROM `comment` WHERE `BLOG_ID`='$id' ";
        $result = mysqli_query($this->con, $sql);
        $data = [];
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                $data[] = $row;
            }
        }

        return $data;
    }
}
