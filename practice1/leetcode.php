<!DOCTYPE <html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Answers</h1>
    <?php
      function removeDuplicates(&$nums) {
        // for($i = 0; $i < count($nums);$i++){
        //     for($j = 0; $j < count($nums);$j++){
        //         if($nums[$i] == $nums[$j] && $i != $j){
        //             $nums[$i] = 101;   
        //         }
        //     }  
        // }
        // $dup = 0;
        // for($i = 0; $i < count($nums); $i++){
        //     if($nums[$i] != 101){
        //         $nums[$dup] = $nums[$i];
        //         $dup ++;
        //     }
        // }
        // $k = $dup;
        // while ($dup<count($nums)){
        //     $nums[$dup] = '_';
        //     $dup++;
        // }
        // echo $k;
    //     $dup = 0;
    //     for($i = 0; $i < count($nums);$i++){
    //         if($nums[$i]!= $nums[$dup]){
    //             $dup++;
    //             $nums[$dup]= $nums[$i];

    //         }
    //     }
    //     return $dup+1;
       }

    //  $nums = [0,0,1,1,1,2,2,3,3,4];
    // echo removeDuplicates($nums);

    // function removeElement(&$nums, $val) {
    //     $nums = array_values(array_diff($nums,[$val]));
    //     print_r($nums);
    //     $k = count($nums);
    //     echo $k;

        
        
    // }
    // $nums = [0,0,1,1,1,2,2,3,3,4];
    // removeElement($nums,1);

    // function ster($haystack, $needle){
    //    $lin=strlen($needle);
    //    $len = strlen($haystack);
    //    for($i = 0; $i < $len - $lin; $i++ ){
    //     $slice = substr($haystack,$i,$lin);
    //     if($slice === $needle){
    //         echo $i;
    //     }

    //    }
    //    return -1;
        
    // }
    // $haystack= "hello world!";
    // $needle = "world";
    // ster($haystack,$needle);

    // function getConcatenation($nums) {
    //     $dup = $nums;
    //     $ans = array_merge($dup,$nums);
    //     print_r($ans);
        
    // }
    // $nums = [1,2,3];
    // getConcatenation($nums);

    
    // function convertTemperature($celsius) {
    //     $Kelvin = $celsius + 273.15;
    //     $Fahrenheit = $celsius * 1.80 + 32.00;
    //     $array = [$Kelvin,$Fahrenheit];
    //     print_r($array);

    // }
    // $celsius = 31;
    // convertTemperature($celsius);

    function containsDuplicate($nums) {
        $uniquearray = array_unique($nums);
        $lin=count($uniquearray);
        $len=count($nums);
        if($lin != $len){
            return true;
        }
        return false;
    }
    $nums = [1,2,3,1];
    containsDuplicate($nums);

    ?>




</body>

</html>