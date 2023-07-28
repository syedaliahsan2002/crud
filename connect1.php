<?php
$con = new mysqli('localhost','root','','crud_operation');
if(!$con){
    die(mysqli_error($con));

}
else{
    // echo "data inserted succesfully";
//    header('location:display.php');
};


// if(isset($_POST['sub'])){
//     $first_name=$_POST['first_name'];
//     $last_name=$_POST['last_name'];
//     $email=$_POST['email'];
//     $password=$_POST['password'];
//     $comfirm_password=$_POST['comfirm_password'];


//     $sql="insert into `crud`(first_name,last_name,email,password,comfirm_password)
//     values ('$first_name','$last_name','$email','$password','$comfirm_password')";

//     $result=mysqli_query($con,$sql);
//     if($result){
//          header('location:display.php');
//     }
//     else{
//         die(mysqli_error($con));
//     }


// }

?>