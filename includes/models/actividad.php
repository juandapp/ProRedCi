<?php

class Actividad_Model {
    
  private $idActivity;
  private $place_idPlace;
  private $Proces_idProces;
  private $orden;
  private $description;
  private $creation_date;
  private $last_modification_date;
  private $estimated_duration;
 
    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }
    
    public function save($database) {
        $sql = "INSERT INTO activity (Proces_idProces, orden, description, last_modification_date) VALUES ";
        $sql .= "(".$this->Proces_idProces.",".$this->orden.",'".$this->description."',NOW())";
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
