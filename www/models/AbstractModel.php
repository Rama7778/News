<?php


abstract class AbstractModel
{
    protected $data = [];
    protected static  $nameText;
    public function __get($name)
    {
        return $this->data[$name];
    }
    public function __set($name, $value)
    {
       $this->data[$name] = $value;
    }

    public static function getAll () {
        $class = get_called_class();
        $sql = "SELECT * FROM ". static::$nameText;
        $db = new Database();
        $db->getClassName($class);
        return $db->query($sql);
    }
    public static function getOne ($id)
    {
        $class = get_called_class();
        $sql = "SELECT * FROM ". static::$nameText. " WHERE id=:id";
        $db = new Database;
        $db->getClassName($class);
        return $db->query($sql,[':id'=>$id]);
    }
    protected function insert () {
        $margin = array_keys($this->data);
        $margin_2 = [];
        foreach ($margin as $m) {
            $margin_2 [] = ':' . $m;
            $margin_3 [':'. $m] = $this->data [$m];
        }
        $sql = "INSERT INTO " . static::$nameText .
            " (" . implode ("," , $margin) . ') VALUES (' .
            implode ("," , $margin_2) . ')';
        $db = new Database;
        $db->execute ($sql, $margin_3);
    }
    public function update () {
        $margin = $this->data;
        $margin_2 = [];
        foreach ($margin as $key => $m) {
            $margin_2 [] =  $key . ' = ' . "'". $m . "' ";
            $margin_3 [':'. $m] = $this->data [$m];
        }
        $sql = "UPDATE "  . static::$nameText .
            ' SET ' . implode (", " , $margin_2) . " WHERE id = :id";
        $db = new Database;
        $db->execute($sql, [':id' => $margin ['id']]);
    }
    public static function search ($id){

        $class = get_called_class();
        $sql = "SELECT title,id FROM " . static::$nameText . " WHERE title = :id" . PHP_EOL;
        $db = new Database;
        $db->getClassName($class);
        return $db->query($sql, [':id' => $id]);
    }
    public function save() {
        $margin = $this->data;
        $class = get_called_class();
        $sql = "SELECT title FROM " . static::$nameText . " WHERE title = :id" . PHP_EOL;
        $db = new Database;
        $db->getClassName($class);
        $k = $db->query($sql, [':id' => implode (" " , $margin)]);
        //var_dump($k);
        if (empty ($k)) {
            $this->insert();
        }
        else {
            $e = new E404Ecxeption ();
            throw $e;

            //echo 'Такая новость уже есть';
        }


    }
}
