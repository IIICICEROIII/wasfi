<!DOCTYPE html>
<link rel="stylesheet" href="uploadstyle.css">
<a href="download1.php">View Uploaded Files</a>
<html>
  <head>
    <title>Upload File</title>
  </head>
  <body>
    <form action="upload2.php" method="post" enctype="multipart/form-data">
      <label for="fileToUpload">Select a File to Upload:</label>
      <input type="file" name="fileToUpload" id="fileToUpload">
      <br><br>
      <input type="submit" value="Upload File" name="submit">
    </form> 
  </body>
</html>