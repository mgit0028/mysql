<?php
echo "<pre>";
echo "<center>";
echo "<h2  style=color:#FF0000  >大乐透POST勾选随机版前区</>";

echo "<h2  style=color:#FF0000 >您勾选的号码是</>";

print_r ($_POST);   //打印出勾选号码


echo "<h2 style=color:#FF0000 >您勾选后随机的号码是</>";


print_r(array_rand($_POST,5));   //在勾选号码中随机




?>

