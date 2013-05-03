<?php

class Login_Controller {

    public $template = 'users';

    public function main(array $getVars) {
        print "We are in news!";
        print '<br/>';
        $vars = print_r($getVars, TRUE);
        print
                (
                "The following GET vars were passed to this controller:" .
                "<pre>" . $vars . "</pre>"
        );
    }

}

?>
