<?php
// Initialize the session
session_start();
 
// If session variable is not set it will redirect to login page
if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
  header("location: login.php");
  exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
    <div class="page-header">
        <h1>Hi, <b><?php echo htmlspecialchars($_SESSION['username']); ?></b>. Welcome to our site.</h1>
<p align="right"><a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a></p>   
 </div>

    

</body>
<body>

<form action="upload.php" method="post" enctype="multipart/form-data">
<table align="center">   
 <tr>
	<td>
</br>
</br>
</br>      
	</td>
	<td >Select file to upload:</td>
        

        
         <td>    <input type="file" name="fileToUpload" id="fileToUpload2">
    </td></tr>
        <tr>
<td>
</td>
<td>
</td>
         <td>  <input type="submit" value="Upload" name="submit"></td><br>
        </tr>

<tr>
<td>
     </br>
</br>
</br>
</br>
</td>
</tr>
    
 <tr>
<td>      
	</td>
<td>Click here to </br>go to download page:</td>
	
<td>  <input type="button" value="Download" class="homebutton" id="btnHome" 
onClick="document.location.href='uploads/index.php'"  /></td><br>
        </tr>
</form>

</body>
</html>
