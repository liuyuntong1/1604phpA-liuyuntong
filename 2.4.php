<?php 
function LastRemaining_Solution($n, $m)
{
    $arr = range(1,$n);//给每个人设置编号

    while(count($arr)>1)
    {
        for($i = 1; $i <= $m; $i++)
        {
            if(next($arr)){ //如果存在 next 元素
                if($i == $m)
                {
                    $k = array_search(prev($arr), $arr);//查找当前数组的key
                    unset($arr[$k]);//当数到 m 时，使用 unset() 删除数组元素
                    unset($k);
                }
            }
            else{
                reset($arr);//则数组的第一个元素充当 next 元素，组成一个环
                if($i == $m)
                {
                    $k =array_search(end($arr), $arr);
                    unset($arr[$k]);//当数到 m 时，使用 unset() 删除数组元素，注意这里是 end()
                    reset($arr);//指针复位
                    unset($k);
                }
            }
        }
    }
    return current($arr);
}

echo LastRemaining_Solution(100, 3);

?>