<!DOCTYPE html>
<html>
<body>

<?php
trait message1 {
  public $name;
  public function __construct($name){
  	$this->name = $name;
  }
  public function msg1() {
    echo "OOP is fun! "; 
  }
}

class Welcome {
  use message1;
}

$obj = new Welcome("anas");
echo $obj->name . "<br>";
$obj->msg1();
?>
 
</body>
</html>
