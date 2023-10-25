<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update mysqli</title>
      <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>
<?php include"dbConnection.php";?>
 <?php include"myGuestTableFunc.php"?>
<?php 
if (isset($_POST['submitUpdate'])) {
    UpdateCustomerInfo();
};

//delete row
if (isset($_POST['submitDelete'])) {
    DeleteTableRow();
}

?>

<body>


<div class="container">
    <form action="mysql.update.php" method="post" class="col-6">
<div class=" form-floating ">
  <input type="text" name="username" id="" class="form-control" placeholder="" aria-describedby="helpId">
  <label for="" class="form-label ">Name</label>
  <small id="helpId" class="text-muted">Help text</small>
</div>
<div class="mb-3 form-floating">
  <input type="password" class="form-control" name="password" id="" placeholder="">
  <label for="" class="form-label">Password</label>
</div>
<select name="id" id="" class="mb-3">
   <?php 
   showSelectID()
     ?>
</select>
 
<br/>
<button type="submit" name="submitUpdate" class='btn btn-outline-secondary'>UPDATE</button>
<button type="submit" name="submitDelete" class='btn btn-outline-secondary'>DELETE</button>
 </form>
 </div>


    <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>