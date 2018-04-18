<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 17:44
 *
 * php 条件语句
 */

//if条件语句
function getFlag($age)
{
    if ($age == 1) {

        echo "1 岁";
        echo "<br>";
    } elseif ($age == 2) {
        echo "2 岁";
        echo "<br>";
    } elseif ($age == 3) {
        echo "3 岁";
        echo "<br>";
    } else {
        echo "4 岁";
        echo "<br>";
    }

}

getFlag(1);
getFlag(2);
getFlag(3);
getFlag(555);
getFlag("");


//switch 条件语句
function getFlag1($age)
{
    switch ($age) {
        case 1:
            echo "1 岁";
            echo "<br>";

            break;
        case 2:
            echo "2 岁";
            echo "<br>";
            break;
        case 3:
            echo "3 岁";
            echo "<br>";
            break;
        default:
            echo "4 岁";
            echo "<br>";

    }
}

getFlag1(1);
getFlag1(2);
getFlag1(3);
getFlag1(555);
getFlag1("");

//while 循环
$x = 1;

while ($x <= 5) {
    echo "这个数字是：$x <br>";
    $x++;
}
echo "<br>";


$x = 1;
do {
    echo "这个数字是：$x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

//do while 循环至少会执行一次语句，即使条件测试在第一次就失败了。
$x = 6;
do {
    echo "这个数字是：$x <br>";
    $x++;
} while ($x <= 5);
echo "<br>";

//for 循环
for ($x = 0; $x <= 10; $x++) {
    echo "数字是：$x <br>";
}
echo "<br>";

//foreach 循环
$cars=array("BMW","Audi","benz");
foreach ($cars as $value){
    echo "$value <br>";
}
echo "<br>";
