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
        $_SESSION['userid']
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
            <div class="neuro">
                <h2 class="myProfilTitle">My profil</h2>
                <i class="fa fa-user-circle fa-5x icone"></i>
                
                <p id="name"><?php echo $name_complete['first_name'] . $name_complete['last_name']; ?></p>
                <p id="email"><?php echo $_SESSION["email"] ?></p>

                 <?php include('modal.php'); ?> 
            
               
               <div class="neuroph">
                <button class="btn btn-dashboard"><a href="./logout.php">Log out</a></button>
                </div>
                
    </div>
    <!-- Modal -->
    <div class="modal fade" id="addRecipeModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ModalLabel">Add a new recipe</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="recipeTitle">Title</label>
                                <input type="text" class="form-control" id="recipeTitle" placeholder="Chicken Parmesan" name="plat">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mealcategory">Type</label>
                                <select id="mealcategory" class="form-control" name="category">
                                    <option selected>Choose...</option>
                                    <option value="Starter" >Starter</option>
                                    <option value="Main" >Main</option>
                                    <option value="Dessert" >Dessert</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="releaseDate">Date</label>
                                <input type="date" class="form-control" id="releaseDate" name="date">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rating">Rating</label>
                                <div class="container d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="stars">
                                                <input class="star star-5" id="star-5" type="radio"
                                                        name="star" value="five"/>
                                                         <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star" value="four"/>
                                                    <label class="star star-4" for="star-4"></label> <input
                                                        class="star star-3" id="star-3" type="radio" name="star" value="three"/>
                                                    <label class="star star-3" for="star-3"></label> <input
                                                        class="star star-2" id="star-2" type="radio" name="star" value="two"/>
                                                    <label class="star star-2" for="star-2"></label> <input
                                                        class="star star-1" id="star-1" type="radio" name="star" value="one"/>
                                                    <label class="star star-1" for="star-1"></label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group col-12 col-md-12">
                            
                            <label for="ingredients">Ingredients</label>
      <input type="text" class="form-control text-capitalize" id="ingredients" placeholder="ingredients" name="ingredients">
      
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="instructions" row="50" name="instru"> </textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class=" form-group modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary" name="save">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
            </div>

            <!-- List recipe -->
            <div class="col-9" id="recipeListPart">     
            <h2 > THE RECETTES</h2>  
        
            <?php
            $sql = "SELECT FK_id_users, titleR,last_name, first_name, dateR, ingredientR, difficultyR  FROM recettes INNER JOIN users on recettes.FK_id_users = users.id";
            $resultset = mysqli_query($conn, $sql) or die("database error:". mysqli_error($conn));
           
            while($record = mysqli_fetch_assoc($resultset)) {
            ?>
        
    <div class="card border border-white"> 
       
         <div class="neuros">
        <div class="card-body recipes">
            <h4 class="card-title"><?php echo $record['titleR']; ?></h4>
            <h5 class="card-subtitle mb-2 text-muted"><?php echo $record['first_name'].' '.$record['last_name']; ?> </h5>
            <h6 class="card-subtitle mb-2 text-muted"><?php echo $record['dateR']; ?></h6>
            <p class="card-text"><?php echo $record['ingredientR']; ?></p>
            <div class="col-lg-1 grandBlocnote">
             
                <?php 
                switch($record['difficultyR']){
                    case  $record['difficultyR'] == 'one':
                        echo '<div class="note1">★</div>';
                        break;
                    case  $record['difficultyR'] == 'two':
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        break;
                    case  $record['difficultyR'] == 'three':
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        break;
                    case  $record['difficultyR'] == 'four':
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        break;
                    case  $record['difficultyR'] == 'five':
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                        echo '<div class="note1">★</div>';
                            break;
                }
            
               ?>
               
            </div>
        </div>
    </div>
   
           
    </div> 
    <?php }
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