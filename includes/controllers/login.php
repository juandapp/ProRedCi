<?php

require_once(CONTROLLER_PATH . "session.php");

class Login_Controller {

    public $template = 'login';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $session = new Session();
            if ($session->is_logged_in()) {
                header("Location: index.php?profile");
            } else {
                $database = new MySQLDatabase();
                $topfive = Proceso_Model::find_top_five($database);
                $database->close_connection();
                $view = new View_Model($this->template);

                $i =1;
                foreach ($topfive as $process){
                    $view->assign("PostName".$i, $process->name);
                    $view->assign("likesPost".$i, $process->positive_califications);
                    $view->assign("DislikesPost".$i, $process->negative_califications);
                    $view->assign("Description".$i, $process->description);
                    $i++;
                }
            }
        } else if (isset($getVars['singin'])) {

            $username = trim($_POST['username']);
            $password = trim($_POST['password']);

            $database = new MySQLDatabase();
            // Check database to see if username/password exist.
            $found_user = User_Model::authenticate($database, $username, $password);
            $database->close_connection();

            if ($found_user) {
                $session = new Session();
                $session->login($found_user);
                // redirect_to('../../public/user/user.main.php');
                echo "valido";
            } else {
                // username/password combo was not found in the database
                $message = "Username/password combination incorrect.";
                echo "novalido";
            }
        }
    }

}

?>
