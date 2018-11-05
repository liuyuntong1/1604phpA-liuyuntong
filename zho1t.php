<?php
//1.循环
/*$sum=0;
for($i=1;$i<=100;$i++) {
$sum+=$i;
}
echo $sum;*/
//2.
/*$sum= $i = 0;
while( $i<= 100 ) {
$sum += ( $i++ );// $sum += $i;$i++;
}
echo $sum;*/
//3.递归：
function get_sum($n){
return $n==1?1:$n+get_sum($n-1);
}
echo get_sum(100);

/*求n的阶乘*/
function factorial($n){
    if($n<=1){
        return 1;
    }
    if($n>1){
        return $n*factorial($n-1);
    }
}
/**
 * name 姓名;
 * age 年龄;
 */
class Person()
{
	public function __construct($age,$name)
	{
		$this->age=$age;
		$this->name=$name;
	}
}
/**
 * 
 */
class Walk()
{
	
}
class Student()
{
	
}
