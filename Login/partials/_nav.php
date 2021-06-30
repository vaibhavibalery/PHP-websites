<?php
if (isset($_SESSION['loggedin']) and $_SESSION['loggedin'] == true) {
  $loggedin = true;
} else {
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
     <a class="navbar-brand" href="/Login">iSecure</a>
     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/Login/welcome.php">Home <span class="sr-only"></span></a>
      </li>';
if (!$loggedin) {
  echo '<li class="nav-item">
        <a class="nav-link" href="/Login/login.php">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/Login/signup.php">Signup</a>
      </li>';
}
if ($loggedin) {
  echo '<li class="nav-item">
        <a class="nav-link" href="/Login/logout.php">Logout</a>
      </li>';
}
echo '</ul>
    <form class="d-flex mx-auto my-2 my-lg-0">
        <input class="form-control me-2 " type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
  </div>
  </div>
</nav>';
