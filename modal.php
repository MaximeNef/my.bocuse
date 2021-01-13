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

    <button type="button" class="btn" data-toggle="modal" data-target="#addRecipeModal">
        <i class="ion-android-add"></i> Add a recipe </button>

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
                                <input type="text" class="form-control" id="recipeTitle" placeholder="Chicken Parmesan">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="mealcategory">Type</label>
                                <select id="mealcategory" class="form-control">
                                    <option selected>Choose...</option>
                                    <option value="Starter">Starter</option>
                                    <option value="Main">Main</option>
                                    <option value="Dessert">Dessert</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="releaseDate">Date</label>
                                <input type="date" class="form-control" id="releaseDate">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="rating">Rating</label>
                                <div class="container d-flex justify-content-center">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="stars">
                                                <input class="star star-5" id="star-5" type="radio"
                                                        name="star" /> <label class="star star-5" for="star-5"></label>
                                                    <input class="star star-4" id="star-4" type="radio" name="star" />
                                                    <label class="star star-4" for="star-4"></label> <input
                                                        class="star star-3" id="star-3" type="radio" name="star" />
                                                    <label class="star star-3" for="star-3"></label> <input
                                                        class="star star-2" id="star-2" type="radio" name="star" />
                                                    <label class="star star-2" for="star-2"></label> <input
                                                        class="star star-1" id="star-1" type="radio" name="star" />
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
      <input type="text" class="form-control text-capitalize" id="ingredients" placeholder="ingredients">
      
                                <label for="instructions">Instructions</label>
                                <textarea class="form-control" id="instructions" row="50"> </textarea>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class=" form-group modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/rating.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>