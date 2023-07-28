<?php
include 'connect1.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$first_name=$row['first_name'];
$last_name=$row['last_name'];
$email=$row['email'];
$password=$row['password'];
$comfirm_password=$row['comfirm_password'];

// if($con){
//     echo "conection suceess";

// }
// else{
//     echo "not";
// };
// $sql = "SELECT * FROM `crud`";
// $result = mysqli_query($con,$sql);
//  $row=mysqli_fetch_assoc($result);

// echo $row['id'];
// if($result){
//     while($row=mysqli_fetch_assoc($result)){
//         $id = $row['id'];
//         $first_name =$row['first_name'];
//         $last_name =$row['last_name'];
//         $email =$row['email'];
//         $password =$row['password'];
//         $comfirm_password =$row['comfirm_password'];
//     }};
   
if(isset($_POST['sub'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $comfirm_password=$_POST['comfirm_password'];

$sql="UPDATE `crud` SET `id`='$id',`first_name`='$first_name',`last_name`='$last_name',`email`='$email',`password`='$password',`comfirm_password`='$comfirm_password' WHERE id=$id";


    // $sql="insert into `crud`(first_name,last_name,email,password,comfirm_password)
    // values ('$first_name','$last_name','$email','$password','$comfirm_password')";

    $result=mysqli_query($con,$sql);
    if($result){
         header('location:display.php');
}
    else{
        die(mysqli_error($con));
    }


}


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>crud_operation</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
 <!-- 
  <form class="form" method="post" action="connect1.php">
   
</form>
 -->
 <div class="container"> 
<form  method="post" class="form">
<p class="title">Register </p>
    <p class="message">Signup now and get full access to our app. </p>
        <div class="flex">
        <label>
            <input required="" placeholder="" type="text" class="input" name="first_name" value=<?php echo $first_name?>>
            <span>Firstname</span>
        </label>

        <label>
            <input required="" placeholder="" type="text" class="input" name="last_name" value=<?php echo $last_name?>>
            <span>Lastname</span>
        </label>
    </div>  
            
    <label>
        <input required="" placeholder="" type="email" class="input" name="email" value=<?php echo $email ?>>
        <span>Email</span>
    </label> 
        
    <label>
        <input required="" placeholder="" type="password" class="input" name="password" value=<?php echo $password?>>
        <span>Password</span>
    </label>
    <label>
        <input required="" placeholder="" type="password" class="input" name="comfirm_password" value=<?php echo $comfirm_password ?>>
        <span>Confirm password</span>
    </label>
    <button class="submit" name="sub">Submit</button>
    <p class="signin">Already have an acount ? <a href="#">Signin</a> </p>
</form>
</div>


  </body>
</html>