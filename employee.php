<?php include 'header.php'; ?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			<div class="card mt-5">
				<div class="card-header">
					Employee Panel
				</div>
				<div class="card-body">
					<h1 class="text-center"><?php echo $_SESSION['name']; ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include 'footer.php'; ?>