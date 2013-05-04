<?php



class Registro_Controller {

    public $template = 'registro';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $view = new View_Model($this->template);
        } else if (isset($getVars['usernameajax'])) {
            // verifica el user name por ajax
            $database = new MySQLDatabase();
            $user = User_Model::find_by_username($database, $_POST['username']);
            if ($user) {
                echo "no usar";
            } else {
                echo "si usar";
            }
            $database->close_connection();
        } else if (isset($getVars['registrar'])) {

            $name = trim($_POST['name']);
            $lastname = trim($_POST['lastname']);
            $email = trim($_POST['email']);
            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $user = new User_Model($name, $lastname, $email, $username, $password);
            $database = new MySQLDatabase();
            $user->save($database);
            $database->close_connection();
            $location = "index.php?login";
            
            header("Location: {$location}");
        } else {
            echo 'HOLA!! En registro_controller';
        }
    }

}

?>
