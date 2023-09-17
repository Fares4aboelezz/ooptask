<?php
/*
class circle{
    
    private $radius=1.0;
    private $color='red';

   
    public function __construct( $radius)
    {
        $this->radius=$radius;
    }
    public function setradius($radius){
$this->radius=$radius;
    }
    public function setcolor($color){
        $this->color=$color;
    }
    public function getradius(){
        return $this->radius;
    }
    public function getcolor() {
        return $this->color;
    }
    public function getarea(){
        return  3.14*$this->radius* $this->radius ;
    }
}
$circle1=new circle(2.0);
echo "radius is "." ". $circle1->getradius()."<br>";
echo "color is "." ". $circle1->getcolor()."<br>"    ;
echo " area is "." ".$circle1->getarea()."<br>";
//***************************************
*/

/*
   class employee{
    private $id;
    private $fname;
    private $lname;
    private $salary;


     public function __construct($id,$fname,$lname,$salary)
     {
       $this->id=$id;
      $this->fname=$fname;
      $this->lname=$lname;
       $this->salary=$salary;
     }

     public function setsalary($salary){
       $this->salary=$salary;
     }

     public function getsalary(){
        return $this->salary;
     }

     public function setid($id){
       $this->id=$id;
     }

     public function getid(){
        return $this->id;
     }

     public function getname(){
        return $this->fname."". $this->lname;
     }
     public function raiseSalary($percent) {
        $increaseAmount = $this->salary * ($percent / 100);
        $this->salary += $increaseAmount;
    }
   
   }
   $employee1=new employee(3,"fares","aboelezz",5000);
   echo"id is"." ". $employee1->getid()."<br>";
   echo"name is"." ". $employee1->getname()."<br>";
   echo"salary is"." ". $employee1->getsalary()."<br>";

   $employee1->raiseSalary(20);
   echo "the new salary is "." ".$employee1->getsalary();
   */

   //************************* 
  
/*
  class rectangle{
    private $length;
    private $width;

    public function __construct($length,$width)    
    {
        $this->length=$length;
        $this->width=$width;
    }
    public function setlength($length)  {
        $this->length=$length;
    }
    public function getlength()  {
      return $this->length;
    }
    public function setwidth($width)  {
        $this->width=$width;
    }
    public function getwidth()  {
        return $this->width;
      }
      public function getarea() {
        return $this->width* $this->length;
    
      }
      public function getperimeter() {
        return  2*($this->width+ $this->length);
    
      }
      public function ToString()
    
      {
        return " rectangle[ lenght=$this->length, width=$this->width]";
      }
  }
  $rectangle1=new rectangle(12.0,8.0);
  echo "the length is "." ".$rectangle1->getlength()."<br>";
  echo "the width is "." ".$rectangle1->getwidth()."<br>";
  echo "the area is "." ".$rectangle1->getarea()."<br>";
  echo "the perimeter is "." ".$rectangle1->getperimeter()."<br>";
  echo $rectangle1->ToString()."<br>";

*/
class invoiceitem{
    private $id;
private $description;
private $quantity;
private $unitprice;

public function __construct($id,$description,$quantity,$unitprice)
{
    $this->id=$id;
    $this->description=$description;
    $this->quantity=$quantity;
    $this->unitprice=$unitprice;

}
public function setid($id) {
    $this->id=$id;
}
public function setdesc($description) {
    $this->description=$description;
}
public function setquantity($quantity) {
    $this->quantity=$quantity;
}
public function setunitprice($unitprice) {
    $this->unitprice=$unitprice;
}
public function getid() {
    return $this->id;
}
public function getdesc() {
    return $this->description;
}
public function getquantity() {
    return $this->quantity;
}
public function getunitprice() 
{
return $this->unitprice;    
}

public function gettotal() {
    return $this->quantity *$this->unitprice;
}
public function Tostring() {
    return " invoiceitem[ id=$this->id, description=$this->description,quantity=$this->quantity,unitprice=$this->unitprice]";
}
}
$invoiceitem1= new invoiceitem("3","this is description",40,20.6);
echo "id ="." ". $invoiceitem1->getid()."<br>";
echo "description ="." ". $invoiceitem1->getdesc()."<br>";
echo "quantity ="." ". $invoiceitem1->getquantity()."<br>";
echo "unitprice ="." ". $invoiceitem1->getunitprice()."<br>";
echo "total ="." ". $invoiceitem1->gettotal()."<br>";
echo   $invoiceitem1->Tostring();