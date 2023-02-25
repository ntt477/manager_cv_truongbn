
<?php
$file = 'uploads/'.$_GET['cv_name'];
$filename = $_GET['cv_name'];
header('Content-type: application/pdf');
header('Content-Disposition: inline; filename="' . $filename . '"');
header('Content-Transfer-Encoding: binary');
header('Accept-Ranges: bytes');
// Read the file
@readfile($file); ?>