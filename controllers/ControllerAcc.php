<?php
require_once('views/View.php');
class ControllerAcc {
    private $_articleModel;
    private $_view;
    
public function __construct()
{
    if (isset($url)&& count($url)>1){
        throw new \Exception("Page introuvable",1);

    }else{
        $this->articles();
    }
    
}
public function articles(){
    $this->_articleModel=new ArticleModel();
    $articles=$this->_articleModel->getArticles();
    $this->_view=new View('Acc');
        $this->_view->generate(array('articles'=>$articles));
    //require_once('views/Acc.php');

}


}

?>