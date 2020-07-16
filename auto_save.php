<?php include 'includes/header.php'; ?>
</head>
<body>
	<?php include 'includes/navbar.php' ?>
	<div class="container">
		<div class="row my-4">
			<div class="col-md-6 offset-md-3">
			<h2 class="text-center">Auto Save</h2>
			<div class="card p-3 border-info">
				<form action="" id="myform" name="myform" class="border-dark">
					<label for="name">Name</label>
					<input type="text" class="form-control" name="name" value="" /><br />
					<label for="email">Email</label>
					<input type="text" class="form-control" name="mail" value="" /><br />
					<label for="Comment">Comment</label>
					<textarea name="" id="" cols="30" rows="5" class="form-control"></textarea>
					<!-- <input type="text" name="comment" value="" size="50" /> -->
					
					<input type="reset" class="btn btn-dark my-3" value="Clear text">
				</form>
			</div>	
			</div>
		</div>
	</div>


	

<script src="js/jquery-3.3.1.min.js" type="text/javascript"></script>
<script src="js/sisyphus.js" type="text/javascript"></script>
<script src="js/sisyphus.min.js" type="text/javascript"></script>

<script type="text/javascript">
$('#myform').sisyphus();
</script>
<?php include 'includes/footer.php'; ?>