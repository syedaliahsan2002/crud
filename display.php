<?php
include 'connect1.php';


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>


/* button style start  */
button {
 display: inline-block;
 border-radius: 4px;
 background-color: #3d405b;
 border: none;
 color: #FFFFFF;
 text-align: center;
 font-size: 17px;
 padding: 16px;
 width: 130px;
 transition: all 0.5s;
 cursor: pointer;
 margin: 5px;
}

button span {
 cursor: pointer;
 display: inline-block;
 position: relative;
 transition: 0.5s;
}

button span:after {
 content: '»';
 position: absolute;
 opacity: 0;
 top: 0;
 right: -15px;
 transition: 0.5s;
}

button:hover span {
 padding-right: 15px;
}

button:hover span:after {
 opacity: 1;
 right: 0;
}
/* button style end  */
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

th{
  height:100px;
  background-color:cyan;
}
td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
  
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>



<table>
  <tr>
    <th>ID number</th>
    <th>First Name</th>
    <th>Last Name</th>
    <th>Email</th>
    <th>Password</th>
    <th>Comfirm password</th>
    <th>operation</th>




  </tr>
<?php

$sql = "SELECT * FROM `crud`";
$result = mysqli_query($con,$sql);
if($result){
    while($row=mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $first_name =$row['first_name'];
        $last_name =$row['last_name'];
        $email =$row['email'];
        $password =$row['password'];
        $comfirm_password =$row['comfirm_password'];

 
        echo'   <tr>
        <td>'.$id.'</td>
        <td>'.$first_name.'</td>
        <td>'.$last_name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$comfirm_password.'</td>
   
        <td><a href="update.php?updateid='.$id.'"><button><span>update</span></button></a>
        <a href="delete.php?deleteid='.$id.'"><button><span>delete</span></button></a>
        </td>

      </tr> ';
        
        
        
        

    }};
?>
  

  
 
</table>
<button>
  <a href="user.html.php"><span>Add User</span></a>
</button></body>
</html> 