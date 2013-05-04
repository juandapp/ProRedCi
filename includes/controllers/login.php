<?php

class Login_Controller {

    public $template = 'login';

    public function main(array $getVars) {
        //create a new view and pass it our template
        $view = new View_Model($this->template);
    }

}

?>
