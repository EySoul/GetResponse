<?php 
require_once('./system/controller/urls.php');

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Sidebars · Bootstrap v5.0</title>

    <script src="/js/jquery-2.1.3.min.js"></script>

    <!-- Bootstrap core CSS -->
  <!-- <link href="/css/bootstrap.min.css" rel="stylesheet"> -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="/css/sidebars.css" rel="stylesheet">
  </head>
  <body>

<main>
  <h1 class="visually-hidden">Sidebars examples</h1>

  <div class="d-flex flex-column flex-shrink-0 p-3 text-white bg-dark" style="width: 280px;">
    <hr>
    <ul class="nav nav-pills flex-column mb-auto">
      <li class="nav-item">
        
      </li>
      <li>
        <?php 
          echo '<input type="submit" class="btn btn-light" name="action1" value="'. get::getResFrom('').'">'
        ?>
        <input type="submit" class="btn btn-light" name="action1" value="">
      </li>
      <li>
        <button type="button" class="btn btn-light">Light</button>
      </li>
      <li>
        <button type="button" class="btn btn-light">Light</button>
      </li>
      <li>
       <button type="button" class="btn btn-light">Light</button> 
      </li>
    </ul>
  </div>
  <div class="b-example-divider"></div>
</main>


    <script src="../../js/bootstrap.bundle.min.js"></script>

    <script src="../../js/sidebars.js"></script>
  </body>
</html>




