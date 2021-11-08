<?php
require_once('views/View.php');
class ControllerEnsresp {
    private $_ensrespModel;
    private $_view;
    
public function __construct()
{
   
    if (!(isset($_GET['admin']))&&!(isset($_GET['update'])) )
    {
        $this->ensresp();
    }  

    if (isset($_GET['admin'])){
        $this->adminens();
    }

    if (isset($_GET['update'])){
        $this->updateens();
    }

    
    
}
public function ensresp(){
   
        $this->_ensrespModel=new EnsrespModel();
        $ensresp=$this->_ensrespModel->getEnsresp();
        $this->_view=new View('Ensresp');
        $this->_view->generate(array('ensresp'=>$ensresp));
  
   
   
    //require_once('views/Acc.php');

}


public function adminens(){
   
    $this->_ensrespModel=new EnsrespModel();
    $ensresp=$this->_ensrespModel->getEnsresp2();
    $this->_view=new View('Adminensresp');
    $this->_view->generate(array('ensresp'=>$ensresp));



//require_once('views/Acc.php');

}


public function updateens(){
   
    $this->_ensrespModel=new EnsrespModel();
    $a=$this->_ensrespModel->updaten();
    $ensresp=$this->_ensrespModel->getEnsresp2();
    $this->_view=new View('Adminensresp');
    $this->_view->generate(array('ensresp'=>$ensresp));



//require_once('views/Acc.php');

}


}

?>