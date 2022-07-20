<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "SELECT * FROM crud WHERE id=$id";
$result =mysqli_query($connection,$sql);
$row=mysqli_fetch_assoc($result);
$name=$row['name'];
$email=$row['email'];
$password=$row['password'];
$mobile=$row['mobile'];
if(isset($_POST['submit'])){
  $name = ($_POST['name']);
  $email = ($_POST['email']);
  $mobile = ($_POST['mobile']);
  $password = ($_POST['password']);

  $sql =$sql = "UPDATE crud SET id=$id,name='$name',email='$email',mobile='$mobile',password='$password' WHERE id=$id";
  $result = mysqli_query($connection,$sql);
  if($result){
     //echo "Data Inserted successfully";
     header('location:display.php');
  }
  else{
      die(mysqli_error($connection));
  }
  
  
  }
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>CRUD OPERATION</title>

  </head>
  <body>
    <div class="container my-5">
      <h1>Update Data</h1>
      <form method="POST">
        <div class="form-group mb-3">
         <label>Name</label>
         <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off" value="<?php echo $name ?>">
        </div>
        <div class="form-group mb-3">
         <label>Email</label>
          <input type="email" class="form-control" name="email" placeholder="Enter Your Email" autocomplete="off"value="<?php echo $email ?>">
        </div>
        <div class="form-group mb-3">
         <label>Password</label>
          <input type="password" class="form-control" name="password" autocomplete="off" value="<?php echo $password?>">
        </div>
        <div class="form-group mb-3">
         <label>Mobile Number</label>
          <input type="text" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" autocomplete="off" value="<?php echo $mobile ?>">
        </div>
        
        <br>
       <button type="submit"name="submit" class="btn btn-primary">Submit</button>
      </form>
 
    </div>
    
  </body>
</html>