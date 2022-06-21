<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	     <!-- fontawesome CDN -->
	  	 <link rel="stylesheet" href="https://use.fontawesome.com/releases/v6.1.1/css/all.css" integrity="sha384-/frq1SRXYH/bSyou/HUp/hib7RVN1TawQYja658FEOodR/FQBKVqT9Ol+Oz3Olq5" crossorigin="anonymous">
         
</head>
        <body>
		<?php
		session_start();
		$count = 0;
		if(isset($_SESSION['cart'])){
			$count = count($_SESSION['cart']);

		}
		?>
        <nav class="navbar navbar-light bg-light">
		<div class="container-fluid font-monospace">
		<a class="navbar-brand pd-2"><img src="logo.png" alt=""></a>
		
		
		
		<div class="d-flex">
		<a href="index.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-home"></i> Home</a>
		<a href="viewcart.php" class=" text-warning text-decoration-none pe-2"><i class="fas fa-shopping-cart"></i> Cart(<?php echo $count ?>) |</a>

		<span class ="text-warning pe-2" >
			<i class="fas fa-user-shield"></i>Hello, 
			<?php
				if(isset($_SESSION['user'])){
				echo $_SESSION ['user'];
				echo"
				 | <a href='form/logout.php' class='text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Logout |</a>
				";
			}
			else{
				echo"
				 <a href='form/login.php' class=' text-warning text-decoration-none pe-2'><i class='fas fa-sign-in-alt'></i> Login |</a>
				";
			}
			?>
		
			
			<a href="../admin/mystore.php" class=" text-warning text-decoration-none pe-2"> Admin</a>
			</span>
	
</nav>
</div>

<div class="bg-dark sticky-top font-monospace">
	<ul class="list-unstyled d-flex justify-content-center">
		<li><a href="laptop.php" class="text-decoration-none text-white fs-4 px-5">LAPTOPS</a></li>
		<li><a href="mobile.php" class="text-decoration-none text-white fs-4 px-5">MOBILES</a></li>
		<li><a href="bag.php" class="text-decoration-none text-white fs-4 px-5">BAGS</a></li>
	</ul>
</div>
</body>
</html>