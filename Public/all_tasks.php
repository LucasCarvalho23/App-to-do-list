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

				<div class="col-sm-3 menu">
					<ul class="list-group">
						<li class="list-group-item"><a href="index.php">Pending tasks</a></li>
						<li class="list-group-item"><a href="new_tasks.php">New task</a></li>
						<li class="list-group-item active"><a href="#">All tasks</a></li>
					</ul>
				</div>

				<div class="col-sm-9">
					<div class="container pagina">
						<div class="row">
							<div class="col">
								<h4>All tasks</h4>
								<hr />

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Watch the car (status)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>

								<div class="row mb-3 d-flex align-items-center tarefa">
									<div class="col-sm-9">Walk the dog (status)</div>
									<div class="col-sm-3 mt-2 d-flex justify-content-between">
										<i class="fas fa-trash-alt fa-lg text-danger"></i>
										<i class="fas fa-edit fa-lg text-info"></i>
										<i class="fas fa-check-square fa-lg text-success"></i>
									</div>
								</div>
								
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		
	</body>
</html>