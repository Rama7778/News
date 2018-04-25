<table align="center" width="80%" >
    <tr>
        <td align="right">
            <?php
            if (($_COOKIE['login']=='root') && ($_COOKIE ['password']=='1')) {
                echo 'Hello ' . $_COOKIE ['login'] . PHP_EOL; ?>
                <form method="post" action="/Admin/cookeSession">
                    <input type="submit" value="Выход" name="end">
                </form>
            <?php } else { ?>
                <h1>Вход</h1>
                <form method="post" action="/Admin/cookeSession">
                    <table border="2">
                        <tr>
                            <td>
                                <input type="text" name="login" value="<?php  echo $_POST ['login']; ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="password" name="password" value="<?php ; echo $_POST ['password']; ?>">
                        </tr>
                        </td>
                        <tr>
                            <td>
                                <input type="checkbox" name="save">
                                Запомнить меня
                        </tr>
                        </td>
                        <tr>
                            <td>
                                <input type="submit" value="Вход">
                            </td>
                        </tr>
                    </table>
                </form>
            <?php }
            ?>



        </td>
    </tr>
</table>
<?php
foreach (self::$news as $m): ?>
    <h1> <?php echo $m->title; ?> </h1>
    <h5> <?php echo $m->text; ?> </h5>
    <h6> <?php echo $m->date; ?> </h6>

<?php
endforeach;
    if (($_COOKIE['login']=='root') && ($_COOKIE ['password']=='1')) { ?>
        <tr>
            <td>
                <h3>
                    <a href="/Admin/setUpdate/<?php echo $m->id ?>">
                        Редактировать
                    </a>
                </h3>
            </td>
        </tr>
    <?php } ?>
<br>
