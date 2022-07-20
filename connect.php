<?PHP
   $server = 'localhost';
   $username = 'root';
   $password = '';
   $database = 'todo';
   $connection = new mysqli($server, $username, $password,$database);
   if($connection){
     //echo "Database is connected successfully!!";
   }else{
     die(mysqli_error($connection));
   }
?>