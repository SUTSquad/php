<?php
$a=rand();
$x=str_split("$a");
echo "排序前数组中的数为：";
$k=count($x);
for($i=0;$i<$k;$i++){
        echo $x[$i];
}
echo "<br>";
echo "排序后数组中的数为：";
for($i=0;$i<$k-1;$i++){
        for($j=0; $j<$k-1-$i; $j++){
            if($x[$j] > $x[$j+1]){
                $temp =$x[$j];
                $x[$j] = $x[$j+1];
                $x[$j+1]=$temp;
            }
        }
}
for($i=0;$i<$k;$i++){
        echo $x[$i];
}
?>
