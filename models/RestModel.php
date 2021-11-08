<?php

class RestModel extends Model{


//Recuperer les articles de tous


public function getRest(){
    
    return $this->getPres2('restau','Rest','niveau',$_GET['idc'] ,1);


}
public function getallrest(){
    $var=[];
    $var[]=$this->getPres2('restau', 'Rest', 'niveau', 'Primaire', 1);
    $var[]=$this->getPres2('restau', 'Rest', 'niveau', 'Moyen', 1);
    $var[]=$this->getPres2('restau', 'Rest', 'niveau', 'Secondaire', 1);
    return $var;
}

public function updateres(){
    $a="";
    $this->getBdd();
    $reqs="UPDATE restau SET dimanche=".'"'.$_POST['dp'].'"'.",lundi=".'"'.$_POST['lp'].'"'.",mardi=".'"'.$_POST['mp'].'"'.",mercredi=".'"'.$_POST['mep'].'"'.",jeudi=".'"'.$_POST['jp'].'"'." WHERE niveau='Primaire'";
    $req=$this->preparefree($reqs);
    $req->execute();
    $req->closeCursor();
    $reqs2="UPDATE restau SET dimanche=".'"'.$_POST['dm'].'"'.",lundi=".'"'.$_POST['lm'].'"'.",mardi=".'"'.$_POST['mm'].'"'.",mercredi=".'"'.$_POST['mem'].'"'.",jeudi=".'"'.$_POST['jm'].'"'." WHERE niveau='Moyen'";
    $req2=$this->preparefree($reqs2);
    $req2->execute();
    $req2->closeCursor();
    $reqs3="UPDATE restau SET dimanche=".'"'.$_POST['ds'].'"'.",lundi=".'"'.$_POST['ls'].'"'.",mardi=".'"'.$_POST['ms'].'"'.",mercredi=".'"'.$_POST['mes'].'"'.",jeudi=".'"'.$_POST['js'].'"'." WHERE niveau='Secondaire'";
    $req3=$this->preparefree($reqs3);
    $req3->execute();
    $req3->closeCursor();
return $a;
}


}


?>