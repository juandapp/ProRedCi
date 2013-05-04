<?php

require_once(CONTROLLER_PATH . "session.php");

class Profile_Controller {

    public $template = 'profile';

    public function main(array $getVars) {

        if (empty($getVars)) {
    //create a new view and pass it our template
    // si no vienen parametros en el GET se muestra la vista
            $session = new Session();
            $database = new MySQLDatabase();
            $value = User_Model::find_by_id($database, $session->user_id)->name;
            $database->close_connection();
            $numPost = "10";
            $fechaCreacion = "20 Mayo";
            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
            $view->assign('fechaCreacion', $fechaCreacion);
            $view->assign('numPost', $numPost);

        } else if (isset($getVars['logout'])) {
            $session = new Session();
            $session->logout();
            header("Location: index.php?login");
        } else if (isset($getVars['usernameajax'])) {
            
        }
    }
}
?>
