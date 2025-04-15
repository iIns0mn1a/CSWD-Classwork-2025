<!DOCTYPE html>
<html lang="en">
<head>
  <?php include 'inc/config.php'; ?>
  <title>Bootstrap 5 Example (LOCAL)</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/MY-CUSTOM-STYLE-SHEET-HERE.css">
</head>
<body>

<?php include 'inc/nav.php'; ?>
<?php include 'inc/header.php'; ?>
  
<div class="container mt-5">

  <div class="row">
    <div class="col-md-4">
      <h3>Column 1</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-md-4">
      <h3>Column 2</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
    <div class="col-md-4">
      <h3>Column 3</h3>        
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit...</p>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris...</p>
    </div>
  </div> <!-- End of Row -->

</div> <!-- End of Container -->

<?php include 'inc/footer.php'; ?>
</body>
</html>
