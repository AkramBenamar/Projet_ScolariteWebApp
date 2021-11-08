<?php
require_once('views/View.php');
class ControllerAdminart{
    
    private $_view;
    private $_articleModel;
    
public function __construct()
{
    if(!(isset($_GET['status'] ))&& !(isset($_GET['etat'])) && !(isset($_GET['update'])) && !(isset($_GET['maj']))){
        $this->admin();

    }
     else
     {
        if(isset($_GET['status'] )=="new"){
            $this->store();
    
        }
        if( isset($_GET['etat'] )=="p"){
            $this->store2();
    
        }
        if( isset($_GET['update'] )){
            $this->update();
    
        }
        if( isset($_GET['maj'] )){
            $this->maj();
    
        }
        
     }   
    
   
}
public function admin(){
    $this->_articleModel=new ArticleModel();
    
    $articles=$this->_articleModel->getArtiAll();
    
    $this->_view=new View('Adminart');

        $this->_view->generate(array('articles'=>$articles));
      
    

}

public function store(){

    $this->_articleModel=new ArticleModel();
    $article=$this->_articleModel->createArticle();
    $articles=$this->_articleModel->getArtiAll();
    $this->_view=new View('Adminart');
    $this->_view->generate(array('articles'=>$articles));

}
public function store2(){

    $this->_articleModel=new ArticleModel();
    $article=$this->_articleModel->createPres();
    $articles=$this->_articleModel->getPresentation();
    $this->_view=new View('Adminpres');
    $this->_view->generate(array('articles'=>$articles));

}

public function update(){

    $this->_articleModel=new ArticleModel();
    $article=$this->_articleModel->updatePres();
    $articles=$this->_articleModel->getPresentation();
    $this->_view=new View('Adminpres');
    $this->_view->generate(array('articles'=>$articles));

}

public function maj(){

    $this->_articleModel=new ArticleModel();
    $article=$this->_articleModel->updateart();
    $articles=$this->_articleModel->getArtiAll();
    $this->_view=new View('Adminart');
    $this->_view->generate(array('articles'=>$articles));

}


}

?>