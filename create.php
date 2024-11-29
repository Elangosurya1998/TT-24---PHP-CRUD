
<html>
<head>
	<title>Add Data</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
	<h1 class="alert alert-warning">Simple Form</h1>
	<br/><br/>
	<div class="container mt-3">
	<form action="store.php" method="post" name="form1">
    <div class="mb-3 mt-3">
      <label for="email">First Name:</label>
	  <input class="form-control" type="text" name="firstname"  placeholder="Enter Your Name" required>
    </div>
    <div class="mb-3">
      <label for="pwd">Last Name:</label>
	  <input class="form-control" type="text" name="lastname" required>
    </div>
	<div class="mb-3">
      <label for="pwd">Email:</label>
      <input class="form-control" type="email" name="email" required>
    </div>
    <div class="form-check mb-3">
      <label class="form-check-label">
        <input class="form-check-input" type="checkbox" name="remember"> Remember me
      </label>
    </div>
    <input class="btn btn-success" type="submit" name="Submit" value="Add">
  </form>
</div>
</body>
</html>
