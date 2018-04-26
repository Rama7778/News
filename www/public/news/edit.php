
<html>
<body>
<?php foreach (self::$news as $m): ?>
<form action="/Admin/update/<?php echo $m->id?>" method="post">

    <h2>Название новости</h2>
    <p><textarea title="Введите название" rows="1" cols="30" name="titleNew">
    <?php echo $m->title; ?>
        </textarea></p>
    <h2>Текст новости</h2>
    <p><textarea title="Введите текст" rows="10" cols="45" name="textNew">
    <?php echo $m->text; ?>
        </textarea></p>
    <h3>Дата добавления:</h3>
    <input title="Введите дату" type="date" name="dateNew">
    <input type="submit">
</form>
</body>
</html>
<?php endforeach;?>
