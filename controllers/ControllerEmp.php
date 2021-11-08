<?php
require_once('views/View.php');
class ControllerEmp{
    private $_empModel;
    private $_view;
    
public function __construct()
{
    if (!isset($_GET['admin'])&&!isset($_GET['insert'])) {
        $this->emp();
    }
    if(isset($_GET['admin'])){
        $this->adminemp();
    }
    if(isset($_GET['insert'])){
        $this->insertemp();
    }
    
    
}

public function emp(){
    $this->_empModel=new EmpModel();
    $emp=$this->_empModel->getEmp();
    $this->_view=new View('Emp');

        $this->_view->generate(array('emp'=>$emp));


}

public function adminemp(){
    
    $emp="";
    $this->_view=new View('Adminemp');

        $this->_view->generate(array('emp'=>$emp));


}

public function insertemp(){
    
    $emp="";
    $this->_empModel=new EmpModel();
    $a=$this->_empModel->insemp();
    $this->_view=new View('Adminemp');

        $this->_view->generate(array('emp'=>$emp));


}

}

?>