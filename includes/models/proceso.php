<?php

class Proceso_Model {

    private $idProces;
    private $user_idUser;
    private $place_idPlace;
    private $name;
    private $description;
    private $creation_date;
    private $positive_califications;
    private $negative_califications;
    private $estimated_duration;

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function save($database) {
        $sql = "INSERT INTO process (user_idUser, name, description, estimated_duration) VALUES ";
        $sql .= "(" . $this->user_idUser . ",'" . $this->name . "','" . $this->description . "','" . $this->estimated_duration . "')";
        $result_set = $database->query($sql);
    }

    public static function get_id_of_last_inserted($database, $user, $name) {
        $sql = "SELECT idProces FROM process WHERE user_idUser = " . $user . " AND name = '" . $name . "' ORDER BY idProces DESC lIMIT 1";
        $result_set = $database->query($sql);
        $array = $database->fetch_array($result_set);
        return $array['idProces'];
    }

    public static function find_process_by_tag($database, $tag) {
        $sql = "SELECT p.name, p.description, p.positive_califications, p.negative_califications FROM process p 
INNER JOIN proces_has_tag pt ON p.idProces = pt.Proces_idProces
INNER JOIN tag t ON pt.tag_idtag = t.idtag WHERE t.name = '" . $tag . "' ORDER BY p.positive_califications DESC";
        $result_array = self::find_by_sql($database, $sql);
        return $result_array;
    }

    public static function find_top_five($database) {
        $result_array = self::find_by_sql($database, "SELECT name,description,positive_califications,negative_califications FROM process ORDER BY positive_califications DESC LIMIT 5");
        return $result_array;
    }

    public static function find_process_by_userid($database, $user_idUser) {
        $result_array = self::find_by_sql($database, "SELECT name,description,positive_califications,negative_califications FROM process WHERE user_idUser = " . $user_idUser . " ORDER BY positive_califications DESC");
        return $result_array;
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
