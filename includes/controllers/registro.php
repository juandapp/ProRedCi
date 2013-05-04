<?php

class Registro_Controller {

    public $template = 'registro';

    public function main(array $getVars) {
        if (empty($getVars)) {
            //create a new view and pass it our template
            // si no vienen parametros en el GET se muestra la vista
            $view = new View_Model($this->template);
        } else if(isset ($getVars['usernameajax'])){
            echo $_POST['username'];
        }else {
            echo 'HOLA!!';
        }
    }

}

?>
