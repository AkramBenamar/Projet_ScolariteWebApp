<?php
require_once('views/View.php');
class ControllerCycle{
    private $_cycleModel;
    private $_view;
    
public function __construct()
{
    if (isset($url)&& count($url)>1){
        throw new \Exception("Page introuvable",1);

    }else{
        $this->articlescycle();
    }
    
}
public function articlescycle(){
    $this->_cycleModel=new CycleModel();
    $articles=$this->_cycleModel->getCycle($_GET['idc']);
    $this->_view=new View('Cycle');
        $this->_view->generate(array('articles'=>$articles));
    //require_once('views/Acc.php');

}


}

?>