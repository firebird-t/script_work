<!doctype html>
<html lang="en">
<head>
	<title>Cadastro de itens</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="collapse navbar-collapse" id="navbarNavDropdown">
		  <ul class="navbar-nav">
		    <li class="nav-item active">
		      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="results.php">Resultados</a>
		    </li>
		    <li class="nav-item">
		      <a class="nav-link" href="cadastro.php">Cadastro Item</a>
		    </li>
		  </ul>
		</div>
	</nav>

	<div id="container">
		
		<form>
		  <div class="form-group">
		    <label for="email">Nome do Item</label>
		    <input type="text" class="form-control" id="email" aria-describedby="emailHelp">		
		  </div>
		  <div class="form-group">
		    <label for="description">Descrição</label>
		    <input type="text" class="form-control" id="description" placeholder="Password">
		  </div>
		  <div class="form-check">
		    <label class="form-check-label">
		      <input type="text" name="">
		    </label>
		  </div>
		  <button type="submit" class="btn btn-primary">Cadastro</button>
		</form>
	</div>

	<script type="text/javascript">
		function insert(){
			$.ajax({
				url: 'insert.php',
				type: 'POST',
				dataType: 'html',
				data: {
					op: 'op1'
				},
			})

			.done(function(data) {
				console.log("success");
			})

			.fail(function(data) {
				console.log("error");
			})

			.always(function(data) {
				console.log("complete");
			});

		}
	</script>
</body>
</html>