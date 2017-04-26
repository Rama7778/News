
    <html>
<head>
</head>
<body>
<table align="center" width="80%" >
    <tr>
        <td align="right">

            <?php
            if (($_COOKIE['login']=='root') && ($_COOKIE ['password']=='1')) {
                echo 'Hello ' . $_COOKIE ['login']; ?>

            <form method="post" action="../../models/Redirection.php">
                <input type="submit" value="Выход" name="end">
            </form>
            <?php } else { ?>
                <h1>Вход</h1>
                <form method="post" action="../../models/Redirection.php">
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
    <tr>

        <td>
            <h3>Новости</h3>
            <?php
            foreach (self::$news  as $m):
               echo '<a href="/News/One/' . $m->id . '">' . $m->title . '</a>' . '<br>';
            endforeach;
            ?>
        </td>

    </tr>
    <?php
    if (($_COOKIE['login']=='root') && ($_COOKIE ['password']=='1')) { ?>
    <tr>
        <td>
            <h3>
                <a href="/Admin/Put">
                    Добавить новость
                </a>
            </h3>
        </td>
    </tr>
    <?php } ?>
</table>
</body>
</html>

