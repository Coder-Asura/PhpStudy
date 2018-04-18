<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 17:18
 * php 运算符
 */

//算输运算
$x = 10;
$y = 6;
echo($x + $y); // 输出 16
echo "<br>";

echo($x - $y); // 输出 4
echo "<br>";

echo($x * $y); // 输出 60
echo "<br>";

echo($x / $y); // 输出 1.6666666666667
echo "<br>";

echo($x % $y); // 输出 4
echo "<br>";

$x = 10;
echo $x; // 输出 10
echo "<br>";

//赋值运算
$y = 20;
$y += 100;
echo $y; // 输出 120
echo "<br>";

$z = 50;
$z -= 25;
echo $z; // 输出 25
echo "<br>";

$i = 5;
$i *= 6;
echo $i; // 输出 30
echo "<br>";

$j = 10;
$j /= 5;
echo $j; // 输出 2
echo "<br>";

$k = 15;
$k %= 4;
echo $k; // 输出 3
echo "<br>";

//字符串运算
$a = "Hello";
$b = $a . " world!";
echo $b; // 输出 Hello world!
echo "<br>";

$x = "Hello";
$x .= " world!";
echo $x; // 输出 Hello world!
echo "<br>";

//递增、递减运算
$x = 10;
echo ++$x; // 输出 11
echo "<br>";

$y = 10;
echo $y++; // 输出 10
echo "<br>";

$z = 5;
echo --$z; // 输出 4
echo "<br>";

$i = 5;
echo $i--; // 输出 5
echo "<br>";

//比较运算
$x = 100;
$y = "100";

var_dump($x == $y);
echo "<br>";
var_dump($x === $y);
echo "<br>";
var_dump($x != $y);
echo "<br>";
var_dump($x !== $y);
echo "<br>";

$a = 50;
$b = 90;

var_dump($a > $b);
echo "<br>";
var_dump($a < $b);
echo "<br>";

//逻辑运算
//运算符	名称	例子	结果
//and	与	$x and $y	如果 $x 和 $y 都为 true，则返回 true。
//or	或	$x or $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
//xor	异或	$x xor $y	如果 $x 和 $y 有且仅有一个为 true，则返回 true。
//&&	与	$x && $y	如果 $x 和 $y 都为 true，则返回 true。
//||	或	$x || $y	如果 $x 和 $y 至少有一个为 true，则返回 true。
//!	非	!$x	如果 $x 不为 true，则返回 true。

//数组运算符
//运算符	名称	例子	结果
//+	联合	$x + $y	$x 和 $y 的联合（但不覆盖重复的键）
//==	相等	$x == $y	如果 $x 和 $y 拥有相同的键/值对，则返回 true。
//===	全等	$x === $y	如果 $x 和 $y 拥有相同的键/值对，且顺序相同类型相同，则返回 true。
//!=	不相等	$x != $y	如果 $x 不等于 $y，则返回 true。
//<>	不相等	$x <> $y	如果 $x 不等于 $y，则返回 true。
//!==	不全等	$x !== $y	如果 $x 与 $y 完全不同，则返回 true。
$x = array("a" => "red", "b" => "green");
$y = array("c" => "blue", "d" => "yellow");
$a = array("c" => "1", "d" => "2");
$b = array("c" => 1, "d" => "2");
$c = array("d" => "2", "c" => "1");
$z = $x + $y; // $x 与 $y 的联合
var_dump($z);
echo "<br>";

var_dump($x == $y);
echo "<br>";

//顺序可以不同
var_dump($a == $c);
echo "<br>";

//数据类型可以不同
var_dump($a == $b);
echo "<br>";

var_dump($x === $y);
echo "<br>";

var_dump($x != $y);
echo "<br>";

var_dump($x <> $y);
echo "<br>";

var_dump($x !== $y);
echo "<br>";
