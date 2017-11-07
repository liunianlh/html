<?php
require_once 'file.func.php';
$fileInfo=$_FILES['myFile'];
var_dump(upload_file($fileInfo));
