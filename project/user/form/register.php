<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <!-- Bootstrap CDN -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">    
</head>
<body>
<?php
if(isset($_POST['form_submit'])) {   
extract($_POST);
$emailval = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,4})$/';
$mob='/^[0-9]{10}+$/'; 
if($name=="" && $email=="" && $number=="") :
    $msg="Please fill all mandatory fields";
elseif(!preg_match($emailval, $email)) :
    $msg="Please enter a valid email";
elseif(!preg_match($mob, $number)) :
    $msg="Please enter a valid number";
else :
    $msg_sucess="Record inserted successfully";
    $msg="";
endif;
}
   ?> 
<div class="container">
        <div class="row">
        <div class="col-md-6  m-auto bg-white shadow font-monospace border border-info">
            <p class="text-warning text-center fs-3 fw-bold my-3"> User Register</p>
            <form action="insert.php" method="POST">  
                <div class="mb-3">
                    <label for ="">Username</label>
                    <input type="text" required name="name" placeholder="Enter User Name" class="form-control">
                            </div>
                        <div class="mb-3">
                    <label for ="">Email</label>
                    <input type="email"  required name="email" placeholder="Enter User Email" class="form-control">
                    </div>
                        <div class="mb-3">
                    <label for ="">Phone Number</label>
                    <input type="tel"  required name="number" pattern="[98]{10}" placeholder="Enter User Number" class="form-control">
                    </div>
                        <div class="mb-3">
                    <label for ="">Password</label>
                    <input type="password"  required name="password" placeholder="Enter User Password" class="form-control">
                   </div>  
                   <div class="mb-3">
                       <button name ="submit" class = "w-100 bg-warning fs-4 text-white">REGISTER</button>
                       </div> 
                       <div class="mb-3">
                       <button class="w-100 bg-danger fs-4 text-white"><a href = "login.php" class="text-decoration-none text-white" >ALREADY ACCOUNT </a></button>
                       </div> 
                       <div class="<?=(@$msg_sucess=="") ? 'error' : 'green' ; ?>">
                        <?php echo @$msg; ?><?php echo @$msg_sucess; ?></div>

</form>
</div>
</div>
</div>
</body>    
</html>