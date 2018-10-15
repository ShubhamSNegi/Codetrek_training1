<!DOCTYPE html>
<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "321sakshi";
$dbname = "codetrek_forum";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

$sql = "SELECT *FROM questions";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
      echo "title".$row["title"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?> 

</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Codetrek_index</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script src="main.js"></script>

</head>
<body>
<nav class="navbar navbar-expand-lg  bg-dark ">
  <a class="navbar-brand" href="#" style="color:white">Codetrek Forum</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link " href="answer.php" style="color:white">Questions <span class="sr-only">(current)</span></a>
    </div>
    <div class="navbar ml-auto">
      <i class="fas fa-cog" style="color:white ;margin-right:10px;"></i>
      <i class="fas fa-caret-down"style="color:white "></i>
    </div>
  </div>
</nav>
<div class=" row mt-5" style="margin-left:11%">
	<div class="col-md-3">
	<h4 class="question">Questions</h4></div>
	<div class="col-md-3"></div>
	<div class="col-md-3"><div class="input-group mb-3 question">
  <input type="text" class="form-control" placeholder="Search Questions" aria-label="Search" style="width:50px;">
  <div class="input-group-append">
    <button class="btn btn-outline-secondary bg-primary" type="button" id="button-addon2" ><i class="fas fa-search"></i></button>
  </div></div></div>
  <div class="col-md-3 question"><a class="btn btn-outline-primary" href="new-html.php" role="button">Ask question</a></div>
  
</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-left:11%;margin-right:12%;margin-top:2%; padding: 10px;">
	<h5>How do I use Git and Github?</h5>
	<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br><span class="badge badge-secondary bg-info">git</span> <span class="badge badge-secondary bg-info ">github</span> <span class="badge badge-secondary bg-info">vcs</span></p>
  
	<p><span style="color:blue">Abhisek Pokriyal</span> asked on Sep 27,2018</p>
	<i class="far fa-thumbs-up"> 14</i> <i class="far fa-thumbs-down"> 2</i> <i class="far fa-comments"> 14 answers</i>
</div><div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-left:11%;margin-right:12%;margin-top:2%; padding: 10px;">
	<h5>How do I install Bootstrap4?</h5>
	<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br><span class="badge badge-secondary bg-info">bootstrap</span> <span class="badge badge-secondary bg-info ">frontend</span> </p>
  
	<p><span style="color:blue">Vikas Rinvi</span> asked on Sep 27,2018</p>
	<i class="far fa-thumbs-up"> 14</i> <i class="far fa-thumbs-down"> 2</i> <i class="far fa-comments"> 14 answers</i>
</div><div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-left:11%;margin-right:12%;margin-top:2%; padding: 10px;
    box-shadow: 2px 1px 2px 2px grey;">
	<h5>What is Fontawesome and Where can i install them?</h5>
	<p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.<br><span class="badge badge-secondary bg-info">fontawesome</span> <span class="badge badge-secondary bg-info ">icons</span> <span class="badge badge-secondary bg-info">frontend</span> </p>
  

<p><span style="color:blue">Satendra Rawat</span> asked on Sep 27,2018</p>
	<i class="far fa-thumbs-up"> 14</i> <i class="far fa-thumbs-down"> 2</i> <i class="far fa-comments"> 14 answers</i>
</div>
<div class="shadow-sm p-3 mb-5 bg-white rounded" style="margin-left:11%;margin-right:12%;margin-top:2%; padding: 10px;
    box-shadow: 2px 1px 2px 2px grey;">
    <?php echo $row["title"]; ?>
  <p class="text-muted"><br><span class="badge badge-secondary bg-info">fontawesome</span> <span class="badge badge-secondary bg-info ">icons</span> <span class="badge badge-secondary bg-info">frontend</span> </p>
  

<p><span style="color:blue">Satendra Rawat</span> asked on Sep 27,2018</p>
  <i class="far fa-thumbs-up"> 14</i> <i class="far fa-thumbs-down"> 2</i> <i class="far fa-comments"> 14 answers</i>
</div>



<footer class="page-footer font" style="background-color: #f0f5f5;">
  <div class="footer-copyright text-center py-3" style="color:blue;"><i class="fas fa-code"></i>Developed at Codetrek Tehri 2018
  </div>
</footer>
</body>
</html> 