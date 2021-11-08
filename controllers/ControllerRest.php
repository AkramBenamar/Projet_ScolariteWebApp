<?php
require_once('views/View.php');
class ControllerRest{
    private $_restModel;
    private $_view;
    
public function __construct()
{
    if(!isset($_GET['admin'])&&!isset($_GET['update'])){
        $this->rest();
    }
        
    if(isset($_GET['admin'])){
        $this->restadmin();

    }

    if(isset($_GET['update'])){
        $this->restupdate();

    }
    
    
}
public function rest(){
    $this->_restModel=new RestModel();
    $rest=$this->_restModel->getRest();
    $this->_view=new View('Rest');

        $this->_view->generate(array('rest'=>$rest));
   
}

public function restadmin(){
    $this->_restModel=new RestModel();

    $rest=$this->_restModel->getallrest();
    $this->_view=new View('Adminrest');

        $this->_view->generate(array('rest'=>$rest));
   
}

public function restupdate(){
    $this->_restModel=new RestModel();
    $a=$this->_restModel->updateres();
    $rest=$this->_restModel->getallrest();
    $this->_view=new View('Adminrest');

        $this->_view->generate(array('rest'=>$rest));
   
}

}

?>