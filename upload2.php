<?php
    // Connect to the database
    $servername = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "test";
    $conn = new mysqli($servername, $dbUsername, $dbPassword, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if(isset($_POST["submit"])) {
        // Get the file information
        session_start();
        $user_id = $_SESSION['user_id'];
        $fileName = $_FILES["fileToUpload"]["name"];
        $fileTmpName = $_FILES["fileToUpload"]["tmp_name"];
        $fileSize = $_FILES["fileToUpload"]["size"];
        $fileError = $_FILES["fileToUpload"]["error"];
        $fileType = $_FILES["fileToUpload"]["type"];
        
        // Allow certain file formats
        $allowed = array("doc","pdf","txt" , "docx");
        $fileExt = explode(".", $fileName);
        $fileActualExt = strtolower(end($fileExt));
        if(in_array($fileActualExt, $allowed)) {
            // Check for errors
            if($fileError === 0) {
                // Check file size
                if($fileSize < 1000000) {
                    // Generate a unique file name
                    $fileID = uniqid();
                   
                    // Set the file destination
                    $fileDestination = "uploads/".$fileName;
                    // Move the file to the destination
                    move_uploaded_file($fileTmpName, $fileDestination);
                    // Insert the file information into the database
                    $sql = "INSERT INTO files (ID, fname, fsize, fileext, filepath,ID_U )
                    VALUES ('$fileID','$fileName', '$fileSize', '$fileType', '$fileDestination',' $user_id')";
                    if ($conn->query($sql) === TRUE) {
                        echo "File uploaded successfully";
                    } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                    }
                } else {
                    echo "File size is too large.";
                }
            } else {
                echo "Error uploading file.";
            }
        } else {
            echo "Invalid file type. Only doc, pdf, and txt files are allowed.";
        }
    }
    $conn->close();
?>+