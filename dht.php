<?php
/*class dht11{
 public $link='';
 function __construct($identifier){
  $this->connect();
  $this->storeInDB($identifier);
 }
 
 function connect(){
  $this->link = mysqli_connect('localhost','root','') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'prueba_arduino') or die('Cannot select the DB');
 }
 
 function storeInDB($identifier){
  $query = "insert into asistencia set codigo='".$identifier."'";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['identifier'] != ''){
 $dht11=new dht11($_GET['identifier']);
}*/
class dht11{
 public $link='';
 function __construct($identifier){
  $this->connect();
  $this->storeInDB($identifier);
 }
 
 function connect(){
  $this->link = mysqli_connect('157.230.53.247','jorge','Meza0174') or die('Cannot connect to the DB');
  mysqli_select_db($this->link,'prueba_arduino') or die('Cannot select the DB');
 }
 
 function storeInDB($identifier){
  $query = "INSERT into asistencia(codigo) VALUES('$identifier')";
  $result = mysqli_query($this->link,$query) or die('Errant query:  '.$query);
 }
 
}
if($_GET['identifier'] != ''){
 $dht11=new dht11($_GET['identifier']);
}


?>
