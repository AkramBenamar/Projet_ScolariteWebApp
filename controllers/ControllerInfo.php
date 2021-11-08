<?php
require_once('views/View.php');
class ControllerInfo{
    private $_empModel;
    private $_view;
    
public function __construct()
{
    if (isset($_GET['id'])=='Primaire') {
        $this->p();
    }
    if(isset($_GET['idc'])=='Moyen'){
        $this->m();
    }
    if(isset($_GET['idc'])=='Secondaire'){
        $this->s();
    }
    
    
}

public function p(){
    $emp="";
    $this->_view=new View('Infop');

        $this->_view->generate(array('emp'=>$emp));


}

public function m(){
    
    $emp="";
    $this->_view=new View('Infom');

        $this->_view->generate(array('emp'=>$emp));


}

public function s(){
    
    $emp="";
    
    $this->_view=new View('Infos');

        $this->_view->generate(array('emp'=>$emp));


}

}

?>