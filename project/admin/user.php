<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin-Manageusers</title>
    <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <?php
    include 'mystore.php';
    $con = mysqli_connect('localhost','root','','ecommerce');
    $Record = mysqli_query($con,"SELECT * FROM `tbluser`");
    $row_count = mysqli_num_rows($Record);

    ?>
    <div class="container mt-5">
    <div class="row">
    <div class="col-md-10">
    
    <table class="table table-secondary table-bordered">
        <thead class="text-center">
            <th>S.NO</th>
            <th>Name</th>
            <th>Email</th>
            <th>Number</th>
            <th>Delete</th>
</thead>
<tbody class="text-center text-dark">
<?php
$i = 0;
while($row = mysqli_fetch_array($Record)){
    echo"
<tr>
<td> ";?><?php echo ++$i; ?><?php echo "</td>
<td>$row[Username]</td>
<td>$row[Email]</td>
<td>$row[Number]</td>
<td><a href = 'delete.php ? ID=$row[Id]' class ='btn btn-outline-dark'>Delete</td>
</tr>
";
}
?>
</tbody>
</table>
</div>
<div class="col-md-2 pr-5 text-center">
<h3 class="text-dark">Total </h3>
<h1 class="bg-danger text-white"><?php echo $row_count;?></h1>
</div>
</div>
</div>
</body>
</html>