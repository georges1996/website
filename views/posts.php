<link rel="stylesheet" href="../index.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<script src="https://use.fontawesome.com/1fe55a52b0.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<nav class="navbar navbar-light bg-light ">
  <a class="navbar-brand text-color-2" href="index.php">George Schena</a>
  <div class="navbar-right">
    <a class="navbar-item text-color-2" href="posts.php">Posts</a>
  </div>
</nav>

<div class="container-fluid">

</div>

<footer class="footer">
  <div class="container-fluid dark-blue-background py-4">
    <span class="text-color-1">Thanks for visiting</span>
  </div>
</footer>

<?php

$request = $_SERVER['REQUEST_URI'];

switch ($request) {
    case '/' :
        require __DIR__ . '/index.php';
        break;
    case '' :
        require __DIR__ . '/index.php';
        break;
    case '/posts' :
        require __DIR__ . '/views/posts.php';
        break;
    default:
        http_response_code(404);
        require __DIR__ . '/views/404.php';
        break;
}
