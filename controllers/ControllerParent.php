<?php
require_once('views/View.php');
class ControllerParent {
    private $_articleModel;
    private $_view;
    
public function __construct()
{
    
        $this->articlesparent();
 
    
}
public function articlesparent(){
    $this->_articleModel=new ArticleModel();
    $articles=$this->_articleModel->getArticleparent();
    $this->_view=new View('Parent');
        $this->_view->generate(array('articles'=>$articles));
    //require_once('views/Acc.php');

}


}

?>