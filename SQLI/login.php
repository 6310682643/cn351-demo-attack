<!-- <?php
    // $link = new mysqli("localhost", "root", "", "test_db");
    // if ($link -> connect_errno) {
    //     echo "Failed to connect to MySQL: " . $link -> connect_error;
    //     exit();
    // }

    // if (isset($_GET['login'])) {
    //     $password = $_GET['password'];
    //     $username = $_GET['username'];

    //     $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    //     // $sql = "SELECT * FROM users WHERE username='".$username ."' AND password='".$password."';";
    //     $result = mysqli_query($link, $sql);

    //     if (mysqli_num_rows($result) == 1) {
    //         header("Location: home.php");
    //     } else {
    //         print_r($sql +" "+$result);
    //         // header("Location: index.php");
    //     }
    // }
?> -->

<?php
session_start();
include "db_model.php";

if (isset($_POST['login'])) {
    // function validation($data) {
    //     $data = trim($data);
    //     $data = stripcslashes($data);
    //     $data = htmlspecialchars($data);
    //     return $data;
    // }
    // $username = validation($_POST['username']);
    // $password = validation($_POST['password']);
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        header("Location: index.php?error=Username is required");
        exit();
    } else if (empty($password)) {
        header("Location: index.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($link, $sql);
        // $result = mysqli_multi_query($link, $sql);

        if (mysqli_num_rows($result) > 0) {
            // header("Location: home.php");
            echo "<h1><center>Login success</center></h1>";
            // echo "Query is: ".$sql;
            // $row = mysqli_fetch_assoc($result);
            // if ($row['username'] == $username) {
            //     $_SESSION['username'] = $row['username'];
            //     $_SESSION['name'] = $row['name'];
            //     $_SESSION['id'] = $row['id'];
            //     header("Location: home.php");
            //     exit();
            // } else {
            //     header("Location: index.php?error=Incorrect Username or Password");
            //     exit();
            // }
            echo "<table>
            <tr bgcolor='#ccc'>
            <th>Username</th>
            <th>Password</th>
            </tr>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<center><tr align=left style='font-size:20px;'>";
                echo "<td align=center>" . $row['username'] . "</td>";
                echo "<td align=left>" . $row['password'] . "</td>";
                echo "</tr></center>";
            }
            
        } else {
            // echo "<h1><center>Login failed</center></h1>";
            // print_r($sql);
            header("Location: index.php?error=Incorrect Username or Password");
            exit();
        }
    }

} else {
    header("Location: index.php");
    exit();
}