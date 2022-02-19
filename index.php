<!DOCTYPE html>
<html>
<head>
	<title>Create</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="container">
<form action="create.php" method="post">
	<h4 class="display-4 text-center">Create</h4><hr><br>

<?php if (isset($_GET['error'])) { ?>
	<div class="alert alert-danger" role="alert">
  	<?php echo $_GET['error'];?>
	</div>
<?php }?>

  <div class="form-group">
    <label for="name" class="form-label">Name</label>
    <input type="name" class="form-control" id="name" name="name" placeholder="Enter name">
  </div>

  <div class="form-group">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
  </div>

  <button type="submit" class="btn btn-primary" name="create">Create</button>
  <a href="read.php" class="link-primary">View</a>
</form>
</div>
</body>
</html>