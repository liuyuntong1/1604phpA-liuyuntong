<?php
/*
 * 随机输入一个正整数，转换成二进制
 *最后得出二进制中亿的个数
 * */

echo NumberOf1(111);
function NumberOf1($n)
{
	return substr_count(decbin($n),"1");
}