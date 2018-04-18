<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/17
 * Time: 16:47
 * php 基础概念
 */
echo "Hello World";
//打印空行
echo "<br>";

echo 2 + 3;
echo "<br>";

echo 2 * 3;
echo "<br>";

//错误写法
//echo "Hello"+" World";
echo "Hello" . " World";
echo "<br>";

//定义变量
$a = "a";
$b = 3;
$c = 5.6;
$d = $b + $c;

echo $a;
echo "<br>";
echo $b;
echo "<br>";
echo $d;
echo "<br>";

//作用域  local、global、static
$x = 666;
function myTest()
{
    $y = 999; // 局部作用域
    global $x;// 转变为全局作用域
    echo "变量 x 是：$x";
    $x = 23333; // 修改赋值
    echo "<br>";
    echo "变量 y 是：$y";
}

myTest();
echo "<br>";

echo "变量 x 是：$x";
echo "<br>";
//报错
echo "变量 y 是：$y";
echo "<br>";

//PHP 同时在名为 $GLOBALS[index] 的数组中存储了所有的全局变量。下标存有变量名。
//这个数组在函数内也可以访问，并能够用于直接更新全局变量。
$z1 = 5555;
$z2 = 666;
function myTest1()
{
    $GLOBALS['x'] = $GLOBALS['z1'] + $GLOBALS['z2'];
}

myTest1();
echo "变量 x 是：$x";
echo "<br>";

//通常，当函数完成/执行后，会删除所有变量。不过，有时我需要不删除某个局部变量。实现这一点需要更进一步的工作。
//要完成这一点，请在您首次声明变量时使用 static 关键词：
//函数执行完，还是一个局部变量
function myTest2()
{
    static $x = 0;
    echo "静态变量 x 是：$x";
    echo "<br>";
    $x++;
}

myTest2();
myTest2();
myTest2();
//还是之前定义的
echo $GLOBALS['x'];
echo "<br>";

//echo 和 print
//echo - 能够输出一个以上的字符串
//print - 只能输出一个字符串，并始终返回 1
//提示：echo 比 print 稍快，因为它不返回任何值。
$txt1 = "Learn PHP";
$txt2 = "W3School.com.cn";
$cars = array("Volvo", "BMW", "Audi");

echo $txt1;
echo "<br>";
echo "Study PHP at $txt2";
echo "<br>";
echo "My car is a {$cars[0]}";
echo "<br>";

echo "<br>";

print $txt1;
print "<br>";
print "Study PHP at $txt2";
print "<br>";
print "My car is a {$cars[2]}";
print "<br>";

//数据类型
//整数
$x = 5985;
var_dump($x);
echo "<br>";
$x = -345; // 负数
var_dump($x);
echo "<br>";
$x = 0x8C; // 十六进制数
var_dump($x);
echo "<br>";
$x = 047; // 八进制数
var_dump($x);
//浮点数
$x = 10.365;
var_dump($x);
echo "<br>";
$x = 2.4e3;
var_dump($x);
echo "<br>";
$x = 8E-5;
var_dump($x);
//逻辑
$x = true;
$y = false;
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
//字符串
$x = 'a';
$y = 'y';
var_dump($x);
echo "<br>";
var_dump($y);
echo "<br>";
//数组
$cars = array("Volvo", "BMW", "Audi");
var_dump($cars);
echo "<br>";

//对象
class Car
{
    var $color;

    function Car($color = "green")
    {
        $this->color = $color;
    }

    function what_color()
    {
        return $this->color;
    }
}

function print_car($obj)
{
    foreach (get_object_vars($obj) as $prop => $val) {
        echo "\t$prop=$val\n";
    }
}

// 创建一个汽车对象
$baoma = new Car("white");
print_car($baoma);
echo "<br>";

//NULL 值
$g = null;
var_dump($g);
echo "<br>";


//可省略
?>
