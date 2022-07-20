<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operations</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light text-decoration-none">Add User</a></button>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Si no</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Mobile</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
    <?php
$sql = "SELECT * FROM crud";
$result=mysqli_query($connection,$sql);
if($result){
    while($row =mysqli_fetch_assoc($result)){
        $id = $row['id'];
        $name =$row['name'];
        $email=$row['email'];
        $password =$row['password'];
        $mobile =$row['mobile'];
        echo '<tr>
        <th scope="row">'.$id.'</th>
        <td>'.$name.'</td>
        <td>'.$email.'</td>
        <td>'.$password.'</td>
        <td>'.$mobile.'</td>
        <td>
         <button class="btn btn-success"><a href="update.php?updateid='.$id.'" class="text-light text-decoration-none">Update</a></button>
         <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light text-decoration-none">Delete</a></button>
       </td>
      </tr>
      ';

    }
}

?>
 
  
  </tbody>
</table>
    </div>
    
</body>
</html>