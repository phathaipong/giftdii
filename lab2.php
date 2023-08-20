<?php
    $houseblockwidth=10;
    $houseblocklength=7.5;
    $housewidth=5.5;
    $houselength=3;
    $houseblockarea=$houseblockwidth*$houseblocklength;
    $housearea=$housewidth*$houselength;
    $mowingarea=$houseblockarea-$housearea;
    $mowingtime=$mowingarea/2;


print"mowing details <br><br>";
print"house block width = $houseblockwidth<br>";
print"house block length = $houseblocklength<br><br>";
print"house width = $housewidth<br>";
print"house length = $houselength<br><br>";
print"house block area = $houseblockarea<br>";
print"house area = $housearea<br><br>";
print"mowing area = $mowingarea<br>";
print"mowing time = $mowingtime<br>";
?>