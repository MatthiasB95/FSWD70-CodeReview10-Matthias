<?php 

require_once 'db_connect.php';

if ($_POST) {
   $media_description = $_POST['media_description'];
   $media_type = $_POST['media_type'];
   $media_status = $_POST['media_status'];
   $publisher_id = $_POST['publisher_id'];
   $author_id = $_POST['author_id'];
   $genre_nr = $_POST['genre_nr'];
   $media_name = $_POST['media_name'];
   $publish_date = $_POST['publish_date'];
  

   $sql = "INSERT INTO media (media_description, media_type, media_status, publisher_id, author_id, genre_nr, media_name, publish_date) VALUES ('$media_description', '$media_type', '$media_status', '$publisher_id', '$author_id', '$genre_nr', 'media_name', '$publish_date')";
    if($connect->query($sql) === TRUE) {
       echo "<p>New Record Successfully Created</p>" ;
       echo "<a href='../create.php'><button type='button'>Back</button></a>";
        echo "<a href='../index.php'><button type='button'>Home</button></a>";
   } else  {
       echo "Error " . $sql . ' ' . $connect->connect_error;
   }

   $connect->close();
}

?>