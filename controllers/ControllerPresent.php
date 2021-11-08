<?php
require_once('views/View.php');
class ControllerPresent {
    private $_articleModel;
    private $_view;
    
public function __construct()
{
    if (isset($url)&& count($url)<1){
        throw new \Exception("Page introuvable",1);

    }else{
        if(!(isset($_GET['etat']))){ $this->presentation();}
       if(isset($_GET['etat'])=="p"){$this->adminpres();}
    }
    
}
public function presentation(){
    
    
        $this->_articleModel=new ArticleModel();
        $articles=$this->_articleModel->getPresentation();
        $this->_view=new View('Present');
        $this->_view->generate(array('articles'=>$articles));
    
   
   
    //require_once('views/Acc.php');

}
public function adminpres(){
    $this->_articleModel=new ArticleModel();
    $articles=$this->_articleModel->getPresentation();
    $this->_view=new View('Adminpres');
    $this->_view->generate(array('articles'=>$articles));
}


}

?>