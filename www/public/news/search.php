<?php
if (!empty (self::$news) ) {
    foreach (self::$news as $m):
        echo '<a href="/News/One/' . $m->id . '">' . $m->title . '</a>' . '<br>';
    endforeach;
}
else {
    echo 'Ничего не найдено';
}
?>
