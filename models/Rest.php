<?php
class Rest {



    private $_dimanche;
    private $_lundi;
    private $_mardi;
    private $_mercredi;
    private $_jeudi;

    public function __construct(array $dataa){
    foreach($dataa as $data){

         foreach($data as $key=>$value){

            if($key=="dimanche"){$this->_dimanche=$value;}
            if($key=="lundi"){$this->_lundi=$value;}
            if($key=="mardi"){$this->_mardi=$value;}
            if($key=="mercredi"){$this->_mercredi=$value;}
            if($key=="jeudi"){$this->_jeudi=$value;}
        }

}
        
    }
    public function dimanche(){return $this->_dimanche;}
    public function lundi(){return $this->_lundi;}
    public function mardi(){return $this->_mardi;}
    public function mercredi(){return $this->_mercredi;}
    public function jeudi(){return $this->_jeudi;}
   
    
}

?>