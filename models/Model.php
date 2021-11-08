<?php
abstract class Model
{
    private static $_bdd;

    private static function setBdd()
    {
        self::$_bdd=new PDO('mysql:host=localhost;dbname=tdw;charset=utf8', 'root', '');
        //gerer les erreurs

        // self::$_bdd->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING);
        self::$_bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }


    protected function getBdd()
    {
        if (self::$_bdd==null) {
            self::setBdd();
            return self::$_bdd;
        }
    }
    //recuperer de la bdd
    protected function getAll($table, $obj)
    {
        $this->getBdd();
        $var=[];
        $req=self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE interess="Tous"');
    
        $req->execute();
    
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            $var[]=new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }

    protected function getPres($table, $obj, $condition, $solcond)
    {
        $this->getBdd();
        $var=[];
        $req=self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE '.$condition.'=?');
    
        $req->execute(array($solcond));
    
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            $var[]=new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }


    protected function getOne($table, $obj, $ida)
    {
        $this->getBdd();
        $var=[];
        $req=self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE ida=?');
        $req->execute(array($ida));
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            $var[]=new $obj($data);
        }
        $req->closeCursor();
        return $var;
    }


    protected function getDist($table, $ide, $cond, $solcond)
    {
        $this->getBdd();
        $var=[];
        $req=self::$_bdd->prepare('SELECT DISTINCT '.$ide.' FROM '.$table.' WHERE '.$cond.'= ?');
        $req->execute(array($solcond));
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            foreach($data as $cle => $val){
                if ($cle=="ide"){$var[]=$val;}
            }
            
        }
        $req->closeCursor();
        return $var;
    }


    protected function join(array $var)
    {
        $var2=[];
        foreach ($var as  $value) {
            $req=self::$_bdd->prepare('SELECT nomu,prenomu FROM user WHERE idu = '.$value);
            $req->execute();
            $data=$req->fetch(PDO::FETCH_ASSOC);
           
            $nome="";
            $prenome="";
            foreach ($data as $key2 => $value2) {
                if ($key2=="nomu") {
                    $nome= $value2;
                }
                
                if ($key2=="prenomu") {
                    $prenome= $value2;
                }
             
            }
            $req->closeCursor();
           
            $req2=self::$_bdd->prepare('SELECT jour,heur1,heur2 FROM ensresp WHERE id = ?');
            $req2->execute(array($value));
            $horaire=[];
            while ($data2=$req2->fetch(PDO::FETCH_ASSOC)) {
                 $horaire[]=$data2;
                 }
            $var2[]=new Ensresp($value,$nome,$prenome,$horaire);
            $req2->closeCursor();
        }
      return $var2;  
    }


    protected function getPres2($table, $obj, $condition, $solcond,$assem)
    {
        $this->getBdd();
        $var=[];
        $req=self::$_bdd->prepare('SELECT * FROM '.$table.' WHERE '.$condition.'=?');
    
        $req->execute(array($solcond));
        $i=-1;
        $j=0;
        $dataa=[];
        while ($data=$req->fetch(PDO::FETCH_ASSOC)) {
            $i=$i+1;
            if ($i<$assem){
                $dataa[]=$data;
               
            }

            if ($i==$assem-1){
                $var[]=new $obj($dataa);
                $dataa=[];
                $j++;
                $i=-1;
            }
            
        }
        $req->closeCursor();
        if ($j==1){return $var[0];}
        else{
            return $var;
        }
    }

    protected function prepare($table,$elmnt,$cond,$solcond){
        $req=self::$_bdd->prepare('SELECT '.$elmnt.' FROM '.$table.' WHERE '.$cond.'='.$solcond);
        return $req;
    }

    protected function prepare2($table,$elmnt,$cond,$solcond){
        $sol='"'.$solcond.'"';
        $req=self::$_bdd->prepare('SELECT '.$elmnt.' FROM '.$table.' WHERE '.$cond.' ='.$sol);
        return $req;
    }

    protected function preparefree($reqs){
        $req=self::$_bdd->prepare($reqs);
        return $req;
    }

    protected function createOne($table,$obj){
        $this->getBdd();
       
        foreach($_POST['interess'] as $idp){
            $interess=$idp;
        }
  
        $req=self::$_bdd->prepare("INSERT INTO ".$table." (titrea,imagea,descriptiona,liena,contenua,interess) VALUES (?,?,?,?,?,?)");
        $req->execute(array($_POST['titrea'],$_POST['imagea'],$_POST['descriptiona'],"null",$_POST['contenua'],$interess));
        $req->closeCursor();

    }


    protected function createOnep($table,$obj){
        $this->getBdd();
       
        $idp="Present";
        
       
        $req=self::$_bdd->prepare("INSERT INTO ".$table." (titrea,imagea,descriptiona,liena,contenua,interess) VALUES (?,?,?,?,?,?)");
        $req->execute(array($_POST['titrea'],$_POST['imagea'],$_POST['descriptiona'],"null",$_POST['contenua'],$idp));
        $req->closeCursor();

    }
    protected function update($table,$obj){
        $idp="Present";
        
        $this->getBdd();
        $req=self::$_bdd->prepare("UPDATE ".$table." SET titrea=".'"'.$_POST['titrea'].'"'.",imagea=".'"'.$_POST['imagea'].'"'.",descriptiona=".'"'.$_POST['descriptiona'].'"'.",liena='null',contenua=".'"'.$_POST['contenua'].'"'.",interess='Present' WHERE ida=".$_POST['ida']);
        $req->execute();
        $req->closeCursor();
        return $idp;

    }


    protected function update2($table,$obj){
        $a="";
        foreach($_POST['interess'] as $idp){
            $interess=$idp;
        }
        $this->getBdd();
        $req=self::$_bdd->prepare("UPDATE ".$table." SET titrea=".'"'.$_POST['titrea'].'"'.",imagea=".'"'.$_POST['imagea'].'"'.",descriptiona=".'"'.$_POST['descriptiona'].'"'.",liena='null',contenua=".'"'.$_POST['contenua'].'"'.",interess=".'"'.$interess.'"'." WHERE ida=".$_POST['ida']);
        $req->execute();
        $req->closeCursor();
        return $a;

    }









   

}


?>