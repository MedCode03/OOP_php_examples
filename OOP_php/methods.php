<?php 
class pay 
{ 
public $calls ;
public $internet ;
const  SMS = "unlimited" ;
const  INFO= "your network is : ";
public function func($param)
  { 
   echo pay::INFO. $param  ;
  }

  
}
$user1= new pay();
$user2= new pay();
$user3= new pay();

$user1->func("inwi");
$user1->calls = "3h";
$user1->internet = "50Go";
echo "<pre>";
 print_r($user1);
echo "</pre>";
echo "<br>";
$user2->func("iam");
$user2->calls = "2h";
$user2->internet = "30Go";
echo "<pre>";
 print_r($user2);
echo "</pre>";
echo "<br>";
$user3->func("orange");
$user3->calls = "1h";
$user3->internet = "70Go";
echo "<pre>";
 print_r($user3);
echo "</pre>";







?>