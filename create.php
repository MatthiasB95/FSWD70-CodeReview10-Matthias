<!DOCTYPE html>
<html>
<head>
   <title>Add Media</title>

   <style type= "text/css">
       fieldset {
           margin: auto;
           margin-top: 100px;
           width: 50% ;
       }

       table tr th  {
           padding-top: 20px;
           padding-left: 300px;
       }
       legend{
        font-size: 20px;
       }
       form{
        background-color: lightblue;
       }
       body{
        background-image: url("https://thenypost.files.wordpress.com/2019/03/old-library-book.jpg?quality=90&strip=all&w=618&h=410&crop=1");
       }
   </style>

</head>
<body>

<fieldset>
   <legend>Add Media</legend>

   <form  action="actions/a_create.php" method= "post">
       <table cellspacing= "0" cellpadding="0">
             
           <tr>
               <th>Media Description <input  type="text" name= "media_description" placeholder="Media Description"/></th>
           </tr>
           <tr>
               <th>Media Type <input type="text"  name="media_type" placeholder ="Media Type"/>
               </th>
               
           </tr>
           <tr>
               <th>Media Status <input  type="text" name= "media_status" placeholder="Media Status"/></th>
               
           </tr>
           <tr>
               <th>Publisher ID <input  type="text" name= "publisher_id" placeholder="Publisher ID"/></th>
              
           </tr>
           <tr>
               <th>Genre NR <input  type="text" name= "genre_nr" placeholder="Genre NR"/></th>
               
           </tr>
           <tr>
               <th>Author ID <input  type="text" name= "author_id" placeholder="Author ID"/></th>
               
           </tr>
           <tr>
               <th>Media Name <input  type="text" name= "media_name" placeholder="Media Name"/></th>
              
           </tr>
           <tr>
               <th>Publish Date <input  type="text" name= "publish_date" placeholder="0000-00-00"/></th>
               
           </tr>          
           <tr>
             <td><button class="submit" type ="submit">Add new Media</button></td>
           </tr>
           <tr>
            <td><a href= "index.php"><button  type="button">Back</button></a></td>     
           </tr>
       </table>
   </form>

</fieldset >

</body>
</html>