<html>
	<head>
		<title>Form Register</title>
		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
	<div class="container">
		<div class="card">
			<div class="card-header">
				Form Register
			</div>
			<div class="card-body">
				<?php 
				if($this->session->flashdata('error') !='')
				{
					echo '<div class="alert alert-danger" role="alert">';
					echo $this->session->flashdata('error');
					echo '</div>';
				}
				?>
				<form method="post" action="<?php echo base_url(); ?>index.php/register/proses">
					<div class="form-group">
						<label for="username">Username</label>
						<input type="text" class="form-control" name="username" id="username" placeholder="Enter Username">
					</div>
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" name="name" id="name" placeholder="Nama">
                    </div>
                    <div class="form-group">
						<label for="nama">Email</label>
						<input type="text" class="form-control" name="email" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
						<label for="nama">Phone</label>
						<input type="text" class="form-control" name="phone" id="phone" placeholder="Number">
                    </div>
                    <div class="form-group">
						<label for="password">Password</label>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password">
                    </div>
                    <div class="form-group">
						<label for="nama">Select Level</label>
						<input type="text" class="form-control" name="level" id="level" placeholder="level">
                    </div>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
			</div>
		</div>
	</div>		
	</body>
</html>