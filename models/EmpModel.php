<?php

class EmpModel extends Model{


//Recuperer les articles de tous


public function getEmp(){
    
    return $this->getPres2('emp','Emp','niveau',$_GET['idc'] ,5);


}

public function insemp(){
    foreach($_POST['niveau'] as $in){
        $niveau=$in;
    }
    $this->getBdd();
    $reqs="INSERT INTO emp (classe,jour,seance1,seance2,seance3,seance4,seance5,seance6,seance7,seance8,niveau) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $req=$this->preparefree($reqs);
    $req->execute(array($_POST['classe'],'dimanche',$_POST['d1'],$_POST['d2'],$_POST['d3'],$_POST['d4'],$_POST['d5'],$_POST['d6'],$_POST['d7'],$_POST['d8'],$niveau));
    
    $reqs="INSERT INTO emp (classe,jour,seance1,seance2,seance3,seance4,seance5,seance6,seance7,seance8,niveau) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
    $req=$this->preparefree($reqs);
    $req->execute(array($_POST['classe'],'lundi',$_POST['l1'],$_POST['l2'],$_POST['l3'],$_POST['l4'],$_POST['l5'],$_POST['l6'],$_POST['l7'],$_POST['l8'],$niveau));
  
    $reqs="INSERT INTO emp (classe,jour,seance1,seance2,seance3,seance4,seance5,seance6,seance7,seance8,niveau) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$req=$this->preparefree($reqs);
$req->execute(array($_POST['classe'],'mardi',$_POST['m1'],$_POST['m2'],$_POST['m3'],$_POST['m4'],$_POST['m5'],$_POST['m6'],$_POST['m7'],$_POST['m8'],$niveau));


$reqs="INSERT INTO emp (classe,jour,seance1,seance2,seance3,seance4,seance5,seance6,seance7,seance8,niveau) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$req=$this->preparefree($reqs);
$req->execute(array($_POST['classe'],'mercredi',$_POST['me1'],$_POST['me2'],$_POST['me3'],$_POST['me4'],$_POST['me5'],$_POST['me6'],$_POST['me7'],$_POST['me8'],$niveau));

$reqs="INSERT INTO emp (classe,jour,seance1,seance2,seance3,seance4,seance5,seance6,seance7,seance8,niveau) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
$req=$this->preparefree($reqs);
$req->execute(array($_POST['classe'],'jeudi',$_POST['j1'],$_POST['j2'],$_POST['j3'],$_POST['j4'],$_POST['j5'],$_POST['j6'],$_POST['j7'],$_POST['j8'],$niveau));
$a="";
return $a;
}
}


?>