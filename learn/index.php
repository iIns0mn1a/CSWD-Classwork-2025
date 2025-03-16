<!DOCTYPE html>
<html lang="en">
   <head>
<!-- LAST LOCATION: Main PC-->
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <script src="js/bootstrap.bundle.min.js"></script>
      <title>Gilroy McCalla Jr.</title>
      <link rel="stylesheet" type="text/css" href="css/learn-style.css">
</head>
<body>
<div id="main" class="container-fluid p-5 text-black">

    <div class="row rowSpacer">
            <div class="col-md-4">
               <img src="myimg/gilroy-mccalla.JPG" class="img-fluid rounded" width="80%" alt="My Headshote" title="My Headshot" >
            </div>
            <!-- END column -->
          <div class="col-md-8">
               <h1>Gilroy McCalla Jr.</h1>
               <h3 style="color:rgb(67, 67, 67);"><?php echo $_SERVER['HTTP_HOST'];?></h3>
               <br>
               <h4>CSC 2274, Spring 2025 -  In Class Lessons & Homework</h4>
               
               <br><br>
               <a href="/"><button type="button" class="btn btn-warning">Home</button></a>
            </div>
            <!-- END column -->
         </div>
         <!-- END row -->
        <hr>

        <div class="row rowSpacer">
        <div class="col-md-12"> 
<!-- DON'T TOUCH CODE BELOW THIS LINE -->
<?php
$dir = '../learn/';
if ($handle = opendir($dir)) {
  while(false !== ($file = readdir($handle))) 
    {if ($file != "." && $file != ".." && $file != "index.php")
    {if (is_dir("$dir/$file")) $folder_array[] = $file;
else
  $file_array[] = $file;}}closedir($handle);}
if ($file_array)
{sort ($file_array);foreach($file_array as $file)
{echo "<a href='$file'>$file</a><br/>";}}
?>
<!-- DON'T TOUCH CODE ABOVE THIS LINE -->  
    
</div>
</div>
  </div>
  <!-- END main -->      
</body>
</html>