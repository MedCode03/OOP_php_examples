<?php 

class animal 
{ 
  //props
  public $arri_date;
  public $origin;
  private $num;
  public $type;
  public $title_an = '<h2>Animals</h2>';

//methods
 public function idn($key,$date,$or,$num,$typ)
    { 
      $this->arri_date = $date;
      $this->origin = $or;
      $this->num = $num;
      $this->type = $typ;
         
        echo  "$key $typ : $date is origin of $or , we have $num $typ"."s<br>";
    
    }
}
    //inherited
  class birds extends animal 
  { 
           public $title_br = "<h2>Birds</h2>";
          
           public function idn2($key,$date,$or,$num,$typ,$vacc_date)
          { 
         
         echo  "$key $typ : $date is origin of $or , we have $num $typ"."s  ,";
         echo "the last vaccination on : $vacc_date <br>";  
          }
          

     }


  
//objects
$lion = new animal();
$wolf= new animal();
$fox = new animal();
$eagle = new birds();
$parrot = new birds();

echo $lion->title_an ;
$lion->idn('1:','25/10/2023','tanzanzia','26','lion');
$wolf->idn('2:','05/12/2023','usa','56','wolf');
$fox->idn('3:','13/7/2023','morocco','16','fox');
echo $eagle->title_br ;
$eagle->idn2('4:','13/7/2023','morocco','34','eagle','29/03/2019');
$parrot->idn2('5:','13/7/2023','Austria','100','parrot','13/01/2022');





?>