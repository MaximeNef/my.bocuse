<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<title>beacuz</title>
</head>

<body>
    <div class="container-fluid login-dark">
        <div class="form_container">
            <form method="post">
                <h2 class="text-center">Welcome</h2>
                <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
                <div class="form-group"><input class="form-control" type="email" name="email" placeholder="Email"></div>
                <div class="form-group"><input class="form-control" type="password" name="password" placeholder="Password"></div>
                <div class="form-group"><button class="btn btn-primary btn-block" type="submit">Log In</button></div>
            </form>
        </div>
    </div>

    <?php
    session_start();
    ini_set('display_errors', 'on');
    error_reporting(E_ALL);
    //session_destroy();

    $db = new PDO('mysql:host=localhost;dbname=pzqrmnyr_mybocuse', 'pzqrmnyr_ak', 'Agneskabongo95', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


    if (!isset($_SESSION['logged'])) {
        $_SESSION['logged'] = false;
    }

    if (isset($_POST['email']) and isset($_POST['password'])) {
        $email = $_POST['email'];
        $_SESSION["email"] = $email;
        $mdp = $_POST['password'];




        $verif = $db->prepare("SELECT id, email, password FROM users WHERE email = ? ");
        $verif->execute([
            $_SESSION['email']
        ]);




        $data = $verif->fetch();
        if (!empty($data)) {

            if (password_verify($_POST['password'], $data['password'])) {
                $_SESSION['logged'] = true;
                $_SESSION['userid'] = $data['id'];
            }
        }
    }

    if ($_SESSION['logged'] == true) {
        $account=$db->prepare("SELECT accout_type FROM users WHERE id=?");
        $account->execute([
            $_SESSION['userid']
        ]);
        $account_type=$account->fetch();
        if($account_type[0]=='learner'){
            header('Location: dashbord.php');
        }else if($account_type[0]=='coach'){
            header('Location: dashboardAdmin.php');
        }

    } else {
        // echo'<p>NOOOOON</p>'; 
    }

    ?>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script href="./script.js"></script>
</body>

</html>