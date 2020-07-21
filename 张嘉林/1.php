<!DOCTYPE html> 
<html> 
<body> 
<?php
function bubble_sort($array)
{
    $count = count($array);
    if($count <= 0)
    {
        return false;
    }
    for($i=0; $i<$count; $i++)
    {
        for($k=$count-1; $k>$i; $k--)
        {
            if($array[$k] < $array[$k-1])
            {
                $tmp = $array[$k];
                $array[$k] = $array[$k-1];
                $array[$k-1] = $tmp;
            }
        }
    }
    return $array;
}
$arr = array(14,33,12,17,25);
$s = bubble_sort($arr);
print_r($s);
?>
</body> 
</html>