<?php
require_once('views/View.php');
class Router 
{

private $ctrol;
private $_view;

public function route()
{
    try
    {
        spl_autoload_register(function($class){require_once('models/'.$class.'.php');});
        $url="";
        //determiner controler selon url
        if(isset($_GET['url']))
        {
            //pn decompose l url et on lui applique un filtre

            $url=explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
            //le premier saut de l url
            $controller=ucfirst(strtolower($url[0]));
            $controllerClass="Controller".$controller;
            $controllerFile="controllers/".$controllerClass.".php";
            if(file_exists($controllerFile))
            {
                require_once($controllerFile);
                $this->ctrol=new $controllerClass($url); 
            }
            else
            {
                throw new \Exception("page introuvable",1);
            }
        }
        else
         {
             require_once('controllers/ControllerAcc.php');
             $this->ctrol=new ControllerAcc($url);
             
         }
    }
    catch(\Exception $e){
        $errmsg=$e->getMessage();
        $this->_view=new View('Error');//on appel le fichier error
        $this->_view->generate(array('error'=>$errmsg));
        //require_once('views/error.php');
        

        
    }
}


}





?>