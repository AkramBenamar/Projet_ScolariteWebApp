<?php

class EnsrespModel extends Model{


//Recuperer les articles de tous


public function getEnsresp(){
    $var=$this->getDist('ens','ide','niveau',$_GET['idc']);
    return $this->join($var);


}

public function getEnsresp2(){
    $var=$this->getDist('ens','ide','1',1);
    return $this->join($var);


}
public function updaten(){
$a="";
$this->getBdd();
$reqs="UPDATE ensresp SET jour="."'".$_POST['jour']."'".",heur1="."'".$_POST['heur1']."'".",heur2="."'".$_POST['heur2']."'"." WHERE id=".$_POST['ide']." AND jour="."'".$_POST['jh']."'";  

$req=$this->preparefree($reqs);
$req->execute();
$req->closeCursor();
$a="";
    return $a;
}

}


?>