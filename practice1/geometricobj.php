<!DOCTYPE <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>leetcode answers</h1>
    <?php

  abstract class GeometricObject{
    private $color;
    private $filled;
    protected function __construct($color=null,$filled = null){
        if($color != null){
            $this->color = $color;
        }
        if($filled != null){
            $this->filled = $filled;
        }
     }
     public function getColor():string{
        return $this->color;

     }
     public function setColor($color){
       

     }
     public function isFilled():bool{
        return true;
     }
     abstract public function getArea():int;
     abstract  public function getPerimeter():int;  

    }

    class Circle extends GeometricObject{
        private $radius;
        public function __construct( $radius = null, $color = null){
            if($color != null){
             $this->getColor();

            }
            if($radius != null){
                $this->radius = $radius;
   
               }
              

        }
        public function getRadius():int{
            return $this->radius;
        }
        public function setRadius($radius):void{

        }
        public function getDiameter():int{
            return $this->radius + $this->radius;
        }
        public function getArea():int{
            $area = pi()*pow($this->radius,2);
            return $area;

        }
        public function getPerimeter():int{
            $Perimeter = 2* $this->radius * pi();
            return $Perimeter;

        }
    }

    $circle1 = new Circle(7);
    $circle1->getArea();
    $circle1->getDiameter();
    $circle1->getPerimeter();

    
    
        
    

  

    ?>




</body>

</html>