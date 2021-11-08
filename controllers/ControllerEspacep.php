<?php
require_once('views/View.php');
class ControllerEspacep{
    private $_espacepModel;
    private $_view;
    
public function __construct()
{
    
        $this->espacep();
    
    
}
public function espacep(){
    $this->_espacepModel=new EspacepModel();
    $parentt=$this->_espacepModel->getParent2();
    $this->_view=new View('Espacep');

        $this->_view->generate(array('parentt'=>$parentt));
        
    //require_once('views/Acc.php');

}


}

?>