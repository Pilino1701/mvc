<?php
namespace core;
	
class Router {
  //public $test="Petrus Victor";
  private $controller='Site';
  private $method='home';
  private $param=[];

 public function __construct(){
  $router=$this->url();//notare, riuter é una variabile

  if(file_exists('app/controllers/'.ucfirst($router[0]).'.php')):
    $this->controller=$router[0];
    unset($router[0]);
  endif;


  $class="\\app\\controllers\\".ucfirst($this->controller);

  $object=new $class;

  if(isset($router[1]) and method_exists($class,$router[1])):
    $this->method=$router[1];
    unset($router[1]);
  endif;

  $this->param= $router ? array_values($router):[];
  
  call_user_func_array([$object,$this->method],$this->param);
  
 }


private function url(){

//router foi definida em .htacce na pasta raiz:cursomvc
$parse_url= explode('/',filter_input(INPUT_GET,'router',FILTER_SANITIZE_URL));

return $parse_url;

}

}//class Router


?>