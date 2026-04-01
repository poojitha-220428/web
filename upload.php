<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>

<h2>Upload File</h2>

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file" required>
    <button type="submit" name="upload">Upload</button>
</form>

</body>
</html>
<?php
if (isset($_POST['upload'])) {

    $fileName = $_FILES['file']['name'];
    $tempName = $_FILES['file']['tmp_name'];
    $folder   = "file_upload" . $fileName;

    if (move_uploaded_file($tempName, $folder)) {
        echo "<p style='color:green;'>File uploaded successfully!</p>";
        echo "<a href='download.php?file=$fileName'>Download File</a>";
    } else {
        echo "<p style='color:red;'>Upload failed!</p>";
    }
}
?>