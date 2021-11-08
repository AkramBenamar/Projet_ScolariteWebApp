<?php
require_once('views/View.php');
class ControllerVerif{
    private $_espacepModel;
    private $_view;
    
public function __construct()
{
    if(isset($_GET['s'])){ $this->espaces();}
     
    if(isset($_GET['p'])){ $this->espacep();}
    
    
}
public function espaces(){
    $this->_espacepModel=new EspacesModel();
    $parentt=$this->_espacepModel->getusers();
    $pos=$_POST['ids'];
    if ($parentt==1) {
        $this->_view=new View('Welcm');
        $this->_view->generate(array('pos'=>$pos));
    }else{
        $this->_view=new View('Error');
        $this->_view->generate(array('parentt'=>$parentt));
    }


}

public function espacep(){
    $this->_espacepModel=new EspacesModel();
    $parentt=$this->_espacepModel->getuserp();
    $pos=$_POST['ide'];
    if ($parentt==1) {
        $this->_view=new View('Welcmp');
        $this->_view->generate(array('pos'=>$pos));
    }else{
        $this->_view=new View('Error');
        $this->_view->generate(array('parentt'=>$parentt));
    }

        
        
  

}


}

?>