
<!DOCTYPE html>
<html>
<head>
	<title>Ask Question</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
  <script  src="main.js"></script>

</head>
<body>
	<nav class="navbar navbar-expand-lg  bg-dark sticky-top">
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
<div class="container" style="margin-top: 3%">
	<h2 class="text-secondary">Ask question</h2>
	  <div class="border"  style="border:1px  solid; padding: 2%;">
      <form action="thanks_you.php" method="POST">
      <div class="form-group">
        <label for="title"><h6>Title*</h6></label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter a short and proper title for your question">
      </div>
      <div class="form-group">
        <label for="Description"></label><h6>Description</h6></label>
        <textarea class="form-control" id="Description" name="description" rows="6"></textarea>
      </div>
      <div class="form-group">
      <label for="tag"><h6>Tag</h6></label>
        <input type="text" class="form-control" id="tag" name="tags" placeholder="tag1,tag2,tag3">
      <p class="text-secondary">   tag will help others to find your question faster. Add common separated tags. For eg. Codetrek,frontend,bootstarp </p>
      </div>
      <button class="btn btn-primary" type="submit">Post your question</button>
      </form>
<footer class="page-footer font" style="background-color: #f0f5f5;margin-top: 40px;">
  <div class="footer-copyright text-center py-3" style="color:blue;"><i class="fas fa-code"></i>Developed at Codetrek Tehri 2018
  </div>
</footer>

</body>
</html>