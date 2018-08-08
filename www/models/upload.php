<?php
require_once __DIR__ .'/../autoload.php';
// an array of allowed extensions
$allowedExts = ["gif", "jpeg", "jpg", "png","GIF","JPEG","JPG","PNG"];
$key = array_keys($_FILES);
switch($key[0]):
    case 'banner_1':
        $file = 'banner_1';
        break;
    case 'banner_2':
        $file = 'banner_2';
        break;
    case 'banner_3':
        $file = 'banner_3';
        break;
endswitch;

$temp = explode(".", $_FILES[$file]["name"]);
$extension = end($temp);

//check if the file type is image and then extension
// store the files to upload folder
//echo '0' if there is an error

if ((($_FILES[$file]["type"] == "image/gif")
|| ($_FILES[$file]["type"] == "image/jpeg")
|| ($_FILES[$file]["type"] == "image/jpg")
|| ($_FILES[$file]["type"] == "image/pjpeg")
|| ($_FILES[$file]["type"] == "image/x-png")
|| ($_FILES[$file]["type"] == "image/png"))
&& in_array($extension, $allowedExts)) {
  if ($_FILES["file"]["error"] > 0) {
    echo "0";
  } else {
    $target = __DIR__ . "/../public/img/";
    move_uploaded_file($_FILES[$file]["tmp_name"], $target. $_FILES[$file]["name"]);
    echo  "../../public/img/" . $_FILES[$file]["name"];
      $dsn = 'mysql:dbname=' . DB_NAME .'; host='. DB_HOST ;
      $dbn = new PDO($dsn, DB_USER, DB_PASSWORD);
      $sql = "UPDATE `value` SET `value` = :value WHERE `name`= :name";
      $sth = $dbn->prepare($sql);
      $sth->execute([
          ':name' => $key[0],
          ':value' => $_FILES[$file]["name"]
      ]);
  }
} else {
    echo "0";
}
