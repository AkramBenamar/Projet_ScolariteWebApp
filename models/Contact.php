<?php

class Contact {


    private $_fax;
    private $_telephone;
    private $_email;
   
    
   public function __construct(array $data)
   {
    

        foreach($data as $key=>$value){

           if($key=="fax"){$this->_fax=$value;}
           if($key=="telephone"){$this->_telephone=$value;}
           if($key=="email"){$this->_email=$value;}
           
       }





   }


   public function fax(){return $this->_fax;}
   public function telephone(){return $this->_telephone;}
   public function email(){return $this->_email;}
  

        
    }







?>