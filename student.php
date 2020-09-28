
<?php include_once "app/autoload.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
	
	

	<div class="wrap-table shadow">
        <a class="btn btn-sm btn-primary"  href="index.php">Add new students</a>
		<div class="card">
			<div class="card-body">
				<h2>All Data</h2>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
                            <th>age</th>
                            <th>gender</th>
                            <th>location</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>

                    <?php

                        $data = $connection ->query( "SELECT * FROM students" );

                        $i = 1;

                        while ( $student = $data -> fetch_assoc()):

                    ?>

						<tr>
							<td><?php echo $i; $i++?></td>
							<td><?php echo $student['name'];?></td>
							<td><?php echo $student['email'];?></td>
							<td><?php echo $student['cell'];?></td>
                            <th><?php echo $student['age'];?></th>
                            <th><?php echo $student['gender'];?></th>
                            <th><?php echo $student['location'];?></th>
                            <td><img src="images/<?php echo $student['image'];?>" alt=""></td>
							<td>
								<a class="btn btn-sm btn-info" href="view.php?id=<?php echo $student['id'];?>">View</a>
								<a class="btn btn-sm btn-warning" href="edit.php">Edit</a>
								<a class="btn btn-sm btn-danger" href="delete.php">Delete</a>
							</td>
						</tr>
                    <?php endwhile; ?>

						

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>