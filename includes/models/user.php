<?php

class User_Model {

    private $idUser;
    private $username;
    private $password;
    private $name;
    private $email;
    private $last_name;
    private $creation_date;

    public function __construct($name = "", $last_name = "", $email = "", $username = "", $password = "") {
        $this->username = $username;
        $this->password = $password;
        $this->name = $name;
        $this->email = $email;
        $this->last_name = $last_name;
    }

    public function __set($name, $value) {
        $this->$name = $value;
    }

    public function __get($name) {
        return $this->$name;
    }

    public function save($database) {
        $sql = "INSERT INTO user (name , last_name, email, username, password) VALUES ";
        $sql .= "('" . $this->name . "','" . $this->last_name . "','" . $this->email . "','" . $this->username . "','" . $this->password . "')";
        $result_set = $database->query($sql);
    }

    public static function authenticate($database, $username = "", $password = "") {
        $username = $database->escape_value($username);
        $password = $database->escape_value($password);

        $sql = "SELECT * FROM user ";
        $sql .= "WHERE username = '{$username}' ";
        $sql .= "AND password = '{$password}' ";
        $sql .= "LIMIT 1";
        $result_array = self::find_by_sql($database, $sql);
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_id($database, $id = 0) {
        $result_array = self::find_by_sql($database, "SELECT * FROM user WHERE idUser={$id} LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
    }

    public static function find_by_username($database, $username = 0) {
        $result_array = self::find_by_sql($database, "SELECT * FROM user WHERE username='{$username}' LIMIT 1");
        return !empty($result_array) ? array_shift($result_array) : false;
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

    public static function find_number_post($database, $userId) {
        $result_array = self::find_by_sql($database, "SELECT * FROM process WHERE user_idUser={$userId}");
        $arrayshift = array_shift($result_array);
        
        $conteo = count($arrayshift);
        return ($conteo >= 0) ? $conteo : 0;
    }

}

?>
