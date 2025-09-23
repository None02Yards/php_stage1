<?php
$a = 15; $b = 7; $k = 3;

$state_role = 0; 

for ($i = 0; $i < 2; $i++) {
    $num = ($i == 0) ? $a : $b;
    if ($num % $k == 0) {
        $state_role |= ($i == 0) ? 2 : 1;
    }
}
if ($state_role == 3)      echo "Both\n";
elseif ($state_role == 2)  echo "Memo\n";
elseif ($state_role == 1)  echo "Momo\n";
else              
echo "No One\n";
