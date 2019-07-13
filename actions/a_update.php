<?php 

require_once 'db_connect.php';

if ($_POST) {
   $media_description = $_POST['media_description'];
   $media_type = $_POST['media_type'];
   $media_status = $_POST['media_status'];
   $publisher_id = $_POST['publisher_id'];
   $author_id = $_POST['author_id'];
   $genre_nr = $_POST['genre_nr'];
   $ISBN = $_POST['ISBN'];
   $publish_date = $_POST['publish_date'];

   $sql = "UPDATE media SET media_description = '$media_description', media_type = '$media_type', media_status = '$media_status', publisher_id = '$publisher_id', author_id = '$author_id',  genre_nr = '$genre_nr', publish_date = '$publish_date'  WHERE ISBN = {$ISBN}" ;
   if($connect->query($sql) === TRUE) {
       echo  "<p>Successfully Updated</p>";
       echo "<a href='../update.php?ISBN=" .$ISBN."'><button type='button'>Back</button></a>";
       echo  "<a href='../index.php'><button type='button'>Home</button></a>";
   } else {
        echo "Error while updating record : ". $connect->error;
   }

   $connect->close();

}

?>