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
    public function insert () {
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

    }

}