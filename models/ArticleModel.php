<?php

class ArticleModel extends Model{


//Recuperer les articles de tous
public function getArticles(){
    return $this->getAll('articles2','Article');
}
public function getArticle($ida){
    return $this->getOne('articles2','Article',$ida);
}

public function getPresentation(){
    return $this->getPres('articles2','Article','interess','Present');


}
public function getArtiAll(){
    return $this->getPres('articles2','Article','1','1');


}
public function getArticlestud(){
    $var=[];
    $var[]= $this->getPres('articles2','Article','interess','Primaire');
    $var[]= $this->getPres('articles2','Article','interess','Moyen');
    $var[]= $this->getPres('articles2','Article','interess','Secondaire');
    return $var;
}
public function getArticleparent(){
    return $this->getPres('articles2','Article','interess','Parents');


}

public function createArticle(){
    return $this->createOne('articles2','Article');
}
public function createPres(){
    return $this->createOnep('articles2','Present');
}

public function updatePres(){
    return $this->update('articles2','Present');
}

public function updateart(){
    return $this->update2('articles2','Article');
}

}


?>