<?php
require_once('views/View.php');
class ControllerPost {
    private $_articleModel;
    private $_view;
    
public function __construct()
{
    if (isset($url)&& count($url)<1){
        throw new \Exception("Page introuvable",1);

    }else{
        $this->article();
    }
    
}
public function article(){
    if (isset($_GET['ida']))
    {
        $this->_articleModel=new ArticleModel();
        $article=$this->_articleModel->getArticle($_GET['ida']);
        $this->_view=new View('Post');
        $this->_view->generate(array('article'=>$article));
    }
   
   
    //require_once('views/Acc.php');

}


}

?>