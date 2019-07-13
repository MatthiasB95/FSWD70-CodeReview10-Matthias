<?php 

require_once 'actions/db_connect.php';

if ($_GET['ISBN']) {
   $ISBN = $_GET['ISBN'];

   $sql = "SELECT * FROM media WHERE ISBN = {$ISBN}" ;
   $result = $connect->query($sql);

   $data = $result->fetch_assoc();

   $connect->close();

?>

<!DOCTYPE html>
<html>
<head>
   <title>Edit Media</title>

   <style type= "text/css">
       fieldset {
           margin : auto;
           margin-top: 100px;
           width: 50%;
       }

       table  tr th {
           padding-top: 20px;
       }
      form{
        background-color: lightgreen;
      }
      body{
        background-image: url("https://www.diedruckerei.de/magazin/wp-content/uploads/2018/07/Beitragsbild_Geschwungene_Schriften.jpg");
      }
      legend{
        font-size: 20px;

      }
   </style>

</head>
<body>

<fieldset>
   <legend>Update Media</legend>

   <form action="actions/a_update.php"  method="post">
       <table  cellspacing="0" cellpadding= "0">
        <tr>
               <th>Title <input type ="text" name= "media_name" placeholder= "Title" value= "<?php echo $data['media_name'] ?>" /></th>
           </tr>
           <tr>
               <th>ISBN <input type="text"  name="ISBN" placeholder ="ISBN" value="<?php echo $data['ISBN'] ?>"  /></th>
           </tr >     
           <tr>
               <th>Media Description <input type= "text" name="media_description"  placeholder="Media Description" value ="<?php echo $data['media_description'] ?>" /></th>
           </tr>
           <tr>
               <th>Media Type <input type ="text" name= "media_type" placeholder= "Media Type" value= "<?php echo $data['media_type'] ?>" /></th>
           </tr>
           <tr>
               <th>Media Status <input type ="text" name= "media_status" placeholder= "Media Status" value= "<?php echo $data['media_status'] ?>" /></th>
           </tr>
           <tr>
               <th>Publisher ID <input type ="text" name= "publisher_id" placeholder= "Publisher ID" value= "<?php echo $data['publisher_id'] ?>" /></th>
           </tr>
           <tr>
               <th>Author ID <input type ="text" name= "author_id" placeholder= "Author ID" value= "<?php echo $data['author_id'] ?>" /></th>
           </tr>
           <tr>
               <th>Genre Nr <input type ="text" name= "genre_nr" placeholder= "Genre Nr" value= "<?php echo $data['genre_nr'] ?>" /></th>
           </tr>
           <tr>
               <th>Publish Date <input type ="text" name= "publish_date" placeholder= "000-00-00" value= "<?php echo $data['publish_date'] ?>" /></th>
           </tr>
                 
           <tr>
               <input type= "hidden" name= "id" value= "<?php echo $data['ISBN']?>"/>
               <td><button  type= "submit">Save Changes</button></td>
               <td><a  href= "index.php"><button type="button">Back</button></a></td>
           </tr>
       </table>
   </form >

</fieldset >

</body >
</html >

<?php 
}
?>