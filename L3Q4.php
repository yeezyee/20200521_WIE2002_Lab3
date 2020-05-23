<?php
$namesString = 'John, Jerry, Ann, Sanji, Wen, Paul, Louise, Peter';
$namesArray = explode(", ", $namesString);
array_shift($namesArray);
array_push($namesArray,'Willie','Daniel');
//$namesArray[4]='Andre';
$counter = 0;
foreach($namesArray as $value){
    if($value == 'Paul'){
        $namesArray[$counter]='Andre';
    }
    $counter++;
}
array_unshift($namesArray,'Alisha');
print_r($namesArray);

?>