<?php

function calculate($data, $num){
    $result = array();
    for($i = 1; $i<=5; $i++){
        $sum = 0;
        for($j = 0; $j<$num; $j++){
            echo $data[$j][$i];
        }
        $sum = $sum/(100*$num);
        $result[$i] = $sum;
    }
    return $result;
}

function lab9($data, $num){
    for($i=0; $i<$num; $i++){
        $name = readline("Enter the name of the Student: ");
        $m1 = (int)readline();
        $m2 = (int)readline();
        $m3 = (int)readline();
        $m4 = (int)readline();
        $m5 = (int)readline();
        $temp = array($name, $m1, $m2, $m3, $m4, $m5);
        array_push($data, $temp);

    }
    return $data;
}

$num = (int)readline("Enter the number of students: ");
$data = array(array("Hariket Sheth", 99, 98, 90, 90, 100));
$data = lab9($data, $num);
calculate($data, $num+1);
echo "Average for Physics: ".$result[0]."\n";
echo "Average for Chemistry: ".$result[1]."\n";
echo "Average for Maths: ".$result[2]."\n";
echo "Average for English: ".$result[3]."\n";
echo "Average for Hindi: ".$result[4]."\n";
?>