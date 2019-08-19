
<!--------------PHP CODE TO INSERT IMAGE INTO DATABASE----------------->

 <?php  
 $connect = mysqli_connect("localhost", "root", "", "db1");  //connect to databse
 if(isset($_POST["insert"]))  //execute the below code when submit button is pressed
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "INSERT INTO image_store(image) VALUES ('$file')";  //table name is image_Store
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  //on successful image insertion
      }  
 } 

?>  


 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Database</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" />  
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>  
                
            </div>
      </body>
    </html>
