  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Admin Home-Page</title>
  </head>
  <body>
      <!-- Bootstrap CDN -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	     <!-- fontawesome CDN -->
	  	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
	</head>
	<?php
	session_start();
	if(!$_SESSION['admin']){
		header("location:form/login.php");
	}
	?>
<body>
<nav class="navbar navbar-light bg-dark">
	<div class="container-fluid text-white">
		<a class="navbar-brand text-white"><h1>My Store</h1></a>
		<span>
		<i class="fas fa-user-shield"></i>
		Hello, <?php echo $_SESSION['admin'];?> |
		<i class="fas fa-sign-out-alt"></i>
		<a href="form/login.php" class="text-decoration-none text-white">Logout</a> |
		<a href="../user/index.php" class="text-decoration-none text-white">Userpanel</a>
	</span>
	</div>
</nav>
                <div>
                	<h2 class="text-center">Dashboard</h2>
				</div>

				<div class="col-md-6 bg-danger text-center m-auto ">
				<a href="product/index.php" class="text-white text-decoration-none fs5 fw-bold px-5">Add Post</a>
				<a href="user.php" class="text-white text-decoration-none fs5 fw-bold px-5">Users</a>
				<a href="vieworder.php" class="text-white text-decoration-none fs5 fw-bold px-5">View Orders</a>
				</div>


</body>
</html>
  </body>
  </html> 