<?php
class Parentt {


    private $_idp;
    
    private $_nomp;
    private $_prenomp;
    private $_datenp;
    private $_childs;
    

    public function __construct($idp,$nomp,$prenomp,array $childs,$datenp){
    

        
        $this->_idp=$idp;
        $this->_childs=$childs;
        $this->_nomp=$nomp;
        $this->_prenomp=$prenomp;
        $this->_datenp=$datenp;
        
       
    }
    public function idp(){return $this->_idp;}
    public function childs(){return $this->_childs;}
    public function nomp(){return $this->_nomp;}
    public function prenomp(){return $this->_prenomp;}
    public function datenp(){return $this->_datenp;}
    
   
   
    
}

?>