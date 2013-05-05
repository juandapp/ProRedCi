<?php

require_once(CONTROLLER_PATH . "session.php");

class Busqueda_Controller {

    public $template = 'busqueda';

    public function main(array $getVars) {
        $session = new Session();
        $database = new MySQLDatabase();
        if (empty($getVars)) {
            $tag = $_POST['busqueda'];
            $procesosBusqueda = Proceso_Model::find_process_by_tag($database, $tag);
            $view = new View_Model($this->template);
            $i = 1;
            $view->assign("nProcesos", count($procesosBusqueda));
            foreach ($procesosBusqueda as $process) {
                $view->assign("PostName" . $i, $process->name);
                $view->assign("likesPost" . $i, $process->positive_califications);
                $view->assign("DislikesPost" . $i, $process->negative_califications);
                $view->assign("Description" . $i, $process->description);
                $i++;
            }
            $database->close_connection();
        }
    }
}

?>
