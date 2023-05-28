<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$uploadOk = 1;

// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

// Check file size, limit it to 500MB
if ($_FILES["file"]["size"] > 500000000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

// Allow certain file formats
$fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
if($fileType != "jpg" && $fileType != "png" && $fileType != "jpeg"
&& $fileType != "pdf" ) {
    echo "Sorry, only JPG, JPEG, PNG & PDF files are allowed.";
    $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["file"]["name"])). " has been uploaded.";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}

// Now you can insert notes and the file path into your database
$notes = $_POST['notes'];
// Database connection and insertion logic here
?>