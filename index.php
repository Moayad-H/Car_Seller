<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "carSeller";

$conn = new mysqli($servername, $username, $password, $database);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Play&family=Playfair+Display&family=Roboto:wght@700&display=swap" rel="stylesheet">
  <title>Car/Seller</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  <link rel="stylesheet" href="design.css">
</head>

<body>
  
  <!-- NAVBAR  !-->
    
  <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark sticky-top" data-bs-theme="dark">
    <div class=" container-fluid">
      <a class="navbar-brand" href="index.php">
        &lt;Car/Seller&gt;</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse  " id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
          <li class="nav-item ">
            <a class="nav-link active" aria-current="page" href="#">Home</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Dropdown
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Action</a></li>
              <li><a class="dropdown-item" href="#">Another action</a></li>
              <li>
                <hr class="dropdown-divider">
              </li>
              <li><a class="dropdown-item" href="#">Something else here</a></li>
            </ul>
          </li>
          <li class="nav-item ">
            <a class="nav-link disabled">Disabled</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2 nav-search" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success btn-nav-search" type="submit">Search</button>
        </form>

      </div>
    </div>
  </nav>
<!--NAVBAR END -->

<!-- Home Start-->
  <div class="main">
    <div class="d-flex justify-content-center align-item-center ">
      <div class="row justify-content-center align-item-center">
        <div class="col">
          <h1 class="main-parallax" data-speed="-2">Find Your Car</h1>
        </div>
        <div class="row">
          <div class="col">
            <img src="pngwing.com.png" alt="">
  
          </div>
        </div>
      </div>
      
    
    </div>
  </div>
<!-- Home End-->
<?php

  $query = "SELECT * FROM cars";
  $result = $conn->query($query);

  // Check if any records were returned
  if ($result->num_rows > 0) {
  // Loop through each row and display the car information
  while ($row = $result->fetch_assoc()) {
 ?>
      <a class="btn" href="">
          <div class="card cb1" style="width: 20rem;">


              <img src="<?php echo $row["image_path"]?>" class="card-img-top" alt="...">

              <div class="card-body">
                  <h5 class="card-title"><?php echo $row["year"].' '.$row["manufacturer"].' ',$row["car_model"] ?></h5>
                  <hr>
                  <p class="card-text "><?php echo $row["description"]?></p>
                  <p class="card-text km">KM Driven: <?php echo $row["kilometers"]?></p>


              </div>
              <div class="card-footer  text-body-secondary">
                  <p class="card-text  price" ><?php echo $row["price"]?></p>
              </div>
          </div>
      </a>

      <?php
  }
  } else {
  echo "No cars available.";}
?>
  <!--CARD

<a class="btn" href="">
  <div class="card cb1" style="width: 20rem;">
    <img src="https://media.carsandbids.com/cdn-cgi/image/width=800,height=500,quality=70/438ad923cef6d8239e95d61e7d6849486bae11d9/photos/rbJXwwVL-1T6zsCLmHG-(edit).jpg?t=168177016484" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Maxza RX-5 1992</h5>
      <p class="card-text ">37,800 Miles, 5-Speed Manual, Reviewed by Jay Leno and Doug DeMuro</p>
      
    </div>
  </div>
</a>
-->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script src="script.js"></script>
</body>

</html>