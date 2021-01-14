<?php


if(!empty($_POST['plat']) AND !empty($_POST['category']) AND !empty($_POST['date']) AND !empty($_POST['star']) AND !empty($_POST['ingredients']) AND !empty($_POST['instru'])){
$plat=$_POST['plat'];
$category=$_POST['category'];
$date=$_POST['date'];
$star=$_POST['star'];
$ingredients=$_POST['ingredients'];
$instru=$_POST['instru'];
$save=$_POST['save'];

$recette = $db->prepare("INSERT INTO recettes(FK_id_users, titleR, typeR, dateR, difficultyR, ingredientR, instructionR)
                        VALUES(?, ?, ?, ?, ?, ?, ?)");
 $recette->execute([
     $_SESSION['id'][0],
    strip_tags(trim($plat)),
    strip_tags(trim($category)),
    strip_tags(trim($date)),
    strip_tags(trim($star)),
    strip_tags(trim($ingredients)),
    strip_tags(trim($instru))
 ]) ;                    
print_r($_POST);
}

?>


<!-- Button trigger modal -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <script src="https://use.fontawesome.com/b3178bb50e.js"></script>
    <link rel="stylesheet" href="assets/css/Login-Form-Dark.css">
<title>beacuz</title>
</head>

<body>
    <div class="container">
<div class="neuroph">
    <button type="button" class="btn">
         ARRIVAL </button></div>
<div class="neuroph">
    <button type="button" class="btn"  >
         DEPART </button></div></div>

         <p class="para">My recipes : 
                    <ul class="listRecipesProfil">
                        <li class="list">Name of recipe</li>
                        <li class="list">Name of recipe</li>
                        <li class="list">Name of recipe</li>
                    </ul>
                </p>
<div class="neuroph">
    <button type="button" class="btn" data-toggle="modal" data-target="#addRecipeModal">
        <i class="ion-android-add"></i> Add a recipe </button></div>

    
   
    
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/rating.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>