<?php
class Proceso_Controller {

    public $template = 'proceso';

    public function main(array $getVars) {

        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $value = "XXXXXXXXX";
            $view = new View_Model($this->template);
            $view->assign('nombre', $value);
        } else if (isset($getVars['usernameajax'])) {
            
        }
    }
}
?>
