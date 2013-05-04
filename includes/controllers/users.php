<?php

class Users_Controller {

    public $template = 'users';

    public function main(array $getVars) {
        $userModel = new Users_Model();

        //get an article
        $article = $userModel->get_article($getVars['article']);

        //create a new view and pass it our template
        $view = new View_Model($this->template);
        
        //assign article data to view
        $view->assign('title', $article['title']);
        $view->assign('content', $article['content']);
    }

}

?>
