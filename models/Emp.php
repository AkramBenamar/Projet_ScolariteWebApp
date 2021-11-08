<?php
class Emp{

    private $_seance1;
    private $_seance2;
    private $_seance3;
    private $_seance4;
    private $_seance5;
    private $_seance6;
    private $_seance7;
    private $_seance8;
    private $_classe;
    private $_niveau;

    public function __construct(array $dataa)
    {
    $seance1=[];
    $seance2=[];
    $seance3=[];
    $seance4=[];
    $seance5=[];
    $seance6=[];
    $seance7=[];
    $seance8=[];
    $niveau="";
    $classe="";
        foreach ($dataa as $data ){
            foreach($data as $key=>$value){
                if ($key=="classe"){$classe=$value;}
                if ($key=="niveau"){$niveau=$value;}
                if($key=="seance1"){$seance1[]=$value;}
                if($key=="seance2"){$seance2[]=$value;}
                if($key=="seance3"){$seance3[]=$value;}
                if($key=="seance4"){$seance4[]=$value;}
                if($key=="seance5"){$seance5[]=$value;}
                if($key=="seance6"){$seance6[]=$value;}
                if($key=="seance7"){$seance7[]=$value;}
                if($key=="seance8"){$seance8[]=$value;}

            }
        }
        $this->_seance1=$seance1;
        $this->_seance2=$seance2;
        $this->_seance3=$seance3;
        $this->_seance4=$seance4;
        $this->_seance5=$seance5;
        $this->_seance6=$seance6;
        $this->_seance7=$seance7;
        $this->_seance8=$seance8;
        $this->_classe=$classe;
        $this->_niveau=$niveau;
    }

    public function seance1(){return $this->_seance1;}
    public function seance2(){return $this->_seance2;}
    public function seance3(){return $this->_seance3;}
    public function seance4(){return $this->_seance4;}
    public function seance5(){return $this->_seance5;}
    public function seance6(){return $this->_seance6;}
    public function seance7(){return $this->_seance7;}
    public function seance8(){return $this->_seance8;}
    public function classe(){return $this->_classe;}
    public function niveau(){return $this->_niveau;}
    


}
?>