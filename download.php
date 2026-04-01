<?php
if (isset($_GET['file'])) {

    $filename = basename($_GET['file']);   // security
    $file = "file_upload" . $filename;

    if (file_exists($file)) {

        header("Content-Description: File Transfer");
        header("Content-Type: application/octet-stream");
        header("Content-Disposition: attachment; filename=\"$filename\"");
        header("Content-Length: " . filesize($file));

        readfile($file);
        exit;

    } else {
        echo "File not found!";
    }
}
?>
