<!-- Button trigger modal -->
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

<button type="button" class="btn" data-toggle="modal" data-target="#addRecipeModal">
<i class="ion-android-add"></i>
</button>

<!-- Modal -->
<div class="modal fade" id="addRecipeModal" tabindex="-1" role="dialog" aria-labelledby="ModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="ModalLabel">Add a new recipe</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input1">input1</label>
      <input type="text" class="form-control" id="input1" placeholder="write something">
    </div>
    <div class="form-group col-md-6">
      <label for="input2">Input2</label>
      <input type="text" class="form-control" id="input2" placeholder="write something here">
    </div>
  </div>
  <div class="form-group">
    <label for="input3">Input3</label>
    <input type="text" class="form-control" id="input3" placeholder="write something here">
  </div>
  <div class="form-group">
    <label for="input4">Input 4</label>
    <input type="text" class="form-control" id="input4" placeholder="write something here">
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="input5">input5</label>
      <input type="text" class="form-control" id="input5">
    </div>
    <div class="form-group col-md-4">
      <label for="input6">input6</label>
      <select id="input6" class="form-control">
        <option selected>Choose...</option>
        <option>...</option>
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">input7</label>
      <input type="text" class="form-control" id="input7">
    </div>
  </div>
</form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

<script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script href="./script.js"></script>
</body>
</html>
