<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home-page</title>
	<?php
	include 'header.php';
	?>
</head>
<body>
<div class="container-fluid">
<div class="col-md-12">
<div class="row">	


<h1 class="text-warning font-monospace my-3 text-center">BAG</h1>
<?php
include 'config.php';
$Record =mysqli_query($con, "SELECT * FROM `tblproduct`");
	while( $row=mysqli_fetch_array($Record)){
			$check_page = $row['PCategory'];
			if($check_page ==='Bag'){

			echo "

		<div class='col-md-6 col-lg-4 m-auto mb-3'>
		<form action ='insertcart.php' method =  'POST'>
		<div class='card m-auto' style='width: 18rem;'>
			<img src='../admin/product/$row[PImage]'class ='card-img-top m-auto ' style = 'width :170px; height:300px'>
			<div class='card-body text-center'>
			<h5 class='card-title text-danger fs-4 fw-bold'>$row[PName]</h5>
			<p class='card-text text-danger fs-4 fw-bold'>";?>RS: <?php echo number_format($row['PPrice'],2)?> <?php echo "</p>
			<input type='hidden' name = 'PName' value ='$row[PName]'> 
            <input type='hidden' name = 'PPrice' value ='$row[PPrice]'> 
            <input type='number'required name ='PQuantity' min='1' oninput='validity.valid||(value='');' placeholder = 'quantity'><br><br>
			<input type='submit' name ='addcart' class = 'btn btn-warning text-white w-100' value = 'Add To cart'>				
					
			</div>
			</div>
			</form>
			</div>

		
		";
			
            }
	}	
	
?>
	<?php
	include'footer.php';
	?>
</div>
</div>
</div>


</body>
</html>