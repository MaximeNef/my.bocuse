<?php
session_start();
$db = new PDO('mysql:host=localhost:8889;dbname=my_bocuse_user', 'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "my_bocuse_user";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- frontAwesome -->
    <script src="https://use.fontawesome.com/b3178bb50e.js"></script>
    <!-- personal sheet css -->

    <link rel="stylesheet" href="style.css">


    <title>My Beaucuz</title>
</head>

<body>
    <?php


    $name = $db->prepare("SELECT first_name,last_name FROM users WHERE id = ? ");
    $name->execute([
        $_SESSION['userid'][0]
    ]);

    $name_complete = $name->fetch();


    ?>


    <!-- General recipe list page -->
    <!-- Burger Menu -->
    <nav class="navbar navbar-light bg-light navbar-collapse-lg">
        <div class="container-fluid justify-content-end">
            <h1 class="titlePage">My beaucuz </h1>
            <button class="bt btn btn-secondary" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"><i class="bi bi-chevron-left">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z" />
                    </svg>
            </button>
        </div>
    </nav>
    <!-- Profil part -->
    <div class="container-fluid">
        <div class="row gx-0">
            <div class="col-3" id="profilPart">
                <h2 class="myProfilTitle">My profil</h2>
                <i class="fa fa-user-circle fa-5x icone"></i>
                <p id="name"><?php echo $name_complete['first_name'] . $name_complete['last_name']; ?></p>
                <p id="email"><?php echo $_SESSION["email"] ?></p>
                <?php include('modal.php'); ?>
            </div>

            <div class="col-9" id="recipeList">
                <div>
                    <h2 class="recipeTitle">List of recipes</h2>
                    <div class="buttons">
                        <button type="button" id="boutonArriver" class="btn btn-primary btn-lg">Arrival</button>
                        <button type="button" id="boutonDepart" class="btn btn-secondary btn-lg">Departure</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php


    // echo '<script type="text/javascript"> ' 
    ?>





    <!-- javascript bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="./script.js"></script>
</body>

</html>