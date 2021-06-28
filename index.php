<?php include_once "MySQL.php" ?>
<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $uname = $_POST['username'];
    $pass = $_POST['password'];

    if (MySQL::CountFields($uname, $pass) > 0) {
        $success = true;
    } else {
        $success = false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snort LAMP</title>
</head>

<body>
    <h1>Admin portal with critical data:</h1>
    <form id="login-form" method="post" role="form">
        <div class="form-group">
            <input type="text" name="username" id="username">
        </div>
        <div class="form-group">
            <input type="text" name="password" id="password">
        </div>
        <div class="form-group">
            <input type="submit" name="submit" id="submit" value="Log In">
        </div>
    </form>
    <?php
    if (isset($success)) {
        if($success){
            MySQL::Showusers();
        }else{
            echo "<h1>Please log in to see all Admins</h1>";
        }
    }
    ?>
</body>

</html>