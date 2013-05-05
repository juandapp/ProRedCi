<?php

require_once(CONTROLLER_PATH . "session.php");

class Profile_Controller {

    public $template = 'profile';

    public function main(array $getVars) {
        $database = new MySQLDatabase();
        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $session = new Session();

            $value = User_Model::find_by_id($database, $session->user_id)->name;
            $numPost = User_Model::find_number_post($database, $session->user_id);
            $fechaCreacion = User_Model::find_by_id($database, $session->user_id)->creation_date;
            $fechaCreacionFormato = date("d-F-Y", strtotime(stripslashes($fechaCreacion)));



            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
            $view->assign('fechaCreacion', $fechaCreacionFormato);
            $view->assign('numPost', $numPost);

            $procesosUser = Proceso_Model::find_process_by_userid($database, $session->user_id);
            
            $i = 1;
            $view->assign("nProcesos", count($procesosUser));
            foreach ($procesosUser as $process) {
                $view->assign("PostName" . $i, $process->name);
                $view->assign("likesPost" . $i, $process->positive_califications);
                $view->assign("DislikesPost" . $i, $process->negative_califications);
                $view->assign("Description" . $i, $process->description);
                $i++;
            }
        } else if (isset($getVars['logout'])) {
            $session = new Session();
            $session->logout();
            header("Location: index.php?login");
        } else if (isset($getVars['usernameajax'])) {
            
        }
        $database->close_connection();
    }

}

?>
