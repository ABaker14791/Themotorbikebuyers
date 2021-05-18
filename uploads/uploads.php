<?php
    if (isset($_POST['submit'])) {
        $file = $_FILES['file'];

        $filename = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $fileSize = $_FILES['file']['size'];
        $fileError = $_FILES['file']['error'];
        $fileType = $_FILES['file']['type'];

        $fileExt = explode('.', $filename);
        $fileActualExt = strtolower(end($fileExt));

        $allowed = array('jpg','jpeg','png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {

            } video 15:30

        } else {
            echo "You cannot upload files of this type.";
        }
    }
?>