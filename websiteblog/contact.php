<?php
$insert = false;
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "";
    //$database="blog";

    $conn = mysqli_connect($server, $username, $password);
    if (!$conn) {
        die("connection failed:" . mysqli_connect_error());
    }
    $name = $_POST["name"];
    $email = $_POST["email"];
    $gender = $_POST["gender"];
    $phone = $_POST ["phone"];  
    $query = $_POST["query"];
    $concern = $_POST["concern"];
    $sql = "INSERT INTO `blog`.`blog` (`name`, `email`, `gender`, `phone`, `query`, `concern`, `date`) 
        VALUES ('$name', '$email', '$gender', '$phone', '$query','$concern', current_timestamp())";
    if ($conn->query($sql) == true) {
        $insert = true;
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
    if ( $phone < 10 && $phone > 10) {  
        $ErrMsg = "Mobile must have 10 digits.";  
    }  
    $conn->close();
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Website Blog!</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="/websiteblog">icoder</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="/websiteblog/home.php">Home</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="/websiteblog/about.php">About</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Topics
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">Technology</a></li>
                            <li><a class="dropdown-item" href="#">Web development</a></li>
                            <div class="dropdown-divider"></div>
                            <li><a class="dropdown-item" href="#">Support</a></li>
                            <li><a class="dropdown-item" href="#">Write for us</a></li>
                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link active" href="/websiteblog/contact.php">Contact Us</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
    <?php
    if($insert == true){
     echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
     <strong>SUCCESS!</strong> Thanks for submitting your form! We will look into it.
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
     </div>';
    }
    ?>
    <div class="container my-2 ">
        <h2 class="text-center">Contact Us </h2>
        <form action="/websiteblog/contact.php" method="POST">
            <div class="form-group col-md-8 ">
                <label for="name">Username</label>
                <input type="text" maxlength="11" class="form-control" id="name" name="name" placeholder="enter your name" aria-describedby="emailHelp">
            </div><br>
            <div class="form-group col-md-8 ">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="enter your email">
            </div><br>
            <div class="form-group col-md-8 ">
                <label for="gender">Gender</label>
                <input type="text" class="form-control" id="gender" name="gender" placeholder="enter your gender">
            </div><br>
            <div class="form-group col-md-8 ">
                <label for="username">Phone</label>
                <input type="number"  class="form-control" id="phone" name="phone" placeholder="enter 10 digit number">
            </div><br>
            <div class="form-group col-md-8 ">
                <label for="query">Select Query</label>
                <input type="text" class="form-control" id="query" name="query" placeholder="enter your query">
            </div><br>
            <div class="form-group col-md-8">
                <label for="concern">Elaborate Your Concern</label>
                <textarea class="form-control" id="concern" name="concern" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary my-2 ">Submit</button>

        </form>

    </div>
    <footer class="container">
        <p class="float-end"><a href="#">Back to top</a></p>
        <p>© 2021–2022 icoder, Inc. · <a href="#">Privacy</a> · <a href="#">Terms</a></p>
    </footer>


    <!-- Optional JavaScript; choose one of the two! -->
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>