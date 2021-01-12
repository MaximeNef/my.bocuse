<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <!-- frontAwesome --> 
    <script src="https://use.fontawesome.com/b3178bb50e.js"></script>
    <!-- personal sheet css -->
    <link rel="stylesheet" href="style.css">
    
<title>My Beaucuz</title>
</head>

<body>
    <!-- General recipe list page -->
    <!-- Burger Menu -->
    
    <nav class="navbar navbar-light bg-light navbar-collapse-lg">
        <div class="container-fluid justify-content-end"> 
            <h1>My beaucuz</h1>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="container-fluid">
                <div class="collapse navbar-collapse drop-down" id="navbarSupportedContent">
                    <ul class="nav flex-column align-items-end">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Personnel informations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">New recipe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Log out</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Profil part -->
    <div class="container-fluid">
        <div class="row gx-0">
            <div class="col-3" id="profilPart">
                <h2 class="myProfilTitle">My profil</h2>
                <i class="fa fa-user-circle fa-5x icone"></i>
                <p id="name">NOM PRENOM</p>
                <p id="email">EMAIL@GMAIL.COM</p>
            </div>
            <!-- List recipe -->

            <div class="col-9" id="recipeList">
                <div>
                    <h2 class="recipeTitle">List of recipes</h2>
                    <div class="">
                        <button type="button" class="btn btn-primary btn-lg">Arrival</button>
                        <button type="button" class="btn btn-secondary btn-lg">Departure</button>
                    </div>
                </div>
            </div>
        </div>

    </div>


    <!-- javascript bootstrap -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
</body>

</html>