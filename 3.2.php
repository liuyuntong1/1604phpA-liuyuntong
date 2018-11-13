<?php 

$str = 5;
$sum = 0;
for($i=1;$i<=$str;$i++){
	$sum=$sum+$i;
	if($i==1){
		echo $i;
	}else{
		echo "+".$i;
	}
}
echo "</br>".$sum;

?>