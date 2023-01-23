<!DOCTYPE html>
<html>
  <head>
    <title>Download Files</title>
    <link rel="stylesheet" type="text/css" href="downloadstyle.css">
  </head>
  <body>
    <h1>Download Files</h1>
    <table>
        <tr>
            <th>File ID</th>
            <th>File Name</th>
            <th>Download</th>
        </tr>
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

            // Get the file information from the database
            $sql = "SELECT ID, fname, filepath FROM files";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output the file information as a link
                while($row = $result->fetch_assoc()) {
                    $fileID = $row["ID"];
                    $fileName = $row["fname"];
                    $fileDestination = $row["filepath"];
                    echo "<tr><td>$fileID</td><td>$fileName</td><td><a href='$fileDestination' download>Download</a></td></tr>";
                }
            } else {
                echo "<tr><td colspan='3'>No files found in the database.</td></tr>";
            }
            $conn->close();
        ?>
    </table>
  </body>
</html>