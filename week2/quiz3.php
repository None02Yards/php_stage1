<?php
$numbersParam = " 1  8 5  7 5 "; // مثال؛ مش مهم حتى لو فيه مسافات زيادة
$result = '';

if ($numbersParam !== '') {
    $rawParts = explode(' ', $numbersParam);

    
    $parts = [];
    foreach ($rawParts as $p) {
        if ($p !== '') {      
            $parts[] = $p;
        }
    }

    $count = count($parts);
    if ($count > 0) {
        $maxValue = (int)$parts[0];
        $index = 1;

        if ($count > 1) {
            do {
                $current = (int)$parts[$index];
                if ($current > $maxValue) {
                    $maxValue = $current;
                }
                $index++;
            } while ($index < $count);
        }

        $result = $maxValue;
    }
}

echo $result, PHP_EOL;
