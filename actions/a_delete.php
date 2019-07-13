<?php 

require_once 'db_connect.php';

if ($_POST) {
   $ISBN = $_POST['ISBN'];

   $sql = "DELETE FROM media WHERE ISBN = {$ISBN}";
    if($connect->query($sql) === TRUE) {
       echo "<p>Successfully deleted!!</p>" ;
       echo "<a href='../index.php'><button type='button'>Back</button></a>";
   } else {
       echo "Error updating record : " . $connect->error;
   }

   $connect->close();
}

?>