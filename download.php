<?php
// connect to database
include('std.php');

// Downloads files
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // fetch file to download from database
    $query = "SELECT * FROM tbem WHERE eid=$id";
    $result = mysqli_query($con, $query);

    $row = mysqli_fetch_assoc($result);
    $filepath = 'upload/' . $row['picture'];

    if (file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($filepath));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('upload/' . $row['picture']));
        readfile('upload/' . $row['picture']);

        exit;
    }
}
?>