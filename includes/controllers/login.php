<?php

class Login_Controller {

    public $template = 'login';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $view = new View_Model($this->template);
        } else if (isset($getVars['singin'])) {

            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $database = new MySQLDatabase();
            // Check database to see if username/password exist.
            $found_user = User_Model::authenticate($database, $username, $password);
            $database->close_connection();
            
            if ($found_user) {
               // $session->login($found_user);
               // redirect_to('../../public/user/user.main.php');
                echo $found_user->name;
            } else {
                // username/password combo was not found in the database
                $message = "Username/password combination incorrect.";
                echo $message;
            }
        }
    }

}

?>
