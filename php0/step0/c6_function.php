<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 18:00
 * php 函数
 */

function writeMsg()
{
    echo "Hello world!";
}

echo "--------------------函数---------------------";
echo "<br>";

writeMsg(); // 调用函数
echo "<br>";

//一个参数
function familyName($fname)
{
    echo "$fname Zhang.<br>";
}

familyName("Li");
familyName("Hong");
familyName("Tao");
familyName("Xiao Mei");
familyName("Jian");
echo "<br>";

//两个参数
function familyName2($fname, $year)
{
    echo "$fname Zhang. Born in $year <br>";
}

familyName2("Li", "1975");
familyName2("Hong", "1978");
familyName2("Tao", "1983");
echo "<br>";

//默认参数，必须放在最后
function setHeight($minheight = 50)
{
    echo "The height is : $minheight <br>";
}

setHeight(350);
setHeight(); // 将使用默认值 50
setHeight(135);
setHeight(80);
echo "<br>";

//带返回值
function sum($x, $y)
{
    $z = $x + $y;
    return $z;
}

echo "5 + 10 = " . sum(5, 10) . "<br>";
echo "7 + 13 = " . sum(7, 13) . "<br>";
echo "2 + 4 = " . sum(2, 4) . "<br>";
//实参比形参少，报错
//echo "" . sum(1). "<br>";
//实参比形参多，也可以正常运行
echo "1+2+3=" . sum(1, 2, 3) . "<br>";
echo "<br>";

echo "--------------------强类型参数---------------------";
echo "<br>";

//强类型参数
function sum2(int $a, int $b)
{
    return $a + $b;
}

echo sum2(1, 2) . "<br>";
//会自动转换
echo sum2(1, 2.3) . "<br>";
//会自动转换
echo sum2(1, "2") . "<br>";
//报错
//echo sum2(1,"a"). "<br>";


echo "------------------可变参数列表-----------------------";
echo "<br>";

//可变参数列表
//5.5之前
function sum3()
{
    //获取参数长度
    $args_num = func_num_args();
    $sum = 0;
    if ($args_num == 0) {
        return $sum;
    } else {
        for ($i = 0; $i < $args_num; $i++) {
            //获取每一个参数累加
            $sum += func_get_arg($i);
        }
        return $sum;
    }
}

echo sum3() . "<br>";
echo sum3(1, 2, 3, 4, 5) . "<br>";

//5.5之后
function sum4(...$nums)
{
    $sum = 0;
    if (!$nums) {
        return $sum;
    } else {
        foreach ($nums as $num) {
            $sum += $num;
        }
        return $sum;
    }
}

echo sum4() . "<br>";
echo sum4(1, 2, 3, 4, 5) . "<br>";

echo "-----------------参数传递------------------------";
echo "<br>";


//值传递,和java类似
$a = 5;
$b = 7;
function sum5($a, $b)
{
    $a = 10;
    $b = 20;
    return $a + $b;
}

sum5($a, $b);
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";

//引用传递,和java类似
function sum6(&$a, &$b)
{
    $a = 10;
    $b = 20;
    return $a + $b;
}

sum6($a, $b);
echo "a = " . $a;
echo "<br>";
echo "b = " . $b;
echo "<br>";

echo "----------------可变函数-------------------------";
echo "<br>";

//可变函数
function getApple($num)
{
    return "Get " . $num . " Apple!";
}

function getOrange($num)
{
    return "Get " . $num . " Orange!";
}

function getBanana($num)
{
    return "Get " . $num . " Banana!";
}

$bug = "getApple";
//直接调用函数
echo $bug(1);
echo "<br>";

$bug = "getOrange";
echo $bug(2);
echo "<br>";

$bug = "getBanana";
echo $bug(3);
echo "<br>";

//封装一个获取水果的方法
function getFruit($name, $num)
{
    $bug = "get" . $name;
    echo $bug($num);
}

getFruit("Apple", 60);
echo "<br>";

getFruit("Banana", 160);
echo "<br>";

getFruit("Orange", 260);
echo "<br>";

echo "--------------------嵌套函数---------------------";
echo "<br>";

//嵌套函数
//单层嵌套
function out()
{
    function in()
    {
        echo "外部函数out()没被调用的话，我是不存在的函数";
        echo "<br>";
    }
}

//直接调用内部函数报错
//in();
out();
in();
//再次调用外部函数会报错,in()不能被重复定义
//out();
//改造
function out1()
{
    //判断in1()是否存在
    if (!function_exists("in1")) {
        function in1()
        {
            echo "外部函数out1()没被调用的话，我是不存在的函数";
            echo "<br>";

        }
    }
}

out1();
in1();
out1();

//多层嵌套
function out2($msg)
{
    echo "外部函数out2():" . $msg;
    echo "<br>";

    if (!function_exists('mid2')) {
        function mid2($msg2)
        {
            echo "外部函数out2()没被调用的话，我是不存在的函数:" . $msg2;
            echo "<br>";

            if (!function_exists('in2')) {
                function in2()
                {
                    echo "外部函数mid2()没被调用的话，我是不存在的函数";
                    echo "<br>";

                }
            }
        }
    }

    mid2($msg);
}

out2("Hello out2");
//mid2("Hello mid2");
in2();

echo "--------------------复杂函数，递归函数---------------------";
echo "<br>";
//复杂函数，递归函数
//把复杂问题分解，不断调用自身，如数学中的阶乘
function jiecheng($num)
{
    if ($num <= 0) {
        echo "$num" . "不大于0";
        return;
    }
    $sum = 1;
    if ($num == 1) {
        return $sum;
    } else {
        $sum = $num * jiecheng($num - 1);
    }
    return $sum;
}

echo "3的阶乘 = " . jiecheng(3);

echo "--------------------复杂函数，匿名（闭包）函数---------------------";
echo "<br>";
//复杂函数，匿名（闭包）函数
$clo = function () {
    echo "Hello world!";
};
$clo();
echo "<br>";

//传递参数
//值传递
$msg = "Asura";
$clo = function () use ($msg) {
    echo "Hello " . $msg;
    echo "<br>";

};

$clo();

//引用传递
$clo = function () use (&$msg) {
    echo "Hello " . $msg;
    echo "<br>";

};
$msg = "Asura6666";
$clo();

//闭包
function close($name, Closure $clo)
{
    echo "你好，" . $name;
    echo "<br>";
    $clo();
}

close("Asura", function () {
    echo "我是闭包函数";
    echo "<br>";

});

echo "--------------------代码重用---------------------";
echo "<br>";
//代码重用

//require（"引用文件名/函数"）；//如果程序有错误，抛出致命错误，脚本不会执行
//include（"引用文件名/函数"）；//如果程序有错误，只会抛出警告，脚本还是会执行
//require_once（"引用文件名/函数"）：//不能同时引用同一个文件，致命错误
//include_once同理（include）

//set_include_path('引入文件名')；
//get_include_path
//set_include_path(get_include_path.PATH_SEPARATOR.'文件名')
//ini_set('include_path','testa');设定值
//restore_include_path();取消

