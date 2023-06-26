<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<h1>The car program</h1>
<?php
 class Car{
    public $color;
    public $model;

    public function __construct($color,$model){
        $this ->color= $color;
        $this ->model = $model;
    }
    public function message(){
        return "my car is a " .$this->color. " " .$this->model. "!";

    }
 }

   class rover extends Car {
       public function question(){
          echo "what car is this?";
       }

    }

   
   $myCar = new rover('black','benz');
   $myCar->message();
   $myCar->question();

  
  

?>
</body>
</html>

