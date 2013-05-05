<?php
require_once(CONTROLLER_PATH . "session.php");

class Proceso_Controller {

    public $template = 'proceso';

    public function main(array $getVars) {
        $session = new Session();
        $database = new MySQLDatabase();
        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            
            
            $value = User_Model::find_by_id($database, $session->user_id)->name;
            $numPost = User_Model::find_number_post($database, $session->user_id);
            $fechaCreacion = User_Model::find_by_id($database, $session->user_id)->creation_date;
            $fechaCreacionFormato = date("d-F-Y", strtotime(stripslashes($fechaCreacion)));

            

            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
            $view->assign('fechaCreacion', $fechaCreacionFormato);
            $view->assign('numPost', $numPost);
            
        } else if (isset($getVars['registrar'])) {
            
            $user_idUser = $session->user_id;
            $name =$_POST['name'];
            $description = "";
            if(isset($_POST['description'])){
                $description = $_POST['description'];
            }
            $estimated_duration = "";
            if(isset($_POST['estimated_duration'])){
                $estimated_duration = $_POST['estimated_duration'];
            }
            $process = new Proceso_Model();
            $process->user_idUser =$user_idUser;
            $process->name =$name;
            $process->description =$description;
            $process->estimated_duration =$estimated_duration;
            $process->save($database);
        }
        $database->close_connection();
    }

}

?>
