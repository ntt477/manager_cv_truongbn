
<?php
$file = 'uploads/' . $_GET['cv_name'];
$filename = $_GET['cv_name'];
$extension =  pathinfo($filename, PATHINFO_EXTENSION);
if ($extension == 'pdf') {
    header('Content-type: application/pdf');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
} elseif ($extension == "docx") {
    header('Content-type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
} elseif ($extension == "doc") {
    header('Content-type: application/msword');
    header('Content-Disposition: inline; filename="' . $filename . '"');
    header('Content-Transfer-Encoding: binary');
    header('Accept-Ranges: bytes');
} else {
    echo " không đúng định dạng file";
}
// Read the file
@readfile($file); ?>