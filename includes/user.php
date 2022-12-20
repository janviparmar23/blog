<?php
class Registration
{
    private $con;
    public function __construct()
    {
        include 'connection.php';
        $this->con = $conn;
    }

    public function doRegister()
    {
        $username = $_POST["textname"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $gender = $_POST["gender"];
        $pic = $_FILES['image']['name'];

        if ($pic) {
            move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . basename($pic));
        }
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = " INSERT INTO `regist_author` (`Name`, `email`, `password`, `gender`,`profilepic`) VALUES ('$username', '$email', '$password', '$gender','$pic')";
        if (mysqli_query($this->con, $sql)) {
            $_SESSION['username'] = $username;
            $_SESSION['Auth_ID'] = mysqli_insert_id($this->con);
            header('location: blog.php');
        } else {
            echo "error" . mysqli_error($this->con);
        }
    }
    public function doLogin()
    {
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];
        $hash = "select Auth_ID,password from regist_author where name = '$username'";
        $result = mysqli_query($this->con, $hash);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $verify = password_verify($password, $row['password']);
        if ($verify) {
            $_SESSION['username'] = $username;
            $_SESSION['Auth_ID'] = $row['Auth_ID'];
            header("location: blog.php");
        } else {
            echo 'Incorrect Password!';
        }
    }
public function contactus(){

    $Name = $_POST["Name"];
    $Email = $_POST["Email"];
    $Number = $_POST["Number"];
    $Message = $_POST["Message"];
    $sql="INSERT INTO `contact`(`Name`, `Email`, `Phone`, `Message`) VALUES ('$Name','$Email','$Number','$Message')";
    if (mysqli_query($this->con, $sql)) {
        //header('location: blog.php');
    } else {
        echo "error" . mysqli_error($this->con);
    }
}
    
}
