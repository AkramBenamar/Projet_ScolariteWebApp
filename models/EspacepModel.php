<?php

class EspacepModel extends Model{



/*

public function getParent(){
    $this->getBdd();
    $req=$this->prepare('user','nomu,prenomu','idu',$_GET['idu']);
    
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    
    foreach ($data as $key=>$value){
        if ($key=="nomu"){$nomp=$value;}
        if ($key=="prenomu"){$prenomp=$value;}
      
        
    }
    $req->closeCursor();
    $req2=$this->prepare('student','ids,classe,daten,niveau,activit','idn',$_GET['idu'] );
    $req2->execute();
    while ($data2=$req2->fetch(PDO::FETCH_ASSOC)) {
        foreach ($data2 as $key2=>$value2) {
            if ($key2=="ids") {
                $ids=$value2;
                $reqs=$this->prepare('user', 'nomu,prenomu', 'idu', $ids);
    
                $reqs->execute();
                $datas=$reqs->fetch(PDO::FETCH_ASSOC);
                $reqs->closeCursor();
                foreach ($datas as $keys=>$values) {
                    if ($keys=="nomu") {
                        $noms=$values;
                    }
                    if ($keys=="prenomu") {
                        $prenoms=$values;
                    }
                }
            }
            if ($key2=="classe") {
                $classe=$value2;
            }
            if ($key2=="daten") {
                $daten=$value2;
            }
            if ($key2=="niveau") {
                $niveau=$value2;
            }
            if ($key2=="activit") {
                $activit=$value2;
            }
            
            $req4=$this->prepare2('emp', '*', 'classe', '1c2');
            $req4->execute();
            $i=-1;
            $j=0;
            $dataa=[];
            
            while ($data=$req4->fetch(PDO::FETCH_ASSOC)) {
                $i=$i+1;
                if ($i<5) {
                    $dataa[]=$data;
                }

                if ($i==4) {
                    $emp=new Emp($dataa);
                    $dataa=[];
                    $j++;
                    $i=-1;
                }
            }
            $req4->closeCursor();
        
  
    
            $req3=$this->prepare('notes', 'matiere,cc,devoir,exam', 'idn', $ids);
    
    
            $req3->execute();
            $notes=[];
            while ($data3=$req3->fetch(PDO::FETCH_ASSOC)) {
                
                $notes[]=$data3;
            }
            $req3->closeCursor();
            $childs[]=new Student($ids, $noms, $prenoms, $emp, $notes, $daten, $activit);
        }
    }
    $req2->closeCursor();

    $parent=new Parentt($_GET['idu'] ,$nomp,$prenomp,$childs,'');
    return $parent;

}
*/
public function getparent2(){
    $this->getBdd();
    $i=0;
    $req=$this->prepare('user','nomu,prenomu','idu',$_GET['idu']);
    
    $req->execute();
    $data=$req->fetch(PDO::FETCH_ASSOC);
    
    foreach ($data as $key=>$value){
        if ($key=="nomu"){$nomp=$value;}
        if ($key=="prenomu"){$prenomp=$value;}
     
        
    }
    $req->closeCursor();
    $idch=[];
    $childs=[];
    
    $reqch=$this->prepare('student','ids','idn',$_GET['idu'] );
    $reqch->execute();
    while($datach=$reqch->fetch(PDO::FETCH_ASSOC)){
      
        $idch[]=$datach;
    }
    $reqch->closeCursor();
  
    foreach($idch as $idc){
      
        foreach($idc as $cle=>$val){
            $childs[]=$this->getStudent2($val);
           
        }

    }
   
    $parentt=new Parentt($_GET['idu'] ,$nomp,$prenomp,$childs,'');

return $parentt;

}



public function getStudent2($user){
    $this->getBdd();
    $req=$this->prepare('user','nomu,prenomu','idu',$user);
    
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
    $req2=$this->prepare('student','classe,daten,niveau,activit','ids',$user );
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
        
  
    
    $req3=$this->prepare('notes','matiere,cc,devoir,exam','idn',$user);
    
    
    $req3->execute();
    $notes=[];
    while($data3=$req3->fetch(PDO::FETCH_ASSOC)){

        $notes[]=$data3;
    }
    $req3->closeCursor();
    $student=new Student($user,$noms,$prenoms,$emp,$notes,$daten,$activit);
    return $student;

}
}


?>