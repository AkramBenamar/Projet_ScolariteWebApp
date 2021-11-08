<?php

class CycleModel extends Model{


//Recuperer les articles de tous


public function getCycle($cycle){
    return $this->getPres('articles2','Article','interess',$cycle);


}


}


?>