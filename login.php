<?php include 'header.php'; ?>


<div class="container">
	<div class="row">
		<div class="col-md-4 offset-md-4">
			<div class="card mt-5">
				<div class="card-header">
					Employee Login
				</div>
				<div class="card-body ">
					<form action="action.php" method="POST">
					  <div class="form-group">
					    <label for="email">Email address:</label>
					    <input type="email" class="form-control" placeholder="Enter email" id="email" name="email">
					  </div>
					  <div class="form-group">
					    <label for="pwd">Password:</label>
					    <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="password">
					  </div>
					  <button type="submit" class="btn btn-primary btn-block">Login</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>




<?php include 'footer.php'; ?>