<?php
echo "<pre>";
echo "<center>";




echo "<h2  style=color:#FF0000  >双色球POST勾选随机版后区</>";

echo  "<br>";

echo "<h2   style=color:#FF0000  >您勾选勾选的号码是</>";

print_r($_POST);   //打印出勾选号码
echo  "<hr>";


echo "<h2   style=color:#FF0000  >您勾选后随机的号码是</>";

echo  "<br>";


print_r(array_rand($_POST,1));//在勾选号码中随机

echo  "<br>";




print_r(array_rand($_POST,1));   //打印出勾选号码随机



?>






