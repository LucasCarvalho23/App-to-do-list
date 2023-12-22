<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>App Lista Tarefas</title>

		<link rel="stylesheet" href="css/style.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
	</head>

	<body>

		<nav class="navbar navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="#">
					<img src="img/logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
					App To Do List
				</a>
			</div>
		</nav>

		<div class="container app">
			<div class="row">

				<div class="col-md-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Pending tasks</a></li>
						<li class="list-group-item active"><a href="#">New task</a></li>
						<li class="list-group-item"><a href="all_tasks.php">All tasks</a></li>
					</ul>
				</div>

				<div class="col-md-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">

								<h4>New task</h4>
								<hr />

								<form>

									<div class="form-group description-class">
										<label>Task description:</label>
										<input type="text" class="form-control" placeholder="Exemple: Wash the car">
									</div>

									<button class="btn btn-secondary">Register</button>

								</form>

							</div>
						</div>
					</div>
				</div>

			</div>
		</div>

	</body>
</html>