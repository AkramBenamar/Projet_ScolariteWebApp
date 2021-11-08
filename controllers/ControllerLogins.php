<?php
require_once('views/View.php');
class ControllerLogins{
    private $_restModel;
    private $_view;
    
public function __construct()
{
    
        $this->rest();
    
    
}
public function rest(){
   
    
    $rest="";
    $this->_view=new View('Logins');

        $this->_view->generate(array('logins'=>$rest));
      
    //require_once('views/Acc.php');

}


}

?>