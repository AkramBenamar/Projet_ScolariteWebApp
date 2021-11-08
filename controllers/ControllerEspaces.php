<?php
require_once('views/View.php');
class ControllerEspaces{
    private $_espacesModel;
    private $_view;
    
public function __construct()
{
    
        $this->espaces();
    
    
}
public function espaces(){
    $this->_espacesModel=new EspacesModel();
    $esps=$this->_espacesModel->getStudent();
    $this->_view=new View('Espaces');

        $this->_view->generate(array('esps'=>$esps));
      
    //require_once('views/Acc.php');

}


}

?>