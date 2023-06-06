<?php

session_start();

if ($_FILES["filename"]["name"]) {
    $name = $_FILES['filename']['name'];
    switch($_FILES['filename']['type'])
    {
        case 'image/jpeg': $ext = 'jpg'; break;
        case 'image/png': $ext = 'png'; break;
        default: $ext = ''; break;
    }
    if ($ext)
    {
        // Copy file to project folder
        $newname = date("Y-m-d-h-i-s").".".$ext;
        $newpath = realpath(PATH_ROOT."/assets/img/uploads").DIRECTORY_SEPARATOR;
        $image_path_db = "/assets/img/uploads/".$newname;
        if (move_uploaded_file($_FILES['filename']['tmp_name'], $newpath.$newname) && $_POST["action"] == 'create') {
            // Upload to database
            $sql = "UPDATE product SET image_path = (?) WHERE id = {$user['id']}";
            
            $stmt = $mysqli->stmt_init();
            if (! $stmt->prepare($sql)) {
                die("SQL error: ". $mysqli->error);
            }
            $stmt->bind_param("s", $image_path_db);
            if (! $stmt->execute()) die("Upload error: ".$mysqli->error);
            $is_success_upload = True;
            header("Location: ".$gotoProfile);
        }
    }
    else $is_invalid_ext = True;
}    