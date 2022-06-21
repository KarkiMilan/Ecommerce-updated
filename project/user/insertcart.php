<?php
session_start();
//session_destroy();
$con = mysqli_connect('localhost','root','','ecommerce');
if (isset($_SESSION['user'])){
$product_name = $_POST['PName'];
$product_price = $_POST['PPrice'];
$product_quantity = $_POST['PQuantity'];
$id = $_POST['Id'];

if (isset($_POST['addcart'])){
     mysqli_query($con,"INSERT INTO `cart`(`PName`, `PPrice`, `PQuantity`,`user`) 
VALUES ('$product_name','$product_price','$product_quantity','{$_SESSION['user']}') ");
     $_SESSION['cart'][] = array('productName' =>  $product_name, 
     'productPrice' => $product_price,
     'productQuantity' => $product_quantity);
     header("location:viewcart.php"); 

}
//remove product
if (isset($_POST['remove'])){
   mysqli_query($con, "DELETE FROM `cart` WHERE PName = '$product_name'  ");
     foreach($_SESSION['cart']as $key =>$value){
          if($value['productName']=== $_POST['item']){
               unset($_SESSION['cart'][$key]);
              $_SESSION['cart'] = array_values($_SESSION['cart']);  
              
              header('location:viewcart.php');
          
          
        }
    }
  }    
 //update product
 if (isset($_POST['update'])){
     foreach($_SESSION['cart']as $key =>$value){
          if($value['productName'] === $_POST['item']){
               if ($product_quantity > 0 && filter_var($product_quantity, FILTER_VALIDATE_INT)){
             $_SESSION['cart'][$key] = array('productName' =>  $product_name, 
            'productPrice' => $product_price,
           'productQuantity' => $product_quantity);
           mysqli_query($con,"UPDATE `cart` SET PQuantity = '$product_quantity' WHERE PName = '$product_name' ");
          }elseif($product_quantity==0){

               unset($_SESSION['cart'][$key]);
          }else {   
               echo "
               <script>
               alert ('Invalid Input');
               window.location.href='viewcart.php';
               </script>
               ";
              }
           header("location:viewcart.php");
          }
    }
  }   

}else{
      header("location:form/login.php");
      }

 ?>  
 
          
          