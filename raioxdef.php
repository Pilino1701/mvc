<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With'); 
header('Content-Type: application/json; charset=utf-8');  
error_reporting(0);
$a=$_GET['par'];



abstract class Connection{
  private $dbname='mysql:host=127.0.0.1;dbname=ajax';
  private $user='root';
  private $pass='';

  protected function connect(){

    try{
      $conn= new \PDO($this->dbname,$this->user,$this->pass);
      $conn->exec("set names utf8");
      return $conn;
    }
    catch(\PDOException $erro){
      echo $erro->getMessage();
    }

  } //connect
}//class Connection

class Crud extends Connection{ //nota, se la classe é nella stessa pasta non devo usare use
   
   public function quadro(){
    $dia=date('Y-m-d');
    $tst = strtotime($dia);
    $dt_qu=trim(date('d/m/Y', $tst));

    $conn=$this->connect();
    $sql="select * from usuario where data_ac>='$dia' and data_ac<='2060-01-01' and flag_us='1'and substr(modalidade,1,5)<>'PERSO'"; //nome qui é il campo della tabella
    $stmt=$conn->prepare($sql);
    $stmt->execute();
    $result=$stmt->rowCount();
    return $result;
  }//read

    

}//class Crud

$obj=new Crud();
$alat=$obj->quadro();
$ar = array('alat' => $alat);
echo json_encode($ar);
return;
?>
       
