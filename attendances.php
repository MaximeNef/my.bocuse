<?php
session_start();
$db = new PDO('mysql:host=localhost;dbname=pzqrmnyr_mybocuse', 'pzqrmnyr_ak', 'Agneskabongo95', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>

<?php
/* Database connection start */
$servername = "localhost";
$username = "pzqrmnyr_ak";
$password = "Agneskabongo95";
$dbname = "pzqrmnyr_mybocuse";
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
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    $student="SELECT first_name, last_name, date, time_begin, time_end FROM users INNER JOIN connection on users.id = connection.FK_id_users";
    $result=mysqli_query($conn, $student)or die("Connection failed: " . mysqli_connect_error());
    while($record=mysqli_fetch_assoc($result)){
        echo $record['first_name'].'      '.$record['last_name'].'    /    '.$record['time_begin'].'   /   '.$record['time_end'];
    }
    ?>
   
    <div>
                <button class="btn btn-dashboard"><a href="./dashboardAdmin.php"> Return to dashboard </a></button> 
        </div>
</body>
</html>