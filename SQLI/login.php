
<?php
session_start();
include "db_model.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        * {
            font-family: sans-serif;
            box-sizing: border-box;
        }
        table {margin: 0 auto;}
        h1 { text-align: center; color: #5f667c}
        body { background-color: #EAF2FF; }
        button {
            background: #555;
            padding: 10px 15px;
            color: #fff;
            border-radius: 5px;
            margin-right: 10px;
            border: none;}
        button:hover {
            opacity: .7;
        }
    </style>
</head>
<body>
    
</body>
</html>
<?php
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
            
            echo "<h1>Login success!!</h1>";
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
            echo "</table>";
            echo "<br>";
            echo "<center><button onclick=\"window.location.href='index.php'\">Back </button></center>";
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