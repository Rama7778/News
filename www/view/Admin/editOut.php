<?php
require_once __DIR__ . '/../models/SiteControllerController.php';


$sql = upDate ();
$add = new putNews();
$add->addNews($sql);
echo 'Новость изменена';
?>
<br><br>
<a href="http://news/">Вернуться на главную</a>
