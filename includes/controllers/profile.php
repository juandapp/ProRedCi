<?php
class Profile_Controller {

    public $template = 'profile';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $value = "gustavo";
            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
        } else if (isset($getVars['usernameajax'])) {
            
        }
    }
}
?>