<?php

$file = fopen("C:\Users\Hariket Sheth\Desktop\lab11.txt", "r+");
$numbers = array();
$final = array();
while(!feof($file)){
    $temp = fgets($file);
    array_push($numbers,$temp);
}
fclose($file);
for($i=0; $i<count($numbers); $i++){
    $count = 1;
    if(!in_array($numbers[$i], $final)){
        for($j=0; $j<count($numbers); $j++ ){
            if($numbers[$j] == $numbers[$i] && $j!=$i)
                $count += 1;
        }
        if($count%2!==0){
            array_push($final,$numbers[$i]);
        }
            
    }
}
$output = fopen("C:\Users\Hariket Sheth\Desktop\lab11out.txt", "w+");
sort($final);
for($i=0; $i<count($final); $i++){
    fwrite($output, $final[$i]);
    echo "Number ".($i+1).": ".$final[$i];
}
?>