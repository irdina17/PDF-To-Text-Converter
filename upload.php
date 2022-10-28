<?php
if (isset($_POST['submit'])) {
    $file = $_FILES['userfile'];
    
    //Get all the informations about the file
    $fileName = $_FILES['userfile']['name'];
    $fileTmpName = $_FILES['userfile']['tmp_name'];
    $fileSize = $_FILES['userfile']['size'];
    $fileError = $_FILES['userfile']['error'];
    $fileType = $_FILES['userfile']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf');

    if(in_array($fileActualExt, $allowed)) {
        if ($fileError === 0) {
            if ($fileSize < 5000000) {
                $fileDestination = 'uploads/'.$fileName;
                move_uploaded_file($fileTmpName, $fileDestination);
                header("Location: index.php?uploadsuccess");

                
            } else {
                echo "Your file is too big!";
            }
        } else {
            echo "There was an error uploading your file. Please try again.";
        }
    } else {
        echo "You cannot convert files of this type!";
    }

    // Invoke jar file (java method) to convert PDF
    exec('java -jar C:\xampp\htdocs\phpfileupload\pdfConverter.jar', $output);
    print_r($output);  
}
