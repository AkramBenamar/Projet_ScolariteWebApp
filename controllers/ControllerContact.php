<?php
require_once('views/View.php');
class ControllerContact{
    private $_contactModel;
    private $_view;
    
public function __construct()
{
    if (!(isset($_GET['admin']))&&!(isset($_GET['update'])) ) {
        $this->contact();
    }
    if (isset($_GET['admin'])){
        $this->admincontact();
    }
    if (isset($_GET['update'])){
        $this->updatecontact();
    }
    
}
public function contact(){
    $this->_contactModel=new ContactModel();
    $contact=$this->_contactModel->getContact();
    $this->_view=new View('Contact');

        $this->_view->generate(array('contact'=>$contact));
      
 

}


public function admincontact(){
    $this->_contactModel=new ContactModel();
    $contact=$this->_contactModel->getContact();
    $this->_view=new View('Admincontact');

        $this->_view->generate(array('contact'=>$contact));
      
 

}

public function updatecontact(){
    $this->_contactModel=new ContactModel();
   
    $a=$this->_contactModel->updatecon();
    $contact=$this->_contactModel->getContact();
    $this->_view=new View('Admincontact');

        $this->_view->generate(array('contact'=>$contact));
      
 

}



}

?>