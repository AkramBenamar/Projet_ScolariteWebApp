<?php

class EspacesModel extends Model{


//Recuperer les articles de tous


public function getStudent(){
    $this->getBdd();
    $req=$this->prepare('user','nomu,prenomu','idu',$_GET['idu']);
    
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    $noms="";
    $prenoms="";
    $classe='';
    $niveau="";
    $daten="";
    $activit="";
    foreach ($data as $key=>$value){
        if ($key=="nomu"){$noms=$value;}
        if ($key=="prenomu"){$prenoms=$value;}
    }
    $req->closeCursor();
    $req2=$this->prepare('student','classe,daten,niveau,activit','ids',$_GET['idu'] );
    $req2->execute();
    $data2=$req2->fetch(PDO::FETCH_ASSOC);
    foreach ($data2 as $key2=>$value2){
        if ($key2=="classe"){$classe=$value2;}
        if ($key2=="daten"){$daten=$value2;}
        if ($key2=="niveau"){$niveau=$value2;}
        if ($key2=="activit"){$activit=$value2;}
    }
    $req2->closeCursor();











      
      
      
  
      $req4=$this->prepare2('emp','*','classe',$classe);
        $req4->execute();
        $i=-1;
        $j=0;
        $dataa=[];
        while ($data=$req4->fetch(PDO::FETCH_ASSOC)) {
            $i=$i+1;
            if ($i<5){
                $dataa[]=$data;
               
            }

            if ($i==4){
                $emp=new Emp($dataa);
                $dataa=[];
                $j++;
                $i=-1;
            }
            
        }
        $req->closeCursor();
        
  
    
    $req3=$this->prepare('notes','matiere,cc,devoir,exam','idn',$_GET['idu']);
    
    
    $req3->execute();
    $notes=[];
    while($data3=$req3->fetch(PDO::FETCH_ASSOC)){

        $notes[]=$data3;
    }
    $req3->closeCursor();
    $student=new Student($_GET['idu'] ,$noms,$prenoms,$emp,$notes,$daten,$activit);
    return $student;

}



public function getusers(){
    $this->getBdd();

   $reqs="SELECT * FROM user WHERE idu =".$_POST['ids']." AND passu="."'".$_POST['password']."'"."";
    $req=$this->preparefree($reqs);
    $req->execute();
    $i=0;
    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $i++;

    }
    return $i;
}

public function getuserp(){
    $this->getBdd();

   $reqs="SELECT * FROM user WHERE idu =".$_POST['ide']." AND passu="."'".$_POST['passworde']."'"."";
    $req=$this->preparefree($reqs);
    $req->execute();
    $i=0;
    while($data=$req->fetch(PDO::FETCH_ASSOC)){
        $i++;

    }
    return $i;
}
}


?>