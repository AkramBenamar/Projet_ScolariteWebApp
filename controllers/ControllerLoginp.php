<?php
require_once('views/View.php');
class ControllerLoginp{
    
    private $_view;
    
public function __construct()
{
    
        $this->rest();
    
    
}
public function rest(){
   
    
    $rest="";
    $this->_view=new View('Loginp');

        $this->_view->generate(array('logins'=>$rest));
      
    //require_once('views/Acc.php');

}


}

?>