<?php
class Profile_Controller {

    public $template = 'profile';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $value = "gustavo";
            $numPost = "10";
            $fechaCreacion = "32-jul-2014";
            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
            $view->assign('numPost', $numPost);
            $view->assign('fechaCreacion', $fechaCreacion);
        } else if (isset($getVars['usernameajax'])) {
            
        }
    }
}
?>