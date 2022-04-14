<?php
include 'connection.php';
include 'function.php';
if (isset($_POST['submit'])) {
      $name = $_POST['name'];
      $username = $_POST['username'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $status = $_POST['status'];

      if (empty($name)) {
            echo "<div class='bg-danger p-2 m-2'><p>Fill The Name Field</p></div>";
      } elseif (empty($username)) {
            echo "<div class='bg-danger p-2 m-2'><p>Fill The User Name Field</p></div>";
      } elseif (empty($email)) {
            echo "<div class='bg-danger p-2 m-2'><p>Fill The Email Field</p></div>";
      } elseif (empty($phone)) {
            echo "<div class='bg-danger p-2 m-2'><p>Fill The Phone Field</p></div>";
      } elseif ($status == "Open this select menu") {
            echo "<div class='bg-danger p-2 m-2'><p>Fill The Status Field</p></div>";
      } else {
            $sql = "INSERT INTO tbl_student (name,username,email,phone,status) VALUES('$name','$username','$email','$phone','$status')";

            $result = mysqli_query($con, $sql);
            if ($result) {
                  echo "Record Added Successfully";
            } else {
                  echo "Record doesn't Added";
            }
      }
}

?>