
<?php
$e=$_FILES["fileToUpload"]["name"];
#echo '<img src="'.$e.'">';
$target_dir = "uploads/";
#$w=$_server['DOCUMENT_ROOT'];
#echo $w;

$upload_dir = "uploads/";
echo $upload_dir;
if (is_dir($upload_dir) && is_writable($upload_dir)) {
    // do upload logic here
    
} else {
    echo 'Upload directory is not writable, or does not exist.';
}


$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
#echo $target_file;
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// Check if image file is a actual image or fake image
/*if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".---";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}*/
$a=$_FILES["fileToUpload"]["tmp_name"];
#echo $a."---";
$n=basename($_FILES[fileToUpload][name]);
#echo $n."---".$target_file;
move_uploaded_file($a,$target_file);
;
echo "<pre>$out</pre>";
?>
