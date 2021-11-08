<?php
require_once('views/View.php');
class ControllerAdmin{
    
    private $_view;
    
public function __construct()
{
    
        $this->admin();
    
    
}
public function admin(){
    
    $contact="";
    $this->_view=new View('Admin');

        $this->_view->generate(array('contact'=>$contact));
      
    

}


}

?>