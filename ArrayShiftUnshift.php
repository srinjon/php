<?php
$fruit = ['Orange','Banana','Apple','Grape'];
array_shift($fruit);
echo "<pre>";
print_r($fruit);
echo "</pre>";
array_unshift($fruit,'Guava','Lemon');
echo "<pre>";
print_r($fruit);
echo "</pre>";
