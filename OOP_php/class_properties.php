<?php 
 //class
 class mycls
 { 
//properties

public $name = "DEFAULT";  // public / private / protected
public $email = "DEFAULT";
public $id = "DEFAULT";

}
$obj1 = new mycls();// new object in the class mycls()
$obj2 = new mycls();
$obj3 = new mycls();
$new_arr = [$obj1,$obj2,$obj3];


$obj2-> email= "jhonDoe@gj.cf";
$obj3->id= "12300";
echo "<br>";
class cls2 
{ 
    public $name2; 
}
$obj1 = new cls2();
$obj1-> name2 = "mohamed" ;
echo "<pre>";
print_r($obj1);
echo "</pre>";







?>