<?php
$servername = "localhost";
$username = "root";
$password = "321sakshi";
$dbname = "codetrek_forum";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$title=$_POST['title'];
$description=$_POST['description'];
$tags=$_POST['tags'];

$sql = "INSERT INTO questions (title, description, tags,created_at,updated_at)
VALUES ('$title', '$description', '$tags','time()','$time()')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<title>thanks-you</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark ">
  <a class="navbar-brand" href="inde.php" style="color:white">Codetrek Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="answers.html" style="color:white">Questions <span class="sr-only">(current)</span></a>
    </div>
    <div class="navbar ml-auto">
      <i class="fas fa-cog" style="color:white ;margin-right:10px;"></i>
      <i class="fas fa-caret-down"style="color:white "></i>
    </div>
  </div>

</nav>
<div class="container mt-5">
  <div class="alert alert-success " role="alert">
  <h4 class="alert-heading ">Thank you</h4>
  <p>your data is succesfully updated.</p>
  <hr>
  <p class="mb-0">your data is:</p>
  <ul>
    <?php
    echo "<li>".$title."</li>";
    echo "<li>".$description."</li>";
    echo "<li>".$tags."</li>";
    echo "<li>".date('D Y F',time())."</li>"; 
    echo "<li>".date('D Y F',time())."</li>"; 

    ?>
  </ul>
  
</div></div>
<footer class="page-footer font" style="background-color: #f0f5f5;margin-top: 40px;">
  <div class="footer-copyright text-center py-3" style="color:blue;"><i class="fas fa-code"></i>Developed at Codetrek Tehri 2018
  </div>
</footer>
</body>
</html>