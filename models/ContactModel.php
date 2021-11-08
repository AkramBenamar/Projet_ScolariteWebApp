<?php

class ContactModel extends Model{



public function getContact(){
    return $this->getPres('contact','Contact','1','1');


}

public function updatecon(){
    $this->getBdd();
    $reqs="UPDATE contact SET fax=".'"'.$_POST['fax'].'"'.",telephone=".'"'.$_POST['telephone'].'"'.",email=".'"'.$_POST['email'].'"'." WHERE email=".'"'.$_POST['emaila'].'"';  

    $req=$this->preparefree($reqs);
    $req->execute();
    $req->closeCursor();
    $a="";
    return $a;
}
}


?>