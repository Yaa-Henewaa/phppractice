<!DOCTYPE <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
    <?php
function lengthOflastword($s){
   $ex = explode(' ',trim($s));
   $lastword = end($ex);
   echo strlen($lastword);
}
function lastword($s){
    for($i=strlen($s); $i >= 0; $i--){
        if($s[$i] != " "){
            $end = $i;
            
        }
    }
    for($i=$end; $i >= 0; $i--){
        if($s[$i] == " "){
            $start = $i;
            
        }
    }
    echo $end - $start;

}
//lastword(" fly me to the moon ");
//lengthOflastword(" hello world ");

function reversePrefix($word,$ch) {
    $target = $ch;
    $postion = strpos($word,$target);
    $substring = substr($word,0,$postion+1);
    $reverse = strrev($substring);
    $result= $reverse . substr($word,$postion+1);
    echo $result;

}
//reversePrefix("abchef","h");


/*function twoSum($nums, $target) {
    $mtarray= array();
    for($i=0;$i<count($nums);$i++){
        for($j=$i+1;$j<count($nums); $j++){
            if($nums[$i] + $nums[$j] === $target){
                return array($i,$j);

            }
         
        }

    }
    return $mtarray;

        
}
$nums = array(2,7,11,5);
$target = 9;
twoSum($nums,$target);*/

function mergeTwoLists($list1, $list2) {
        echo array_merge($list1,$list2);
        
}
$list1=[1,1,3,2];
$list2=[2,3,2,1];
mergeTwoLists($list1, $list2);



    ?>




</body>

</html>