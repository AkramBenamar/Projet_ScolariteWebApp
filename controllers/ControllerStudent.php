<?php
require_once('views/View.php');
class ControllerStudent {
    private $_articleModel;
    private $_view;
    
public function __construct()
{
    
        $this->articlestudent();
 
    
}
public function articlestudent(){
    $this->_articleModel=new ArticleModel();
    $articles=$this->_articleModel->getArticlestud();
    $this->_view=new View('Student');
        $this->_view->generate(array('articles'=>$articles));
    //require_once('views/Acc.php');

}


}

?>