<?php
$file=$_FILES["file"];

move_uploaded_file($file["tmp_name"],"uploads/".$file["name"]);

header("Location:".$_SERVER["HTTP_REFERER"]);

?>