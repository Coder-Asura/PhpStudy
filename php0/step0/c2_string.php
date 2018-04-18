<?php
/**
 * Created by PhpStorm.
 * User: Asura
 * Date: 2018/4/18
 * Time: 17:02
 *
 * 字符串函数
 */

echo "字符长度为:" . strlen("Hello PHP");
echo "<br>";

//如果找到匹配，则会返回首个匹配的字符位置。如果未找到匹配，则将返回 FALSE。
echo strpos("Hello World", "World");
echo "<br>";
//区分大小写
echo strpos("Hello World", "hello");
echo "<br>";
echo strpos("Hello World", "asura");
echo "<br>";

//可省略
?>