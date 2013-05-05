<?php
require_once(CONTROLLER_PATH . "session.php");

class VerPost_Controller {

    public $template = 'verPost';
    
    public function main(array $getVars) {
        
        $view = new View_Model($this->template);
        
    }
}
?>
