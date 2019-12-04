<!DOCTYPE html>
<html lang="en">
<head>
  <title>Meow - Shop thú cưng</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="../libs/ckeditor/ckeditor.js"></script>
  <script src="../libs/ckeditor/adapters/jquery.js"></script>
  <script src="../libs/ckeditor/ckfinder.js"></script>
  <style>
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 650px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      background-color: #f1f1f1; 
      height: 100%;
    }
        
    /* On small screens, set height to 'auto' for the grid */
    @media screen and (max-width: 767px) {
      .row.content {height: auto;} 
    }
  </style>
</head>
<body>
  <?php include("../ktnguoidung/menu_s.php") ?>

<div class="container-fluid">
  <div class="row content">
    <?php include("../ktnguoidung/menu_l.php") ?> 
    <br>
    
    <div class="col-sm-9">
      <div class="container-fluid">  
        <!-- Nhúng phần menu người dùng -->          
        <?php include("../ktnguoidung/menunguoidung.php") ?>
      </div>
      

     
    
