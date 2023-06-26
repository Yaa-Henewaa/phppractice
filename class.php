<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>MY FRUIT PROGRAM</h1>
<?php
    class fruit{
        public $name;
        public $color;
        public function set_name($name){
            $this->name = $name;
        
        }
        public function get_name(){
            return $this->name;
        }
        public function message(){
            return "this fruit is an " .$this->name. "!";
        }
    }

    $apple = new fruit();
    $apple->set_name('apple');
    echo $apple-> message();


?>

</body>

</html>