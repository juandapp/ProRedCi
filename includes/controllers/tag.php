<?php

class Tag {

    private $idTag;
    private $name;
    private $creation_date;

    public function __construct($name = "") {
        $this->name = $name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    
    public static function find_by_name($database, $name = 0) {
        $result_array = self::find_by_sql($database, "SELECT * FROM tag WHERE name='{$name}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }
    public static function find_by_id($database,$id = 0) {
        $result_array = self::find_by_sql($database,"SELECT * FROM tag WHERE idTag='{$id}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }
    
    public function save($database) {
        $sql = "INSERT INTO tag (name) VALUES ";
        $sql .= "('" . $this->name . "','" . $this->last_name . "','" . $this->email . "','" . $this->username . "','" . $this->password . "')";
        $result_set = $database->query($sql);
    }
        
    public static function find_by_sql($database, $sql = "") {
        $result_set = $database->query($sql);
        $object_array = array();
        while ($row = $database->fetch_array($result_set)) {
            $object_array[] = self::instantiate($row);
        }
        return $object_array;
    }

    private static function instantiate($record) {
        // Could check that $record exists and is an array
        $object = new self;
        foreach ($record as $attribute => $value) {
            if ($object->has_attribute($attribute)) {
                $object->$attribute = $value;
            }
        }
        return $object;
    }

    private function has_attribute($attribute) {
        $object_vars = get_object_vars($this);
        // We don't care about the value, we just want to know if the key exists
        // Will return true or false
        return array_key_exists($attribute, $object_vars);
    }

  }

?>
