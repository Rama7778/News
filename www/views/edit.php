<?php
require_once __DIR__ . '/../models/News.php';
$id = $_GET ['id'];
$sql = getOneNews ();
?>
<html>
<body>
<form action="editOut.php?id=<?php echo $id?>" method="post">
    <h2>Название новости</h2>
    <p><textarea title="Введите название" rows="1" cols="30" name="titleNew">
    <?php $add = new putNews (); echo $add->getTitle($sql); ?></textarea></p>
    <h2>Текст новости</h2>
    <p><textarea title="Введите текст" rows="10" cols="45" name="textNew">
    <?php $add = new putNews (); echo $add->getText($sql); ?></textarea></p>
    <h3>Дата добавления:</h3>
    <input title="Введите дату" type="date" name="dateNew">
    <input type="submit">
</form>
</body>
</html>
